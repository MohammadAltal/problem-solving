<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if(strlen($s) != strlen($t)) return false;

        $sMap = [];
        for($i=0; $i< strlen($s); $i++){
            if(isset($sMap[$s[$i]])){
                $sMap[$s[$i]] += 1;
            } else {
                $sMap[$s[$i]] = 1;
            }
        }

        for($j=0; $j<strlen($t); $j++){
            if(!isset($sMap[$t[$j]]) || $sMap[$t[$j]] <= 0) {
                return false;
            }

            $sMap[$t[$j]] --;
        }

        return TRUE;
    }
}
