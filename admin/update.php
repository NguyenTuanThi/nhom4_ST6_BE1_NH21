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
        $manu_id = $_POST['manu'];
        $type_id = $_POST['type'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $feature = $_POST['feature'];

        $image = $_FILES['image']['name'];
        //
        if ($product->updateProduct($name, $manu_id, $type_id, $price,  $image, $desc, $feature, $_GET['id'])) {
            echo "Sửa thanh công";
        } else {
            # code...
            echo "Sửa khoông thanh cong";
        }
    }
    //xu ly upload
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    header('location:products.php');
}
