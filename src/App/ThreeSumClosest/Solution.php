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
        sort($nums);
        $closest = $nums[0] + $nums[1] + $nums[2];
        $i = 0;
        while($i < count($nums) - 2 && $closest !== $target) {
            $smallIndex = $i + 1;
            $largeIndex = count($nums) - 1;

            while ($smallIndex < $largeIndex && $closest !== $target) {
                $current = $nums[$i] + $nums[$smallIndex] + $nums[$largeIndex];
                if (abs($current - $target) < abs($closest - $target)) {
                    $closest = $current;
                }

                if ($current < $target) {
                    $smallIndex++;
                } elseif ($current > $target) {
                    $largeIndex--;
                }
            }
            $i++;
        }
        return $closest;
    }
}
