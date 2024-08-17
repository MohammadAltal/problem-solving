<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $nums = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000,
        ];

        $total = 0;
        for($i=0; $i<strlen($s); $i++){
            if(isset($s[$i + 1])){
                if($s[$i] == 'I' && $s[$i + 1] == 'V'){
                    $total += 4;
                    $i++;
                }
                else if($s[$i] == 'I' && $s[$i + 1] == 'X'){
                    $total += 9;
                    $i++;
                }
                else if($s[$i] == 'X' && $s[$i + 1] == 'L'){
                    $total += 40;
                    $i++;
                }
                else if($s[$i] == 'X' && $s[$i + 1] == 'C'){
                    $total += 90;
                    $i++;
                }
                else if($s[$i] == 'C' && $s[$i + 1] == 'D'){
                    $total += 400;
                    $i++;
                }
                else if($s[$i] == 'C' && $s[$i + 1] == 'M'){
                    $total += 900;
                    $i++;
                } else {
                    $total += $nums[$s[$i]];
                }
            } else {
                $total += $nums[$s[$i]];
            }

        }

        return $total;
    }
}
