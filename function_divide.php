<?php

function divide($a, $b) {
    if ($b == 0) {
        return 'Ошибка: деление на ноль';
    } else {
        return $a / $b;
    }
}

$result = divide(10, 0);
print($result);

$result = divide(10, 2);
print($result);