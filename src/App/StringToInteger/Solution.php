<?php

namespace App\StringToInteger;

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s)
    {
        $s = trim($s);
        $result = "";
        $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $sign = 1;
        $firstChar = substr($s, 0, 1);
        if ($firstChar === '-') {
            $sign = -1;
            $s = substr($s, 1);
        } elseif ($firstChar === '+') {
            $s = substr($s, 1);
        }
        foreach (str_split($s) as $ch) {
            if (in_array($ch, $numbers)) {
                $result .= $ch;
            } else {
                break;
            }
        }
        $result = intval($result) * $sign;
        $minAllowed = -(2 ** 31);
        $maxAllowed = (2 ** 31) - 1;
        if ($result > $maxAllowed) {
            return $maxAllowed;
        } elseif ($result < $minAllowed) {
            return $minAllowed;
        }

        return $result;
    }
}
