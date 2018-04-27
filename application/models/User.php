<?php
require_once ('application/database/DatabaseConnection.php');
require_once ('protected_access_check.php');

$id = $_SESSION['userID'];
class User {

    public function getUserProfile()
    {

        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        // get user id from session variable
        $userID = $_SESSION['userID'];

        $statement = $pdo->prepare("SELECT id, firstname, lastname, email, address, city, country, postal_code, telephone FROM `users` WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $userID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the id
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find user';
            header('Location: /Online-store/Homepage.php');
            return [];
        }

        $userData = $result[0];

        return $userData;
    }
}
$user = new User();
$userData = $user->getUserProfile();