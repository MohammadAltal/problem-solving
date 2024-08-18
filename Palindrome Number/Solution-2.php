<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        // Negative numbers are not palindromes
        if ($x < 0) {
            return false;
        }

        // Initialize variables
        $original = $x;
        $reversed = 0;

        // Reverse the number
        while ($x > 0) {
            $lastDigit = $x % 10;             // Get the last digit
            $reversed = $reversed * 10 + $lastDigit;  // Add it to the reversed number
            $x = intval($x / 10);             // Remove the last digit from the original number
        }

        // Compare the reversed number with the original
        return $original === $reversed;

    }
}
