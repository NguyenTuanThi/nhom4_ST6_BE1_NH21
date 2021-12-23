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
# code...
if (isset($_GET['id'])) {
    # code...          
    $status = 2;
    if ($bill->updateStatus($status, $_GET['id'])) {
        header('location:bills2.php');
        //echo "tc";
    }
}