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
   
  
    //
    if ($manu->addManufacture($name)) {
        echo "them thanh công";
    } else {
        # code...
        echo "khong thanh cong";
    }
    //xu ly upload
    
} else {
    # code...
    echo 0;
}
