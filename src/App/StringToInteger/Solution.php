<?php

namespace App\StringToInteger;

class Solution
{
    private int $minAllowed = -(2 ** 31);
    private int $maxAllowed = (2 ** 31) - 1;
    private string $pattern = '/^\s*([+-]?[0-9]+)/'; // capture signed number at the beginning of string; ignore leading whitespaces

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s)
    {
        $result = 0;
        $isMatching = preg_match($this->pattern, $s, $matches);
        if ($isMatching === 1) { // if pattern is matching
            $result = intval($matches[1]);
            $result = min($this->maxAllowed, $result); // if result is larger than max allowed, use max allowed
            $result = max($this->minAllowed, $result); // if result is smaller than min allowed, use min allowed
        }
        return $result;
    }
}
