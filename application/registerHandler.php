<?php
include 'validator.php';
require_once ("database/DatabaseConnection.php");
    /**
     * This is the function that handles the registration
     */
function register() {
    $postedData = $_POST['data'];
    
    //inputs validated
    $email = $postedData['email'];
    $email = trimSpecialChars($email);
    $firstname = $postedData['firstname'];
    $firstname = trimSpecialChars($firstname);
    $lastname = $postedData['lastname'];
    $lastname = trimSpecialChars($lastname);
    $password = $postedData['password'];
    $password = trimSpecialChars($password);
    $confirmPassword = $postedData['confirm_password'];
    $confirmPassword = trimSpecialChars($confirmPassword);
    $address = $postedData['address'];
    $address = trimSpecialChars($address);
    $city = $postedData['city'];
    $city = trimSpecialChars($city);
    $country = $postedData['country'];
    $country = trimSpecialChars($country);
    $postcode = $postedData['postcode'];
    $postcode = trimSpecialChars($postcode);
    $telephone = $postedData['telephone'];
    $telephone = trimSpecialChars($telephone);

    

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();
    // insert using PDO prepared statement, it helps prevents against sql injection attack (more on that later)
    $params = [
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':password' => password_hash($password, PASSWORD_DEFAULT), // we MUST not store password as plain text
        ':email' => $email,
        ':address' => $address,
        ':city' => $city,
        ':country' => $country,
        ':postal_code' => $postcode,
        ':telephone' => $telephone,
    ];

    try {
        $statement = $pdo->prepare(
            "INSERT INTO `users` (`firstname`, `lastname`, `password`, `email`, `address`, `city`, `country`, `postal_code`, `telephone`) 
                          VALUES (:firstname, :lastname, :password, :email, :address, :city, :country, :postal_code, :telephone)"
        );

        $statement->execute($params);

        if ($pdo->lastInsertId()) {
            return "Registration successful";
        }

    } catch (PDOException $e) {
        // usually this error is logged in application log and we should return an error message that's meaninful to user 
        return $e->getMessage();
    }

    return "Registration was not successful";
}

// call to the register function
register();