<?php
session_start();

require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/cart.php";
require "models/user.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$cart = new Cart();
$user = new User();
if (isset($_SESSION['user'])) {
    # code...    
    if (isset($_GET['id'])) {
        # code...    
        $id = $_GET['id'];
        $sl = $_POST['qty'];
        if (isset($_SESSION['cart'][$id])) {
            # code...
            $qty = $_SESSION['cart'][$id] + 1;
        } else {
            $qty = $sl;
        }
        $_SESSION['cart'][$id] = $qty;
        # code...         
        $check = $user->check($_SESSION['user']);
        foreach ($check as $values) {
            foreach ($_SESSION['cart'] as  $key => $qty) {
                $getProductById = $product->getProductById($id);
                foreach ($getProductById   as $value) {
                    if ($key == $value['id']) {
                        if ($checkProduct_id = $cart->checkProduct_id($key)) {
                            if ($cart->UpdateQty($qty + $sl - 1, $key)) {
                                # code...
                                header("location:viewcart.php");
                            }
                        } else {
                            # code...
                            if ($cart->addCart($values['user_id'], $key, $value['price'], $qty)) {
                                // header("location:checkout.php");
                                echo "<script>alert('Đã thêm vào giỏ hàng')</script>";
                                header("location:viewcart.php");
                                //echo "them tc";
                            } else {
                                # code...
                                echo "them khong tc";
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header('location:login/index.php');
}