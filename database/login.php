<?php

include "connect.php";


$username = $_POST["username"];
$pass = $_POST["password"];

    
//nincs beírva
if (empty($username) && empty($pass)){
    header("Location: login_main.php?error=Empty username and password.");
}
elseif (empty($username)){
    header("Location: login_main.php?error=Empty username.");
}
elseif (empty($pass)){
    header("Location: login_main.php?error=Empty password.");
}


//be van írva, ellenőrzés
else{
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'";
    $result = mysqli_query($con, $sql);

    //van ilyen felhasználó
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        //helyes bejelentkezés
        if ($row['username'] === $username && $row['password'] === $pass){
            header('location: hehe.html');
        }

        //helytelen bejelentkezés
        else{
            header("location: login_main.php?error=Invalid login.");
    }
    }

    //helytelen bejelentkezés
    else{
        header("location: login_main.php?error=Invalid login.");
    }
}
