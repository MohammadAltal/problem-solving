<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        $numSet = [];
        $longestStreak = 0;

        foreach ($nums as $num) {
            $numSet[$num] = true;
        }

        foreach ($nums as $num) {
            if (!isset($numSet[$num - 1])) {
                $currentNum = $num;
                $currentStreak = 1;

                while (isset($numSet[$currentNum + 1])) {
                    $currentNum++;
                    $currentStreak++;
                }

                if ($currentStreak > $longestStreak) {
                    $longestStreak = $currentStreak;
                }
            }
        }

        return $longestStreak;
    }
}
