<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {

        $nums = array_merge(array_slice($nums, -$k), array_slice($nums, 0, count($nums) - $k));
    }
}
