<?php
session_start();

require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/cart.php";
require "models/user.php";
require "models/bill.php";
require "models/wish.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$cart = new Cart();
$user = new User();
$bill = new Bill();
$wish = new Wishlist();
if (isset($_GET['id'])) {
    # code...    
    $id = $_GET['id'];
    $getAllWishList = $wish->getAllWishList();
    foreach ($getAllWishList as $value)
        if ($wish->del($value['user_id'], $id)) {
            header("location:wishlist.php");
            echo "tc";
        } else {
            # code...
            echo "k tc";
            header("location:wishlist.php");
        }
}