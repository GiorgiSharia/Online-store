<?php
require_once ('application/database/DatabaseConnection.php');
require_once ("application/models/User.php");


class allOrders {

    public function getOrders()
    {
        $userID = $_SESSION['userID'];
        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        $statement = $pdo->prepare("SELECT * FROM `orders` WHERE userID = :id");
        $statement->bindParam(':id', $userID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no order matching user ID
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find orders';
            return [];
        }

        $allOrders=$result;

        return $allOrders;
    }
}
$orders = new allOrders();
$allOrders = $orders->getOrders();

