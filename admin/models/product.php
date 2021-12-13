<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE `products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id` 
        ORDER by  `id` desc ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
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
    public function delProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM Products  Where `id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }

    public function updateProduct($name, $manu_id, $type_id, $price, $image, $desc, $feature, $id)
    {
        $sql = self::$connection->prepare("UPDATE Products 
        set `name`= ?,`manu_id`= ?,`type_id`= ?, `price`= ?, `image`= ?,`desc`= ?,`feature`= ? 
        Where `id`= ?");
        var_dump("UPDATE Products 
        set `name`= $name,`manu_id`= $manu_id,`type_id`= $type_id,`price`= $price,`image`= $image,`description`= $desc,`feature`= $feature
        where `id`=$id");
        $sql->bind_param("siiissii", $name, $manu_id, $type_id, $price, $image, $desc, $feature, $id);
        return $sql->execute(); //return an object
    }
}
