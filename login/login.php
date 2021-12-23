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
    $role = $user->Role($username);
    if ($user->checkLogin($username, $password)) {
        foreach ($role as $value) {

            $role_id = $value['role_id'];
            if ($value['role_id'] == 1) {
                # code...                
                $_SESSION['role'] = $username;
                $_SESSION['user'] = $username;
                header('location:../admin/index.php');
            } else {
                # code...   
                $_SESSION['user'] = $username;
                header('location:../index.php');
            }
        }
    } else {
        header('location:index.php');
    }
}