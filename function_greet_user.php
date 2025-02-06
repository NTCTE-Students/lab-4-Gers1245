<?php

function greetUser($name = 'гость') {
    echo "Привет, {$name}!";
}

greetUser();
greetUser('Анна');