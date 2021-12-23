<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();


if (isset($_POST['submit'])) {
    # code...
    $name = $_POST['name'];

    # code...
    if ($type->addType($name)) {
        echo "them thanh công";
        header('location:protypes.php');
    } else {
        # code...
        echo "khong thanh cong";
        header('location:addprotypes.php');
    }
} else {
    # code...
    echo 0;
}