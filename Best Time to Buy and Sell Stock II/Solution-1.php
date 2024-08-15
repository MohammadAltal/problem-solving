<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maximumProfit = 0;

        for ($i = 1; $i < count($prices); $i++) {
            if ($prices[$i] > $prices[$i - 1]) {
                $maximumProfit += $prices[$i] - $prices[$i - 1];
            }
        }

        return $maximumProfit;
    }
}
