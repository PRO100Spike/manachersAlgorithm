<?php
/**
 * Created by PhpStorm.
 * User: 13spi
 * Date: 24.05.2019
 * Time: 19:23
 */


require __DIR__ . '/palindrome/Palindrome.php';

$p = new Palindrome();

$p->printPalindromeStr('dasd Sum summus mus asdas');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table .c { color: red }
        .a .c { color: green }
    </style>
    <script
            src="http://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/scripts.js"></script>
</head>
<body>
<table id="t">
    <tr>
        <td class="c">Текст</td>
    </tr>
</table>
</body>
</html>


