<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        // Check if the array is empty
        if (empty($nums)) {
            return 0;
        }

        $j=0;
        for($i=1; $i<count($nums); $i++){
            if($nums[$i] !== $nums[$j]){
                $j ++;
                $nums[$j] = $nums[$i];


            }
        }

        return $j + 1;
    }
}
