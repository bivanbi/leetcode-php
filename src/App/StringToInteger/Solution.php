<?php

namespace App\StringToInteger;

class Solution
{
    private int $minAllowed = -(2 ** 31);
    private int $maxAllowed = (2 ** 31) - 1;
    private array $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s)
    {
        $s = trim($s);
        $result = "";
        $sign = 1;
        $firstChar = substr($s, 0, 1);

        if ($firstChar === '-') {
            $sign = -1;
            $s = substr($s, 1);
        } elseif ($firstChar === '+') {
            $s = substr($s, 1);
        }

        foreach (str_split($s) as $ch) {
            if (in_array($ch, $this->numbers)) {
                $result .= $ch;
            } else {
                break;
            }
        }

        $result = intval($result) * $sign;
        if ($result > $this->maxAllowed) {
            return $this->maxAllowed;
        } elseif ($result < $this->minAllowed) {
            return $this->minAllowed;
        }

        return $result;
    }
}
