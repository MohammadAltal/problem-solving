<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {

        for($i=count($digits)-1; $i>=0; $i--){
            if($digits[$i] < 9){
                $digits[$i] += 1;
                return $digits;
            }

            $digits[$i] = 0;
        }

        $newDigits = [1];
        for ($j = 0; $j < count($digits); $j++) {
            $newDigits[$j + 1] = $digits[$j];
        }

        return $newDigits;

    }
}
