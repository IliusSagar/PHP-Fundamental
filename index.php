<?php 


$username = "codewithisagar";

if($username == "codewithisagar2"){
    echo "{$username} exists";
}elseif(strlen($username) < 25){
    echo "Username is tooooo short";
}elseif(strlen($username) < 15){
    echo "Username is too short";
}else{
    echo "Username does not exits";
}

