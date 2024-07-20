<?php
require "connect.php";
require "signup_function.php";

if (isset($_POST["submit"])){
    $name = htmlspecialchars($_POST["name"]);
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $password_re = htmlspecialchars($_POST["password-re"]);
    


    if (emptyinput($name, $username, $email, $password) !== false){
        header("Location: signup_main.php?error=Enter all!");
        exit();
    }
    elseif (passmatch($password, $password_re) !== false){
        header("Location: signup_main.php?error=Passwords don't match.");
        exit();
    }
   

    $qry = mysqli_query($con, "INSERT INTO `users`(`full_name`, `username`, `email`, `password`) VALUES ('$name', '$username', '$email', '$password')");
    header("Location: login_main.php");
}
else{
    header("Location: signup_main.php?error=Click the sign up button.");
}