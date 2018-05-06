<?php
require_once ('application/database/DatabaseConnection.php');

class AllCustomers {

    public function getCustomers()
    {

        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        $statement = $pdo->prepare("SELECT * FROM `users`");
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the id
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find products';
            header('Location: /Online-store/Homepage.php');
            return [];
        }

        $allCustomers=$result;

        return $allCustomers;
    }
}
$customers = new AllCustomers();
$allCustomers = $customers->getCustomers();