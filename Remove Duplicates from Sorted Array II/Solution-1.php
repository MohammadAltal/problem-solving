<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $j = 1;
        $count = 1;
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] == $nums[$i - 1]) {
                $count++;
            } else {
                $count = 1;
            }

            if ($count <= 2) {
                $nums[$j] = $nums[$i];
                $j++;
            }
        }

        return $j;
    }
}
