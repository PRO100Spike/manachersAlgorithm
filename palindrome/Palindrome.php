<?php
require __DIR__ . '/ManachersAlgorithm.php';

class Palindrome extends ManachersAlgorithm
{
    public function isPalindrome($str)
    {
        return $str == strrev($str);
    }

    public function printPalindromeStr ($str) {
        $str2 = mb_strtolower($str);
        $str2 = preg_replace('/[^ a-zа-яё\d]/ui', '', $str2);

        if ($this->isPalindrome($str2)) {
            echo $str;
        } else {
            echo $this->findLongestPalindrome($str2);
        }
    }

}

?>