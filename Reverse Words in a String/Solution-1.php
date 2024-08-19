<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $words = [];
        $word = '';
        $string = str_split($s);
        for($i=0; $i<count($string); $i++){
            if($string[$i] != ' '){
                $word .= $string[$i];
                if($i != count($string)-1){
                    continue;
                }
            }
            if($word != ''){
                $words[] = $word;
            }
            $word = '';
        }

        $new_string = '';
        for($j=count($words)-1; $j>=0; $j--){
            $new_string .= $words[$j];
            if($j != 0){
                $new_string .= ' ';
            }
        }

        return $new_string;
    }
}
