<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {

        $array = [];
        foreach($nums as $num){
            if(isset($array[$num])) {
                $array[$num] ++ ;
            } else {
                $array[$num] = 1;
            }

        }
        return  array_flip($array)[max($array)];
    }
}
