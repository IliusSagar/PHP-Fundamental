<?php declare(strict_types=1);

$sentence = "This can't be used inside a function!";

function displayName($sentence){

   

    return $sentence;
}



echo displayName($sentence);