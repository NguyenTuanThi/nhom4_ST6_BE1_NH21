<?php
class User extends Db
{
    public function checkLogin($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM users 
        where `username`=? and `password`=?");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
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
    public function checkUser($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM users 
        where `username`=? ");
        $sql->bind_param("s", $username);
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

    public function Register($username, $password, $role)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `users`(`username`,`password`,`role_id`)
        VALUE (?,?,?)");
        $role = 2;
        $password = md5($password);
        $sql->bind_param("ssi", $username, $password, $role);
        return $sql->execute(); //return an object
    }
}
