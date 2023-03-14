<?php

declare(strict_types=1);

namespace SearchInsertPosition;

/**
 * Class Solution
 *
 * @package SearchInsertPosition
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function searchInsertEasy(array $nums, int $target): int
    {
        if (in_array($target, $nums)) {
            return array_search($target, $nums);
        }
        $nums[] = $target;
        sort($nums);
        return array_search($target, $nums);
    }

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function searchInsert(array $nums, int $target): int
    {
        $high = count($nums) - 1;
        $low = 0;

        while ($low <= $high) {
            $mid = intval(($low + $high) / 2);
            $midval = $nums[$mid];

            if ($midval < $target) {
                $low = $mid + 1;
            } else {
                if ($midval > $target) {
                    $high = $mid - 1;
                } else {
                    return $mid;
                }
            }
        }

        if ($target > $midval) {
            $mid++;
        }
        return $mid;
    }
}