<?php
require_once ("database/DatabaseConnection.php");
include ('application/models/User.php');

function removeCustomer(){
    $customerID = $_GET["customer_id"];
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();
        try {

            $statement = $pdo->prepare("DELETE FROM `users` WHERE id = :id");
            $statement->bindParam(':id', $customerID);
            $statement->execute();

            $_SESSION['success_message'] = 'User was removed successfully';
            header('Location: /Online-store/customers.php');
            return;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            die();
        }
}

removeCustomer();