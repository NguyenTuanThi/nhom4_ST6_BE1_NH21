<?php
class User extends Db
{
    public function getAllUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM users order by `user_id` asc");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delUser($id)
    {
        $sql = self::$connection->prepare("DELETE FROM users  Where `user_id`=?");
        $sql->bind_param("i", $id);
        return $sql->execute(); //return an object
    }
    public function countCustomer()
    {
        $sql = self::$connection->prepare("SELECT Count(`user_id`) as total 
FROM `users` WHERE `user_id`!= 1 ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array 
    }
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
    public function check($username)
    {
        $sql = self::$connection->prepare("SELECT `user_id` FROM users 
        where `username`=? ");
        $sql->bind_param("s", $username);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
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
    public function Role($username)
    {
        $sql = self::$connection->prepare("SELECT `role_id` FROM users 
        where  `username`= ?");
        $sql->bind_param("s", $username);
        $sql->execute(); //return an object      
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    //  public function checkRole()
    // {
    //     $sql = self::$connection->prepare("SELECT * FROM users 
    //     where  `role_id`= 1");

    //     $sql->execute(); //return an object      
    //     $items = array();
    //     $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    //     return $items; //return an array
    // }
    // public function checkRole()
    // {
    //     $sql = self::$connection->prepare("SELECT * FROM users 
    //     where  `role_id`= 1");

    //     $sql->execute(); //return an object      
    //     $items = array();
    //     $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    //     return $items; //return an array
    // }
    public function getPass($username)
    {
        $sql = self::$connection->prepare("SELECT `password` FROM users 
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