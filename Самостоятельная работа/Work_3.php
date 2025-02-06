<?php

$Aboba = 'Я бомбил иран';

function numOfWords($string) {
    return count($convArray = explode(" ", $string));
}
// YEET я сделал её в одну строку!

print(numOfWords($Aboba));