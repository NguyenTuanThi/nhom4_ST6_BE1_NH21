<?php
class Protype extends Db
{
    public function getAllType()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getTypeById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes where `type_id`=?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function updateType($name, $id)
    {
        $sql = self::$connection->prepare("UPDATE `protypes` 
        set `type_name`=? 
        where `type_id`=?");
        $sql->bind_param("si", $name, $id);
        return $sql->execute(); //return an object        
    }
    public function del($id)
    {
        $sql = self::$connection->prepare("DELETE FROM protypes  Where `type_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function addType($name)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `protypes`(`type_name`)
        VALUE (?)");
        $sql->bind_param("s", $name);
        return $sql->execute(); //return an object        
    }
}