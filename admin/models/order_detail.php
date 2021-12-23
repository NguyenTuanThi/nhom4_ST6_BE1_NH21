<?php
class Order_Detail extends Db
{
    public function getAllOrder()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM order_detail,products 
        WHERE order_detail.product_id=products.id LIMIT 0,10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAll()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM order_detail ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addOrder_Detail($product_id)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `order_detail`(`product_id`)
        VALUE (?)");
        var_dump("INSERT INTO `order_detail`(`product_id`)
        VALUE ( $product_id)");
        $sql->bind_param("i", $product_id);
        return $sql->execute(); //return an object        
    }
    public function del($id)
    {
        $sql = self::$connection->prepare("DELETE 
        FROM `order_detail` WHERE `id`=?");
        var_dump("DELETE From order_detail 
        where `id`=$id");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object        
    }
}