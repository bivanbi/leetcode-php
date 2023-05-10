<?php

namespace App\ThreeSumClosest;

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest(array $nums, int $target): int
    {
        $closest = $nums[0] + $nums[1] + $nums[2];
        for ($i = 0; $i < count($nums) - 2; $i++) {
            for($j = $i + 1; $j < count($nums) - 1; $j++) {
                for($k = $j + 1; $k < count($nums); $k++) {
                    $sum = $nums[$i] + $nums[$j] + $nums[$k];
                    if (abs($target - $closest) > abs($target - $sum)) {
                        $closest = $sum;
                    }
                }
            }
        }
        return $closest;
    }
}
