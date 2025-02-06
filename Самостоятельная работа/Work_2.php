<?php

$polydrome = 'racecar'; 
// если попробовать вбить что то на русском стабильность не гарантируется
// а ещё зависит от регистра

function polydromeCheck($string) {
    $check1 = $string;
    $check2 = strrev($string);

    if ($check1 == $check2) {
        print("{$string} - является полидромом");
    } else {
        print("{$string} - не является полидромом");
    }
}

polydromeCheck($polydrome);