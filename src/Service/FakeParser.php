<?php

namespace App\Service;

use PhoenyxStudio\Parser\AbstractParser;
use PhoenyxStudio\Parser\ParseResult\IParseResult;
use PhoenyxStudio\Parser\ParseResult\GeneralParseResult;
use App\Entity\Decision;
use App\Entity\Category;
use DOMDocument;
use DOMXPath;


class FakeParser extends AbstractParser
{
    /**
     * @var xpath
     *
     * In further versions better to move to AbstractParser
     */
    protected $xpath;
    protected $rootXpath = '/section';
    private $yearNodesXpath = 'div[2]/div/div/div[@class="fi-document-table fi-table"]';

    private function init()
    {
        $this->domDocument = new DOMDocument();
        $this->domDocument->loadXML($this->source);
        $this->xpath = new DOMXPath($this->domDocument);
    }

    private function getFirstElementByXpath(string $xpath, DOMElement $element)
    {
        return $this->xpath
            ->query($xpath, $element)
            ->item(0);
    }

    private function getElementsByXpath(string $xpath, \DOMElement $element)
    {
        return $this->xpath
            ->query($xpath, $element);
    }

    private function getRootElement()
    {
        return $this->xpath
            ->query($this->rootXpath)
            ->item(0);
    }

    public function parse(string $source) : IParseResult
    {
        $parseResult = new GeneralParseResult();

        $this->source = $source;
        $this->init();

        $xpath = $this->xpath;

        $root = $this->getRootElement();

        $list = $this->getElementsByXpath($this->yearNodesXpath, $root);
        $yearNodes = [];

        foreach($list as $item) {
            $yearNodes[] = $item;
        }
        $months = [];
        foreach($yearNodes as $yearNode) {
            // get year title
            $query = 'div/div/div/span';
            $list = $xpath->query($query, $yearNode);
            $yearName = $list->item(0)->textContent;

            // get months nodes
            $query = 'div[@class="fi-table-body"]/div';
            $list = $xpath->query($query, $yearNode);
            foreach($list as $monthNode){
                $monthName = $xpath
                    ->query('div[1]', $monthNode)
                    ->item(0)->textContent;
                $monthFullNode = $xpath
                    ->query('div[2]', $monthNode);
                //$months[$yearName][$monthName][] = $monthFullNode;
                foreach($monthFullNode as $monthFullNodeItem) {
                    $decisionsNodeList = $xpath->query('ul/li', $monthFullNodeItem);
                    foreach($decisionsNodeList as $decisionsNode) {
                        $decisionName = $xpath->query('div/span/a', $decisionsNode)->item(0)->textContent;
                        $decisionLink = $xpath->query('div/span/a', $decisionsNode)->item(0)->getAttribute('href');
                        $months[$yearName][$monthName][] = [
                            $decisionName,
                            $decisionLink,
                        ];
                    }
                }
            }



        }
        print_r($months);

        //$parseResult->setObject($doc);

        return $parseResult;
    }
}