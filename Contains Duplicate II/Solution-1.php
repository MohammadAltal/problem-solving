<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $map = [];

        foreach ($nums as $index => $value) {
            if (isset($map[$value])) {
                if (abs($index - $map[$value]) <= $k) {
                    return true;
                }
            }
            $map[$value] = $index;
        }
        return false;
    }
}
