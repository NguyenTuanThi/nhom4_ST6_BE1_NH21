<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/user.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$user = new User();
if (isset($_GET['id'])) {
    # code...
    $user->delUser($_GET['id']);
    header('location:users.php');
}