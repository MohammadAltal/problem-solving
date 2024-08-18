<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x < 0) return false;

        $x = (string) $x;
        $length = strlen($x);

        for($i=0; $i<$length; $i++){
            if($x[$i] != $x[$length - 1 - $i]){
                return false;
            }
        }

        return true;
    }
}
