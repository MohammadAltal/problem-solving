<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if ($x == 0) return 0;

        $result = 1;

        while ($result * $result <= $x) {
            $result++;
        }

        return $result - 1;
    }
}
