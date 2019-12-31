<?php

namespace App\Service;

use App\Classes\DecisionParseResultItem;
use App\Entity\Decision;
use App\Entity\Category;


class Converter
{
    public function parsedDecisionToDecisionEntity(object $parsedDecision, Category $category)
    {
        $decision = new Decision();
        $decision->setCategory($category)
            ->setLink($parsedDecision->Link)
            ->setMonth($this->monthAbbrToInt($parsedDecision->Month))
            ->setYear($parsedDecision->Year)
            ->setName($parsedDecision->Name);
        return $decision;
    }

    private function monthAbbrToInt(string $abbreviation) : int
    {
        $accordance = [
            'Jan' => 1,
            'Feb' => 2,
            'Mar' => 3,
            'Apr' => 4,
            'May' => 5,
            'Jun' => 6,
            'Jul' => 7,
            'Aug' => 8,
            'Sep' => 9,
            'Oct' => 10,
            'Nov' => 11,
            'Dec' => 12,
        ];
        $result = $accordance[$abbreviation];
        if ($result !== null) {
            return $result;
        }
        return 0;
    }

}