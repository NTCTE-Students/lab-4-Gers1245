<?php

$celcium = 25;

function C_Into_F($number) {
    $farengheit = ($number * 9 / 5) + 32;
    return $farengheit;
}

print(C_Into_F($celcium));
