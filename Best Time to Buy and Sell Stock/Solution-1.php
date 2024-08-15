<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $minimumDay = 100000000000000;
        $maximumProfit = 0;

        foreach($prices as $price){

            if($price < $minimumDay){
                $minimumDay = $price;
            }

            $maximumProfitTmp = $price - $minimumDay;

            if($maximumProfit < $maximumProfitTmp){

                $maximumProfit = $maximumProfitTmp;
            }
        }

        return $maximumProfit;
    }
}
