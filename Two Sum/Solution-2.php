<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashMap = [];

        foreach($nums as $index => $num){

            $diff = $target - $num;
            if(isset($hasMap[$diff])){
                return [$hasMap[$diff], $index];
            }
            $hasMap[$num] = $index;
        }

        return [];
    }
}
