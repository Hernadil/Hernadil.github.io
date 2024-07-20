<?php


function emptyinput($name, $username, $email, $password){
    $result;

    if(empty($name) || empty($username) || empty($email) ||  empty($password)) {
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function passmatch($password, $password_re){
    $result;

    if($password != $password_re) {
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

