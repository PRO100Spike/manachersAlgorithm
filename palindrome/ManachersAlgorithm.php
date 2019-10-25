<?php
/**
 * Created by PhpStorm.
 * User: 13spi
 * Date: 26.05.2019
 * Time: 0:53
 */


class ManachersAlgorithm
{
    public function findLongestPalindrome(string $s)
    {
        if ($s == null || strlen($s) === 0)
            return "";

        $s2 = self::addBoundaries(str_split($s));
        $p = [];
        $c = 0;
        $r = 0; // здесь первый элемент в s2 был обработан
        $m = 0;
        $n = 0; // Индексы прохода для сравнения, если два элемента совпадают
        for ($i = 1; $i < count($s2); $i++) {
            if ($i > $r) {
                $p[$i] = 0;
                $m = $i - 1;
                $n = $i + 1;
            } else {
                $i2 = $c * 2 - $i;
                if ($p[$i2] < ($r - $i)) {
                    $p[$i] = $p[$i2];
                    $m = -1; // Это сигналы для выхода из цикла while ниже.
                } else {
                    $p[$i] = $r - $i;
                    $n = $r + 1;
                    $m = $i * 2 - $n;
                }
            }
            while ($m >= 0 && $n < count($s2) && $s2[$m] == $s2[$n]) {
                $p[$i]++;
                $m--;
                $n++;
            }
            if (($i + $p[$i]) > $r) {
                $c = $i;
                $r = $i + $p[$i];
            }
        }
        $len = 0;
        $c = 0;
        for ($i = 1; $i < count($s2); $i++) {
            if ($len < $p[$i]) {
                $len = $p[$i];
                $c = $i;
            }
        }
        $ss = array_slice ($s2, $c - $len, $c + $len + 1 - ($c - $len));

        return self::removeBoundaries($ss) ?? $s[0];
    }

    private static function addBoundaries($cs)
    {
        if ($cs == null || count($cs) === 0)
            return "||";

        $cs2 = '';

        for ($i = 0; $i < count($cs)*2; $i = $i + 2) {
            $cs2[$i] = '|';
            $cs2[$i + 1] = $cs[$i/2];
        }

        $cs2[count($cs2) - 1] = '|';

        return $cs2;
    }

    private static function removeBoundaries($cs)
    {
        if ($cs == null || count($cs) < 3)
            return "";

        $cs2 = [];
        for ($i = 0; $i < (count($cs) - 1) / 2 ; $i++) {
            $cs2[$i] = $cs[$i * 2 + 1];
        }

        return implode('', $cs2);
    }

}