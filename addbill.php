<?php
session_start();

require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/cart.php";
require "models/user.php";
require "models/bill.php";
require "models/order_detail.php";
$product = new Product();
$manu = new Manufacture();
$type = new Protype();
$cart = new Cart();
$user = new User();
$bill = new Bill();
$order = new Order_Detail();
if (isset($_SESSION['user'])) {
    # code...            
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['tel'];
        $note = $_POST['note'];
        $status = 0;
        $total = $cart->countPrice($user_id);
        foreach ($total as $value2) {
            if ($bill->addBill($fullname, $user_id, $address, $phone, $value2['total1'], $note, $status)) {
                $getAllCart = $cart->getAllCart();
                foreach ($getAllCart as $value3) {
                    $checkCart = $cart->checkCart($_SESSION['user']);
                    foreach ($checkCart as  $value3) {
                        $order->addOrder_Detail($value3['product_id']);
                        echo "<script>alert('Đặt hàng thành công')</script>";
                        $getProductId = $cart->getProductId($user_id);
                        foreach ($getProductId as $value) {
                            $id = $value['id'];
                            unset($_SESSION['cart'][$id]);
                            // unset($_SESSION['cart'][$value['product_id']]);
                            // $getAllBill=$order->getAllBill($user_id);
                            $cart->deleteviewcart($user_id);
                            header("location:myorder.php");
                            //echo "them tc";
                        }
                    }
                }
            }
        }
    } else {
        # code...
        echo "khong tc";
        header("location:checkout.php");
    }
}