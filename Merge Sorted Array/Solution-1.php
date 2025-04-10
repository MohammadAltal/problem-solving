<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        // Replace the tail of nums1 with nums2
        for ($i = 0; $i < $n; $i++) {
            $nums1[$m + $i] = $nums2[$i];
        }

        // Sort the entire nums1
        sort($nums1);

        return $nums1;
    }
}
