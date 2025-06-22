const puppeteer = require('puppeteer');
const fs = require('fs');

async function scrapeSolidarityDecisions() {
    console.log('Starting FIFA solidarity decisions scraper...');
    
    const browser = await puppeteer.launch({
        headless: false, // Set to true for production
        defaultViewport: null,
        args: ['--start-maximized']
    });

    const page = await browser.newPage();
    const decisions = [];
    
    try {
        // Navigate to the page
        await page.goto('https://inside.fifa.com/legal/football-tribunal/dispute-resolution-chamber-decisions', {
            waitUntil: 'networkidle2',
            timeout: 60000
        });

        // Wait for page to load completely
        await page.waitForTimeout(5000);

        // Click on the Solidarity Contribution filter
        console.log('Applying Solidarity Contribution filter...');
        
        // Wait for filter buttons to appear
        await page.waitForSelector('button', { timeout: 30000 });
        
        // Find and click the solidarity contribution filter button
        const filterButtons = await page.$$('button, [role="button"], a');
        
        for (let button of filterButtons) {
            const text = await button.evaluate(el => el.textContent?.toLowerCase().trim());
            if (text && text.includes('solidarity')) {
                console.log('Found solidarity filter button, clicking...');
                await button.click();
                await page.waitForTimeout(3000);
                break;
            }
        }

        // Wait for results to load
        await page.waitForTimeout(5000);

        let hasMorePages = true;
        let currentPage = 1;

        while (hasMorePages) {
            console.log(`Scraping page ${currentPage}...`);
            
            // Wait for decision links to load
            await page.waitForTimeout(3000);
            
            // Extract decision links from current page
            const pageDecisions = await page.evaluate(() => {
                const links = [];
                
                // Look for various link patterns
                const selectors = [
                    'a[href*="decision"]',
                    'a[href*="pdf"]',
                    'a[href*="legal"]',
                    'a[href*="download"]',
                    'a[href*="tribunal"]'
                ];
                
                selectors.forEach(selector => {
                    const elements = document.querySelectorAll(selector);
                    elements.forEach(el => {
                        const href = el.getAttribute('href');
                        const text = el.textContent?.trim();
                        
                        if (href && text && 
                            (href.includes('decision') || 
                             href.includes('pdf') || 
                             text.toLowerCase().includes('solidarity') ||
                             text.toLowerCase().includes('drc'))) {
                            
                            const fullUrl = href.startsWith('http') ? href : 
                                           href.startsWith('/') ? 'https://inside.fifa.com' + href :
                                           'https://inside.fifa.com/legal/football-tribunal/dispute-resolution-chamber-decisions/' + href;
                            
                            links.push({
                                url: fullUrl,
                                title: text,
                                type: 'decision'
                            });
                        }
                    });
                });
                
                return links;
            });

            console.log(`Found ${pageDecisions.length} decisions on page ${currentPage}`);
            decisions.push(...pageDecisions);

            // Check for next page button
            const nextPageExists = await page.evaluate(() => {
                // Look for next page indicators
                const nextButtons = Array.from(document.querySelectorAll('button, a')).filter(el => {
                    const text = el.textContent?.toLowerCase();
                    return text && (text.includes('next') || text.includes('→') || text.includes('>'));
                });
                
                return nextButtons.length > 0 && !nextButtons[0].disabled;
            });

            if (nextPageExists && pageDecisions.length > 0) {
                // Click next page
                await page.evaluate(() => {
                    const nextButtons = Array.from(document.querySelectorAll('button, a')).filter(el => {
                        const text = el.textContent?.toLowerCase();
                        return text && (text.includes('next') || text.includes('→') || text.includes('>'));
                    });
                    
                    if (nextButtons.length > 0) {
                        nextButtons[0].click();
                    }
                });
                
                await page.waitForTimeout(5000);
                currentPage++;
            } else {
                hasMorePages = false;
            }

            // Safety limit
            if (currentPage > 50) {
                console.log('Reached maximum page limit (50)');
                break;
            }
        }

    } catch (error) {
        console.error('Error during scraping:', error);
    } finally {
        await browser.close();
    }

    // Remove duplicates
    const uniqueDecisions = decisions.filter((decision, index, self) =>
        index === self.findIndex(d => d.url === decision.url)
    );

    console.log(`\nTotal unique decisions found: ${uniqueDecisions.length}`);

    // Save results
    const timestamp = new Date().toISOString().replace(/[:.]/g, '-');
    const filename = `solidarity_decisions_${timestamp}.json`;
    
    fs.writeFileSync(filename, JSON.stringify(uniqueDecisions, null, 2));
    console.log(`Results saved to: ${filename}`);

    // Also save as simple text file with URLs
    const urlsFilename = `solidarity_decisions_urls_${timestamp}.txt`;
    const urls = uniqueDecisions.map(d => d.url).join('\n');
    fs.writeFileSync(urlsFilename, urls);
    console.log(`URLs saved to: ${urlsFilename}`);

    return uniqueDecisions;
}

// Check if running directly
if (require.main === module) {
    scrapeSolidarityDecisions().catch(console.error);
}

module.exports = { scrapeSolidarityDecisions };