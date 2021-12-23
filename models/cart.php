<?php
class Cart extends Db
{
    public function getAllCart()
    {
        $sql = self::$connection->prepare("SELECT * FROM cart");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllCartByUser($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM cart where `user_id`=?");
        $sql->bind_param("i", $user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductId($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM cart, products where `cart`.`product_id`=`products`.`id` and `user_id`=?");
        $sql->bind_param("i", $user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getCartByProduct($product_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM cart, products where `cart`.`product_id`=`products`.`id` and `product_id`=?");
        $sql->bind_param("i", $product_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function UpdateQty($qty, $product_id)
    {
        $sql = self::$connection->prepare("UPDATE cart set `qty`=? where `product_id`=?");
        $sql->bind_param("ii", $qty, $product_id);
        $sql->execute(); //return an object
        return $sql->execute();
    }
    // public function addCart($user_id, $product_id, $price, $qty)
    // {
    //     $sql = self::$connection->prepare("INSERT 
    //     INTO `cart`(`user_id`,`product_id`,`price`,`qty`)
    //     VALUE (?,?,?,?)");
    //     var_dump("INSERT 
    //     INTO `cart`(`user_id`,`product_id`,`price`,`qty`)
    //     VALUE ( $user_id, $product_id, $price,$qty)");
    //     $sql->bind_param("iiii", $user_id, $product_id, $price, $qty);
    //     return $sql->execute(); //return an object        
    // }
    public function addCart($user_id, $product_id, $price, $qty)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `cart`(`user_id`,`product_id`,`price`,`qty`)
        VALUE (?,?,?,?)");
        var_dump("INSERT 
        INTO `cart`(`user_id`,`product_id`,`price`,`qty`)
        VALUE ( $user_id, $product_id, $price,$qty)");
        $sql->bind_param("iiii", $user_id, $product_id, $price, $qty);
        return $sql->execute(); //return an object        
    }
    // public function deletecart($product_id)
    // {
    //     $sql = self::$connection->prepare("DELETE From `cart` 
    //     where `product_id`=?");
    //     $sql->bind_param("i", $product_id);
    //     return $sql->execute(); //return an object        
    // }
    public function deletecart($product_id, $user_id)
    {
        $sql = self::$connection->prepare("DELETE from cart
        where  `product_id`=?  and `user_id`=?");
        $sql->bind_param("ii", $product_id, $user_id);
        return $sql->execute();
    }
    public function deleteviewcart($user_id)
    {
        $sql = self::$connection->prepare("DELETE from cart
        where `user_id`=?");
        $sql->bind_param("i", $user_id);
        return $sql->execute();
    }
    public function checkProduct_id($product_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM cart, users
        where `cart`.`user_id`=`users`.`user_id` and `product_id`=? ");
        $sql->bind_param("i", $product_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1) {
            # code...
            return true;
        } else {
            return false;
        }
    }
    public function checkCart($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM cart, users,products
        where `cart`.`user_id`=`users`.`user_id` and `cart`.`product_id`=`products`.`id`  and `username`=? ");
        $sql->bind_param("s", $username);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array 
    }
    public function countProduct($user_id)
    {
        $sql = self::$connection->prepare("SELECT COUNT(*) as total 
FROM `cart` WHERE `user_id`=? ");
        $sql->bind_param("i", $user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function countPrice($user_id)
    {
        $sql = self::$connection->prepare("SELECT SUM(`price`*`qty`) as total1 
FROM `cart` WHERE `user_id`= ? ");
        $sql->bind_param("i", $user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}