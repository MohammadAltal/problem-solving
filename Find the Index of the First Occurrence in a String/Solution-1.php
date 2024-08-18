<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        for($i=0; $i<strlen($haystack); $i++){
            $exists = true;
            for($j=0; $j<strlen($needle); $j++){
                if($haystack[$i + $j] != $needle[$j]){
                    $exists = false;
                    break;
                }
            }

            if($exists){
                return $i;
            }
        }

        return -1;
    }
}
