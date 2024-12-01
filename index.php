<?php declare(strict_types=1);

$sentence = "This can't be used inside a function!";

function displayName(){

    $sentence = "This will be used inside a function!";

    echo $sentence;
}

echo $sentence;

displayName();