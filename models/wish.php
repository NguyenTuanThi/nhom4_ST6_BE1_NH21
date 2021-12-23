<?php
class Wishlist extends Db
{
    public function getProduct($username, $product_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `wishlist`,products,users 
        WHERE products.id=wishlist.product_id 
        and users.user_id=wishlist.user_id and users.username= ? and product_id=  ?");
        $sql->bind_param("si", $username, $product_id);
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
    public function getAllWishListByUser($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM `wishlist`,users,products 
        WHERE wishlist.user_id=users.user_id and wishlist.product_id=products.id and users.username=?");
        $sql->bind_param("s", $username);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addWish($user_id, $product_id)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `wishlist`(`user_id`,`product_id`)
        VALUE (?,?)");
        var_dump("INSERT 
        INTO `wishlist`(`user_id`,`product_id`)
        VALUE ( $user_id, $product_id)");
        $sql->bind_param("ii", $user_id, $product_id);
        return $sql->execute(); //return an object        
    }
    public function del($product_id, $user_id)
    {
        $sql = self::$connection->prepare("DELETE from wishlist 
        WHERE `user_id`= ? and `product_id`= ? ");
        $sql->bind_param("ii", $user_id, $product_id);
        return $sql->execute();
    }
    public function countWishlist($user_id)
    {
        $sql = self::$connection->prepare("SELECT COUNT(*) as total 
FROM `wishlist` WHERE `user_id`=? ");
        $sql->bind_param("i", $user_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}