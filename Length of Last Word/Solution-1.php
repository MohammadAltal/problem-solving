<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $lastLength = 0;
        $counter = 0;
        for($i=strlen($s)-1; $i >=0; $i--){
            if($s[$i] != ' '){
                $counter++;

            } else {
                if($counter != 0){

                    $lastLength = $counter;
                    break;
                }


            }
        }

        if ($counter !== 0) {
            $lastLength = $counter;
        }

        return $lastLength;
    }
}
