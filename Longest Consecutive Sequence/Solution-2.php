<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {

        if(count($nums) == 0) return 0;

        $logestSequence = 1;
        $currentSequence = 1;
        sort($nums);

        for($i=1; $i<count($nums); $i++){
            if($nums[$i] != $nums[$i - 1]){
                if($nums[$i] ==  $nums[$i - 1] + 1){
                    $currentSequence ++;
                } else {

                    if ($currentSequence > $logestSequence) {
                        $logestSequence = $currentSequence;
                    }
                    $currentSequence = 1;
                }
            }
        }

        // Final check to update the longest streak
        if ($currentSequence > $logestSequence) {
            $logestSequence = $currentSequence;
        }

        return $logestSequence;
    }
}
