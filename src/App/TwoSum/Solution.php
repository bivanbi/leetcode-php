<?php

namespace App\TwoSum;

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        $valueMap = array_flip($nums);

        for ($i = 0; $i < count($nums); $i++) {
            $otherNumber = $target - $nums[$i];
            if (array_key_exists($otherNumber, $valueMap) && $i !== $valueMap[$otherNumber]) {
                return [$i, $valueMap[$otherNumber]];
            }
        }
        return [];
    }
}
