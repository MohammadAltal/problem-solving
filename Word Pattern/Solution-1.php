<?php

class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $sArray = explode(' ', $s);
        if(count($sArray) != strlen($pattern)){
            return FALSE;
        }

        $patternMap = [];
        $wordMap = [];
        for($i=0; $i<strlen($pattern); $i++){
            if(!isset($patternMap[$pattern[$i]])){
                if(!isset($wordMap[$sArray[$i]])){
                    $patternMap[$pattern[$i]] = $sArray[$i];
                    $wordMap[$sArray[$i]] = $pattern[$i];
                }
            }
        }

        $string = [];
        for($j=0; $j<strlen($pattern); $j++){
            if(isset($patternMap[$pattern[$j]])){
                $string[] = $patternMap[$pattern[$j]];
            }
        }

        $string = implode(' ', $string);

        return  $string === $s;
    }
}
