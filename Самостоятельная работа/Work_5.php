<?php

$someString = 'My grandmother smokes a pipe.';
// Не работает на русском :(

function upRegister(&$string) {
    return strtoupper($string);
}

print(upRegister($someString));