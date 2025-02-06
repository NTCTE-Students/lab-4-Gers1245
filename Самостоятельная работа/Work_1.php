<?php

$arrayNum = [1, 10, 6, 15, 192, 43, 15, 3, 25];

function maxInArray($array) {
    $sorted = rsort($array);
    $maxNum = reset($array);

    return $maxNum;
}

print(maxInArray($arrayNum));