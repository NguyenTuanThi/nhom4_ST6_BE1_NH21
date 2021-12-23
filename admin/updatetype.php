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
    if (isset($_GET['id'])) {
        # code...        
        $name = $_POST['name'];
        if ($type->updateType($name, $_GET['id'])) {
            header('location:protypes.php');
            echo "tc";
        } else {
            # code...
            header('location:addprotypes.php');
            echo "ko tc";
        }
    }
}