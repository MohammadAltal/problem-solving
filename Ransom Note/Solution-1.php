<?php
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $lettersMap = [];
        for($i = 0; $i< strlen($magazine); $i++){
            if(isset($lettersMap[$magazine[$i]])){
                $lettersMap[$magazine[$i]] += 1;
            } else {
                $lettersMap[$magazine[$i]] = 1;
            }
        }

        for($j=0; $j<strlen($ransomNote); $j++){
            if(!isset($lettersMap[$ransomNote[$j]])) return false;

            $lettersMap[$ransomNote[$j]] -= 1;

            if($lettersMap[$ransomNote[$j]] < 0 ) return false;
        }

        return  true;
    }
}
