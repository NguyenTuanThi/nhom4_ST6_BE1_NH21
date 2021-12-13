<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if (isset($_POST['submit'])) {
    # code...
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 2;
    $repeat = $_POST['repeat'];
    if ($repeat == $password) {
        # code...
        if ($user->checkUser($username)) {
            echo "k tc";
            header('location:register.php');
        } else {
            $user->Register($username, $password, $role);
            echo "them tc ";
            header('location:index.php');
        }
    } else {
        # code...
        echo ("Mật khẩu không trùng khớp");
    }
}
