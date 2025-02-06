<?php

function multiply(...$numbers) {
    $result = 1;
    foreach ($numbers as $number) {
        $result *= $number;
    }
    return $result;
}

print(multiply(1, 2, 3, 4));