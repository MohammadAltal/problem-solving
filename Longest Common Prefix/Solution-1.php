<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $prefix = "";

        for($i=0; $i<strlen($strs[0]); $i++){

            $char = $strs[0][$i];

            foreach($strs as $one){
                if($one[$i] != $char){
                    return $prefix;
                }
            }
            $prefix .= $char;
        }

        return $prefix;
    }
}
