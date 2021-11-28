<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare(
            "SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE `products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id`
        ORDER by  `id` desc "
        );
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addProduct($name, $manu_id, $type_id, $price,  $image, $desc, $feature, $created_at)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `products`(`name`,`manu_id`,`type_id`,`price`,`image`,`description`,`feature`,`created_at`)
        VALUE (?,?,?,?,?,?,?,?)");
        var_dump("INSERT 
        INTO `products`(`name`,`manu_id`,`type_id`,`price`,`image`,`description`,`feature`,`created_at`)
        VALUE ( $name, $manu_id, $type_id, $price,  $image,'$desc', $feature, $created_at)");
        $sql->bind_param("siiissis", $name, $manu_id, $type_id, $price,  $image, $desc, $feature, $created_at);
        return $sql->execute(); //return an object
    }
}
