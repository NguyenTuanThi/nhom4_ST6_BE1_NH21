<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/bill.php";
require "models/cart.php";
require "models/order_detail.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$bill = new Bill();
$cart = new Cart();
$sold = new Order_Detail();
if (isset($_GET['id'])) {
    # code...
    $sold->del($_GET['id']);
    header('location:sold.php');
}