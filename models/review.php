<?php
// class Review extends Db
// {
//     public function getAllReview()
//     {
//         $sql = self::$connection->prepare("SELECT * FROM `review` ");
//         $sql->execute(); //return an object
//         $items = array();
//         $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
//         return $items; //return an array
//     }
//     public function getReviewById($id)
//     {
//         $sql = self::$connection->prepare("SELECT * FROM `review` where `product_id`=? ");
//         $sql->bind_param("i", $product_id);
//         $sql->execute(); //return an object
//         $items = array();
//         $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
//         return $items; //return an array
//     }
//     public function addreview($name, $product_id, $rating)
//     {
//         $sql = self::$connection->prepare("INSERT INTO `review`(`name`,`product_id`,`rating`)
//         VALUES (?,?,?)");
//         var_dump("INSERT INTO `review`(`name`, `product_id` ,`rating`) values($name,$product_id,$rating)");
//         $sql->bind_param("sii", $name, $product_id, $rating);
//         return $sql->execute();
//     }
// }