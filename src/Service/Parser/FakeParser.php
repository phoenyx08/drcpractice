<?php

namespace App\Service\Parser;

use PhoenyxStudio\Parser\AbstractParser;
use PhoenyxStudio\Parser\ParseResult\IParseResult;
use PhoenyxStudio\Parser\ParseResult\GeneralParseResult;
use App\Entity\Decision;
use App\Entity\Category;
use App\Classes\DecisionParseResultItem;
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
    private $yearLabelXpath = 'div/div/div/span';
    private $monthNodesXpath = 'div[@class="fi-table-body"]/div';
    private $monthNameXpath = 'div[1]';
    private $decisionsListNodeXpath = 'div[2]';
    private $decisionsNodesXpath = 'ul/li';
    private $decisionXpath = 'div/span/a';

    // Collections of DomElements
    private $yearNodes = [];
    private $monthNodes = [];

    private $decisions = [];

    private function init()
    {
        $this->domDocument = new DOMDocument();
        $this->domDocument->loadXML($this->source);
        $this->xpath = new DOMXPath($this->domDocument);
    }

    private function getFirstElementByXpath(string $xpath, \DOMElement $element)
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

        $yearNodes = $this->getElementsByXpath($this->yearNodesXpath, $root);

        foreach($yearNodes as $yearNode) {
            $yearLabel = $this->getFirstElementByXpath($this->yearLabelXpath, $yearNode)->textContent;
            $this->yearNodes[$yearLabel] = $yearNode;
        }

        $yearNodes = $this->yearNodes;

        foreach($this->yearNodes as $nodeKey => $nodeValue) {
            $monthYear = $nodeKey;

            $monthNodes = $this->getElementsByXpath($this->monthNodesXpath, $nodeValue);
            foreach($monthNodes as $monthNode) {
                $monthName = $this->getFirstElementByXpath($this->monthNameXpath, $monthNode)->textContent;
                $decisionsListNode = $this->getFirstElementByXpath($this->decisionsListNodeXpath, $monthNode);
                $this->monthNodes[] = [
                    'year' => $monthYear,
                    'name' => $monthName,
                    'list' => $decisionsListNode,
                ];
            }
        }

        foreach($this->monthNodes as $monthNode) {
            $decisionsNodes = $this->getElementsByXpath($this->decisionsNodesXpath, $monthNode['list']);
            foreach($decisionsNodes as $decisionNode) {
                $decision = $this->getFirstElementByXpath($this->decisionXpath, $decisionNode);
                $decisionName = $decision->textContent;
                $decisionLink = $decision->getAttribute('href');

                $decision = new \stdClass();
                $decision->Year = $monthNode['year'];
                $decision->Month = $monthNode['name'];
                $decision->Name = $decisionName;
                $decision->Link = $decisionLink;
                $decision->Category = 'solidarity';


                $this->decisions[] = $decision;
            }
        }

        $model = new \stdClass();
        $model->decisionsList = [];

        foreach($this->decisions as $decision) {
            $decisionObject = DecisionParseResultItem::fromObject($decision);
            $model->decisionsList[] = $decisionObject;
        }





        $parseResult->setObject($model);

        return $parseResult;
    }
}