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
    $manu_id = $_POST['manu'];
    $type_id = $_POST['type'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $feature = $_POST['feature'];
    $image = $_FILES['image']['name'];
    $target_dir = "../img/";
    $uploadOk = 1;
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    //

    //xu ly upload
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
    }
    if ($uploadOk == 1) {
        # code...
        if ($product->addProduct($name, $manu_id, $type_id, $price,  $image, $desc, $feature)) {
            echo "them thanh công";
        } else {
            # code...
            echo "khong thanh cong";
        }
    }
    header('location:products.php');
} else {
    # code...
    echo 0;
}