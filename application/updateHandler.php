<?php
session_start();
require_once ("database/DatabaseConnection.php");

/**
 * This is the function that handles the registration
 */
function update() {
    $postedData = $_POST['data'];

    $email = $postedData['email'];
    $firstname = $postedData['firstname'];
    $lastname = $postedData['lastname'];
    $address = $postedData['address'];
    $city = $postedData['city'];
    $postcode = $postedData['postcode'];
    $telephone = $postedData['telephone'];

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    $params = [
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':email' => $email,
        ':address' => $address,
        ':city' => $city,
        ':postal_code' => $postcode,
        ':telephone' => $telephone,
        ':id' => $_SESSION['userID'],
    ];

    try {
        $statement = $pdo->prepare(
            "UPDATE `users` SET firstname = :firstname, lastname = :lastname, email = :email,
                                address = :address, city = :city, postal_code = :postal_code, telephone = :telephone
                                WHERE id = :id"
        );

        $statement->execute($params);

        $_SESSION['success_message'] = 'Update was successful';
        header('Location: /Online-store/profile.php');
        return;
    } catch (PDOException $e) {
        var_dump($e->getMessage());
        die();
    }
}
unset($_SESSION['success_message']);
unset($_SESSION['error_message']);
// call to the update function
update();