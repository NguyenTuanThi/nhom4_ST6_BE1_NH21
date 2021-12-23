<?php
session_start();
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/cart.php";
require "models/user.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$cart = new Cart();
$user = new User();
if (isset($_GET['id'])) {
    # code...    
    $id = $_GET['id'];
    $check = $user->check($_SESSION['user']);
    foreach ($check as $values) {
        if ($cart->deletecart($id, $values['user_id'])) {
            # code...
            unset($_SESSION['cart'][$id]);
            header("location:viewcart.php");
        }
    }
}