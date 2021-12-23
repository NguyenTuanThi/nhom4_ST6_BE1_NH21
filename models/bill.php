<?php
class Bill extends Db
{
    public function getAllBill($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM order_bill, users where users.`user_id`=order_bill.`user_id` and order_bill.`user_id`=?");
        $sql->bind_param("i", $user_id);
        return $sql->execute();
    }
    public function getAllBillByStatus0($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM order_bill, users 
        where users.`user_id`=order_bill.`user_id` and order_bill.`user_id`=? and `status`=0");

        $sql->bind_param("i", $user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array 
    }
    public function getAllBillByStatus1($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM order_bill, users 
        where users.`user_id`=order_bill.`user_id` and order_bill.`user_id`=? and `status`=1");

        $sql->bind_param("i", $user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array 
    }
    public function getAllBillByStatus2($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM order_bill, users 
        where users.`user_id`=order_bill.`user_id` and order_bill.`user_id`=? and `status`=2");

        $sql->bind_param("i", $user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array 
    }
    public function addBill($fullname, $user_id, $address, $phone, $total, $note, $status)
    {
        $sql = self::$connection->prepare("INSERT INTO `order_bill`(`fullname`, `user_id`, `address`, `phone`, `total`, `note`, `status`)
        VALUE (?,?,?,?,?,?,?)");
        var_dump("INSERT
        INTO `order_bill`(`fullname`, `user_id`, `address`, `phone`, `total`, `note`, `status`)
        VALUE ($fullname,$user_id,$address,$phone,$total,$note,$status)");
        $sql->bind_param("sisiisi", $fullname, $user_id, $address, $phone, $total, $note, $status);
        return $sql->execute(); //return an object        
    }
    public function deletebill($id, $user_id)
    {
        $sql = self::$connection->prepare("DELETE from order_bill
        where  `id`=?  and `user_id`=?");
        $sql->bind_param("ii", $id, $user_id);
        return $sql->execute();
    }
    public function getAllBillid($user_id, $id_bill)
    {
        $sql = self::$connection->prepare("SELECT * FROM order_bill, cart ,products 
        where products.id=cart.product_id and order_bill.user_id=cart.user_id and cart.user_id=? and `order_bill`.`id`=?");
        $sql->bind_param("ii", $user_id, $id_bill);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array 
    }
}