<?php
class UserQueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    function selectUser($id)
    {
        $db = $this->pdo->prepare("SELECT * FROM user_registered WHERE id = {$id}");
        $db->execute();
        return $db->fetchAll(PDO::FETCH_OBJ);
    }
    function userOrders($id)
    {
        $db = $this->pdo->prepare("SELECT
                                    p.id as pid,
                                    p.image as pimage,
                                    p.title as pname,
                                    o.*
                                    FROM orders o
                                    INNER JOIN products p ON o.productID = p.id
                                    WHERE o.userID = {$id}");
        $db->execute();
        return $db->fetchAll(PDO::FETCH_OBJ);
    }
    function userWishlists($id)
    {
        $db = $this->pdo->prepare("SELECT * FROM user_wishlist WHERE userID = {$id}");
        $db->execute();
        return $db->fetchAll(PDO::FETCH_OBJ);
    }
}
