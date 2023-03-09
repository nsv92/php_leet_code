<?php

declare(strict_types=1);

namespace SearchInsertPosition;


class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert(array $nums, int $target): int
    {
        if (in_array($target, $nums)) {
            return array_search($target, $nums);
        }
        $l = 0;
        $length = count($nums);
        $m = $length / 2;
        while ($m - $l > 1) {
            if ($nums[$m] > $target) {
                $m /= 2;
            } elseif ($nums[$m] < $target) {
                $l = $m;
                $m = $length - 1;
            } else return $m;
        }
        if ($target < $nums[$m]) {
            return $m - 1;
        } else return $m + 1;
    }
}