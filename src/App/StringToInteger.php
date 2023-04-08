<?php

namespace App;

class StringToInteger
{
    function echo(string $input): string {
        return $input;
    }

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s)
    {
        $sI = "";
        $chars = ['-', '+', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $sArray = str_split($s);

        foreach ($sArray as $ch) {
            if (in_array($ch, $chars)) {
                $sI .= $ch;
            } else {
                $num = 0;
            }
        }

        $sINoZero = +$sI;
        $num = intval($sINoZero);
        $highest = 2147483647;
        $smallest = 0 - $highest;
        if ($num > $smallest && $num < $highest) {
            return $num;
        }

        return $num;
    }
}
