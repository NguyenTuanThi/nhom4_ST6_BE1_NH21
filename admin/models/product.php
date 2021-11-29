<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE `products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id`");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addProduct($name,$manu_id,$type_id,$price,$image,$desc)
    {
        $sql = self::$connection->prepare("INSERT
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`)
        VALUES (?,?,?,?,?,?)");
        $sql->bind_param("siiiiss",$name,$manu_id,$type_id,$price,$image,$desc);
        
        return $items; //return an object
    }
}