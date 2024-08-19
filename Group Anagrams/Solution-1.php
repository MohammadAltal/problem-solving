<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $groups = [];
        foreach($strs as $one){
            $word_array = str_split($one);
            sort($word_array);
            $word_array = implode('', $word_array);
            $groups[$word_array][] = $one;

        }
        return $groups ;
    }
}
