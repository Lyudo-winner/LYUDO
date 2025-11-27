<?php

namespace App;

class Salary
{
    static public int $totalHourse;

    static public function count(array $hours): int
    {
        self::$totalHourse = array_sum($hours);
        return array_sum($hours) * 2000;
    }
}