<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function trailingZeroes($n) {

        $count = 0;
        while ($n >= 5) {
            $n = floor($n / 5);
            echo $n;
            $count += $n;

        }
        return $count;
    }
}
