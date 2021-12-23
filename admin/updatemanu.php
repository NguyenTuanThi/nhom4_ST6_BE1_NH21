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
        if ($manu->updateManu($name, $_GET['id'])) {
            header('location:manufactures.php');
            echo "tc";
        } else {
            # code...
            header('location:addmanufactures.php');
            echo "ko tc";
        }
    }
}