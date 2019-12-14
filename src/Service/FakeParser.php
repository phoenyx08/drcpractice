<?php

namespace App\Service;

use PhoenyxStudio\Parser\AbstractParser;
use PhoenyxStudio\Parser\ParseResult\IParseResult;
use PhoenyxStudio\Parser\ParseResult\GeneralParseResult;


class FakeParser extends AbstractParser
{
    private function createObject()
    {
        $a = new Class {
            private $title;
            private $heading;
            private $listItems;
            /**
             * @return mixed
             */
            public function getTitle()
            {
                return $this->title;
            }

            /**
             * @param mixed $title
             */
            public function setTitle($title)
            {
                $this->title = $title;
            }

            /**
             * @return mixed
             */
            public function getHeading()
            {
                return $this->heading;
            }

            /**
             * @param mixed $heading
             */
            public function setHeading($heading)
            {
                $this->heading = $heading;
            }
            public function addItem(string $text)
            {
                $this->listItems[] = $text;
            }
            public function getListItems()
            {
                return $this->listItems;
            }
        };
        return $a;
    }
    public function parse(string $source) : IParseResult
    {
        $parseResult = new GeneralParseResult();

        //$doc = new ParsedDocument();
        //
        $doc = $this->createObject();

        $this->source = $source;

        //$html = $this->getHtmlElement();

        //$xpath = new \DOMXPath($this->domDocument);
        $domDoc = new \DOMDocument();
        $domDoc->loadXML($source);
        $xpath = new \DOMXPath($domDoc);

        // get contents of title ta
        //$query = 'head/title';
        $query = '/section';
        //$title = $xpath->query($query, $html)->item(0)->textContent;
        $title = $xpath->query($query);
        $root = $title->item(0);
        $doc->setTitle($title);

        // get year divs
        //$query = 'div/div/div[@class="fi-document-table fi-table"]';
        $query = 'div[2]/div/div/div[@class="fi-document-table fi-table"]';
        $list = $xpath->query($query, $root);
        //$doc->setHeading($h1);
        foreach($list as $item) {
            $listitem = $item;
        }




        // get contents of h1 in content div
        $query = 'body/div[@class="content"]/h1';
        $h1 = $xpath->query($query, $html)->item(0)->textContent;
        $doc->setHeading($h1);

        // get li elements of list in the body
        $query = 'body/div[@class="content"]/ul/li';
        $lis = $xpath->query($query, $html);
        foreach ($lis as $li) {
            $doc->addItem($li->textContent);
        }

        $parseResult->setObject($doc);

        return $parseResult;
    }
}