<?php

declare(strict_types=1);

namespace PalindromeNumber;


class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome(int $x): bool
    {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }

        $i = 0;
        while ($x > $i) {
            $i = $i * 10 + $x % 10;
            $x = floor($x / 10);
        }

        return $x == $i || $x == floor($i / 10);
    }

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindromeStrRev(int $x): bool
    {
        return (string)$x === strrev((string)$x);
    }

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindromeRobust(int $x): bool
    {
        $str = (string)$x;
        $chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
        if ($chars[1] == '-') {
            return false;
        }
        $j = count($chars) - 1;
        $i = 0;
        while ($i < $j) {
            if ($chars[$i] != $chars[$j]) {
                return false;
            }
            $i++;
            $j--;
        }
        return true;
    }
}