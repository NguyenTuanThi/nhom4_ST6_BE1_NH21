<?php
session_start();
if (isset($_SESSION['user']) && $_SESSION['user'] != null) {
    # code...
    unset($_SESSION['user']);
    unset($_SESSION['role']);
    header('location:../login/index.php');
}