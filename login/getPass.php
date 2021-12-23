cô ơi xem giúp em phần edit product với ạ, em bị lỗi chỗ bind->param
<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user = new User;
if (isset($_POST['submit'])) {
    # code...
    $username = $_POST['username'];
    # code...
    if ($user->checkUser($username)) {
       imap_alerts("Mật khẩu là"+$user->get)
    } else {
        $user->Register($username, $password, $role);
        echo "them tc ";
        header('location:index.php');
    }
} ?>