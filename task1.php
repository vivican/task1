<?php

function reverseString($str) {
    // Функция должна выводить последовательность символов в обратном порядке.
    // В аргумент $str может быть передана не только строка

    $r= '';
    for($i= mb_strlen($str);$i>=0;$i--){
    	$r .= mb_substr($str, $i, 1);
    }
    return $r;
}