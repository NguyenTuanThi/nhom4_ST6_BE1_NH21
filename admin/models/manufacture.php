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
    public function getAllManuById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures where `manu_id`=?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addManu($name)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `manufactures`(`manu_name`)
        VALUE (?)");
        $sql->bind_param("s", $name);
        return $sql->execute(); //return an object        
    }
    public function del($id)
    {
        $sql = self::$connection->prepare("DELETE FROM manufactures  Where `manu_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function updateManu($name, $id)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` 
        set `manu_name`=? 
        where `manu_id`=?");
        $sql->bind_param("si", $name, $id);
        return $sql->execute(); //return an object        
    }
}