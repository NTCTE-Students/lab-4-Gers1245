<?php

$arrayNum = [1, 10, 6, 15, 192, 43, 15, 3, 25];

function sortArray(&$array) {
    return sort($array);
}

sortArray($arrayNum);

foreach($arrayNum as $sortNum) {
    print("{$sortNum} ");
}