<?php 


$username = "codewithisagar";

switch($username){
    case strlen($username) < 10:
        echo "Username has less than 10 characters";
        break;
    case strlen($username) < 20:
        echo "Username has less than 20 characters";
        break;
    case strlen($username) < 30:
        echo "Username has less than 30 characters";
        break;
    default:
        echo "You are using too many characters";
}

