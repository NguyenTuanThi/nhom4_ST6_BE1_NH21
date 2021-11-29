<?php
class Manufacture extends Db
{
    public function getAllManu()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getManutByPrId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`, `manufactures` WHERE `products`.`manu_id` = `manufactures`.`manu_id` AND `products`.`manu_id`= ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function getQtyByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function addManufacture($manu_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`) VALUE (?)");
        var_dump("INSERT INTO `manufactures`(`manu_name`) VALUE ( $manu_name)");
        $sql->bind_param("s", $manu_name);
        return $sql->execute(); //return an object
    }
}
?>