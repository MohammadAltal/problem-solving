<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $map1 = [];
        $map2 = [];

        for ($i = 0; $i < strlen($s); $i++) {
            $char1 = $s[$i];
            $char2 = $t[$i];

            if (!isset($map1[$char1]) && !isset($map2[$char2])) {
                $map1[$char1] = $char2;
                $map2[$char2] = $char1;
            } elseif ($map1[$char1] !== $char2 || $map2[$char2] !== $char1) {
                return false;
            }
        }

        return true;
    }
}
