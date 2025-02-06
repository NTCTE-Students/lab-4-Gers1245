<?php

function isEven($number) {
    if ($number % 2 == 0) {
        return("{$number} - чётное число");
    } else {
        return("{$number} - нечётное число");
    }
}

$result = isEven(4);
print($result);