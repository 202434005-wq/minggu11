<?php

function greetUser($name) {
    return "Hello, $name!";
}

function addNumbers($a, $b) {
    return $a + $b;
}

function averageThree($a, $b, $c) {
    return ($a + $b + $c) / 3;
}

function formatEmail($email) {
    return strtolower(trim($email));
}

?>