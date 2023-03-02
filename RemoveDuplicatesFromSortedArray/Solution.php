<?php

declare(strict_types=1);

namespace RemoveDuplicatesFromSortedArray;


class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(array &$nums): int
    {
        $nums = array_keys( array_count_values( $nums ) );
        return count($nums);
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicatesBad(array &$nums): int
    {
        $k = 1;
        $length = count($nums);
        $i = 0;
        $j = 1;

        while ($j < $length) {
            if ($nums[$i] < $nums[$j]) {
                $i++;
                $j++;
            } else {
                while ($nums[$j] <= $nums[$i] && $j < $length) {
                    $j++;
                }
                if ($j == $length) {
                    break;
                }
                $nums[$i + 1] = $nums[$j];
                $i++;
            }
            $k++;
        }
        return $k;
    }

}