<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {

        $hashMap = [];
        while($n != 1 && !isset($hashMap[$n])){
            $hashMap[$n] = true;
            $sum = 0;
            while($n > 0){
                $last_digit = ($n%10);
                $sum +=  $last_digit * $last_digit;
                $n = (int)($n/10);
            }
            $n = $sum;
        }

        return $n == 1;
    }
}
