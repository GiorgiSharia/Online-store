<?php
require_once ("application\database\DatabaseConnection.php");

function removeProduct(){
    $productID = $_GET["product_id"]; 
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();
        try {

            $statement = $pdo->prepare("DELETE FROM `products` WHERE id = :id");
            $statement->bindParam(':id', $productID);
            $statement->execute();

            $_SESSION['success_message'] = 'Product was removed successfully';
            header('Location: /Online-store/homepage.php');
            return;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            die();
        }
}

removeProduct();