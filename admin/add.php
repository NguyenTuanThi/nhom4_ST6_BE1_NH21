<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
<<<<<<< HEAD
$protype = new Product();
$manu = new Manufacture;
$type = new Protyte;
if(isset($_POST['submit'])){
=======
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
if (isset($_POST['submit'])) {
    # code...
>>>>>>> d29c91a74756f8d0152b83540c82687d688069b3
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['type'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
<<<<<<< HEAD
    $image = $_POST['image']['name'];
    //xuly them sp
    $product->addProdct($name,$manu_id,$type_id,$price,$image,$desc)
    
    if ($product->addProduct($name,$manu_id,$type_id,$price,$image,$desc)){
        echo "them tc";
    else{
        echo "them ko tc";
    }
    //xu ly upload
    $target_dir="../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmơ_name"], $target_file);
    header('location:products.php')
}else{
    echo 0;
}
=======
    $feature = $_POST['feature'];
    $created_at = $_POST['created_at'];
    $image = $_FILES['image']['name'];
    //
    if ($product->addProduct($name, $manu_id, $type_id, $price,  $image, $desc, $feature, $created_at)) {
        echo "them thanh công";
    } else {
        # code...
        echo "khong thanh cong";
    }
    //xu ly upload
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    header('location:products.php');
} else {
    # code...
    echo 0;
}
>>>>>>> d29c91a74756f8d0152b83540c82687d688069b3
