<?php
class Order_Detail extends Db
{
    public function getAllOrder()
    {
        $sql = self::$connection->prepare("SELECT * FROM order_detail");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductSold()
    {
        $sql = self::$connection->prepare("SELECT * FROM `order_detail`,products 
        WHERE products.id=order_detail.product_id LIMIT 0,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductSold1()
    {
        $sql = self::$connection->prepare("SELECT * FROM `order_detail`,products 
        WHERE products.id=order_detail.product_id LIMIT 3,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductSold2()
    {
        $sql = self::$connection->prepare("SELECT * FROM `order_detail`,products 
        WHERE products.id=order_detail.product_id LIMIT 6,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductSold3()
    {
        $sql = self::$connection->prepare("SELECT * FROM `order_detail`,products 
        WHERE products.id=order_detail.product_id LIMIT 9,3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function addOrder_Detail($product_id)
    {
        $sql = self::$connection->prepare("INSERT INTO `order_detail`(`product_id`)
        VALUE (?)");
        var_dump("INSERT INTO `order_detail`(`product_id`)
        VALUE ( $product_id)");
        $sql->bind_param("i", $product_id);
        return $sql->execute(); //return an object        
    }
}