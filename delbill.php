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
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$cart = new Cart();
$user = new User();
$bill = new Bill();
if (isset($_GET['id'])) {
    # code...    
    $id = $_GET['id'];
    $check = $user->check($_SESSION['user']);
    foreach ($check as $values) {
        if ($bill->deletebill($id, $values['user_id'])) {
            # code...
            // $getAllBillid = $bill->getAllBillid($values['user_id'], $id);
            // foreach ($getAllBillid as $values) {
            //     unset($_SESSION['cart'][$values['product_id']]);
            // }
            header("location:myorder.php");
        }
    }
}