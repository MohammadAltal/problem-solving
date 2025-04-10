<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {

        $counter = $k =  count($nums);
        for($i= 0; $i<$counter; $i++){

            if($nums[$i] == $val){
                unset($nums[$i]);
                $k--;
            }
        }

        print_r($nums);
        return $k;
    }
}
