<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/bill.php";
require "models/cart.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$bill = new Bill();
$cart = new Cart();
if (isset($_GET['id'])) {
    # code...
    $cart->del($_GET['id']);
    header('location:carts.php');
}