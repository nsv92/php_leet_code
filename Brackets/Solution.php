<?php

namespace Brackets;

use SplStack;
use Ds\Stack;

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s): bool
    {
        $stack = new SplStack();
        $length = strlen($s);
        for ($i = 0; $i < $length; $i++) {
            if ($stack->isEmpty()) {
                $current = null;
            } else {
                $current = $stack->top();
            }
            $next = $s[$i];
            if (($next == ')' && $current == '(') ||
                ($next == ']' && $current == '[') ||
                ($next == '}' && $current == '{')
            ) {
                $stack->pop();
            } else {
                $stack->push($s[$i]);
            }
        }
        return $stack->isEmpty();
    }
}