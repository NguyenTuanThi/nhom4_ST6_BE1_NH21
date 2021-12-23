<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
// require "models/review.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
// $review = new Review();
// if (isset($_POST['submit'])) {
//     # code...
//     echo "1";
//     if (isset($_GET['id'])) {
//         $name = $_POST['name'];
//         $rating = $_POST['rating'];
//         var_dump($rating);
//         if ($review->addreview($name, $_GET['id'], $rating)) {
//             echo "them thanh công";
//         } else {
//             # code...
//             echo "khong thanh cong";
//         }
//     }
//     // header('location:products.php');
// } else {
//     # code...
//     echo 0;
// }