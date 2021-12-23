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
require "models/order_detail.php";
require "models/wish.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$cart = new Cart();
$user = new User();
$bill = new Bill();
$order = new Order_Detail();
$wish = new Wishlist();
if (isset($_SESSION['user'])) {
    # code...            
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $check = $user->check($_SESSION['user']);
        foreach ($check as $values) {
            if ($wish->getProduct($_SESSION['user'], $id)) {
                # code...
                echo "k tc";
                header("location:index.php");
            } else {
                # code...
                $wish->addWish($values['user_id'], $id);
                header("location:index.php");
            }
        }
    }
} else {
    # code...
    header("location:./login/index.php");
}