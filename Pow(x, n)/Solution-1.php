<?php

class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        $results = 1.0;
        $counter = abs($n);
        while($counter > 0){
            if ($counter % 2 != 0) {
                $results *= $x;
            }
            $x *= $x;
            $counter = (int) $counter/2;
        }

        if($n < 0){
            $results = (float)1/$results;
        }

        return $results;
    }
}
