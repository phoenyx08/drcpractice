<?php

namespace App\Classes;


use App\Entity\Decision;
use PhoenyxStudio\Parser\ParseResultListItem\IParseResultListItem;
//use PhoenyxStudio\Parser\ParseResultListItem\stdClass;
use App\Entity\Category;

class DecisionParseResultItem implements IParseResultListItem
{
    private static $decision;

    public static function fromObject(object $object)
    {
        self::$decision = new Decision();
        self::$decision->setYear($object->Year)
            ->setMonth(self::monthAbbrToInt($object->Month))
            ->setLink($object->Link)
            ->setName($object->Name)
            ->setCategory(self::categoryNameToCategory($object->Category));
        return self::$decision;
    }

    private function categoryNameToCategory(string $categoryName)
    {
        $category = new Category();
        $category->setName($categoryName);
        return $category;
    }

    private function monthAbbrToInt(string $abbreviation): int
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

