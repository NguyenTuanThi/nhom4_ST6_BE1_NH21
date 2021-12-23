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
        $id = $_GET['id'];
        $getProductById = $product->getProductById($id);
        foreach ($getProductById as $values) {
            $image1 = $values['image'];
            $target_dir = "../img/";
            $uploadOk = 1;
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            //
            if ($image == null) {
                # code...
                if ($product->updateProduct($name, $manu_id, $type_id, $price, $image1, $desc, $feature, $_GET['id'])) {
                    echo "Sửa thanh công";
                }
            } else {
                # code...
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"
                ) {
                    $uploadOk = 0;
                }
                if ($uploadOk == 1) {
                    if ($product->updateProduct($name, $manu_id, $type_id, $price, $image, $desc, $feature, $_GET['id'])) {
                        echo "Sửa thanh công";
                    } else {
                        # code...
                        echo "Sửa khoông thanh cong";
                    }
                }
            }
        }
    }
    //xu ly upload
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    header('location:products.php');
}