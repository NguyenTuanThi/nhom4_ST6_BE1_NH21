<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/bill.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$bill = new Bill();
if (isset($_GET['id'])) {
    # code...
    $bill->delbill3($_GET['id']);
    header('location:bills3.php');
}