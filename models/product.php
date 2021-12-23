<?php
class Product extends Db
{
    public function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProductsByFeature()
    {
        $sql = self::$connection->prepare("SELECT * FROM products where `feature`=1");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getAllProducts1()
    {
        $sql = self::$connection->prepare("SELECT * FROM products 
        where `type_id`=4 or `type_id`=5 or `type_id`=6");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductById($id)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM `products`,`manufactures`,`protypes`
        WHERE `products`.`manu_id` = `manufactures`.`manu_id`
        AND `products`.`type_id` = `protypes`.`type_id` 
        and id = ?");
        $sql->bind_param("i", $id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByName($name)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` = ?");
        $sql->bind_param("s", $name);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductsByType($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get3ProductsByType($type_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE type_id = ? LIMIT ?, ?");
        $sql->bind_param("iii", $type_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    function paginate($url, $total, $perPage, $page)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            if ($page == $j) {
                # code...
                $link = $link . "<li class ='active'> $j</li>";
            } else {
                $link = $link . "<li><a href='$url&page=$j'> $j </a></li>";
            }
        }
        return $link;
    }
    public function searchPage($keyword, $page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products 
        WHERE (`name` LIKE ? ) or (`price` LIKE ?) or (`description` LIKE ?) LIMIT ?, ?");
        $keyword = "%$keyword%";
        $sql->bind_param("sssss", $keyword, $keyword, $keyword, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductNew()
    {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0,10");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductTypeID()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = 2");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductManuID()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id = 2");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products 
        WHERE (`name` LIKE ? ) or (`price` LIKE ?) or (`description` LIKE ?)");
        $keyword = "%$keyword%";
        $sql->bind_param("sis", $keyword, $keyword, $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    // public function search($searchcol, $keyword)
    // {
    //     $sql = self::$connection->prepare("SELECT * FROM products 
    //     WHERE (`name` LIKE ? ) or (`price` LIKE ?) or (`description` LIKE ?)");
    //     $keyword = "%$keyword%";
    //     $sql->bind_param("sss", $keyword, $keyword, $keyword);
    //     $sql->execute(); //return an object
    //     $items = array();
    //     $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    //     return $items; //return an array
    // }
}