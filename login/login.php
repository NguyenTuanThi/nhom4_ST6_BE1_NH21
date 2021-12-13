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
    if ($user->checkLogin($username, $password)) {
        # code...
        $_SESSION['user'] = $username;
        header('location:../admin/index.php');
    } else {
        header('location:index.php');
    }
}
