<?php

$re = '/\A([\+]?)(\d{2})(\d{8,9})\z/';
if (preg_match($re, $argv[1], $matches, PREG_OFFSET_CAPTURE)) {
    if ($matches[1][0] === '+') {
        echo $matches[1][0] . $matches[2][0] . PHP_EOL;
    }
    print_r("it's a match!") . PHP_EOL;
} else {
    print_r("it's not a match!");
}
