<?php

declare(strict_types=1);

namespace Stocks;


class Solution
{

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit(array $prices): int
    {
        $min = -1;
        $max = -1;
        $answer = 0;
        foreach ($prices as $price) {
            if ($min == -1 || ($price < $min && $max == -1)) {
                $min = $price;
            } elseif ($price < $min && $max > -1) {
                if ($max - $min > $answer) {
                    $answer = $max - $min;
                }
                $max = -1;
                $min = $price;
            } elseif ($price > $max) {
                $max = $price;
            }
        }
        if ($max > -1 && $min > -1 && $max - $min > $answer) {
            $answer = $max - $min;
        }
        return $answer;
    }

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function twoPointersSolution(array $prices): int
    {
        $l = 0;
        $r = 1;
        $size = count($prices);
        $maxProfit = 0;

        while($r < $size){
            $currentProfit = $prices[$r] - $prices[$l];

            if($currentProfit > $maxProfit) $maxProfit = $currentProfit;

            if($prices[$r] < $prices[$l]) $l = $r;

            $r++;
        }

        return $maxProfit;
    }



}