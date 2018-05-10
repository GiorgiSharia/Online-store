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

    $params = [
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':password' => password_hash($password, PASSWORD_DEFAULT),
        ':email' => $email,
        ':address' => $address,
        ':city' => $city,
        ':country' => $country,
        ':postal_code' => $postcode,
        ':telephone' => $telephone,
    ];
    try {
        $emCheck = $pdo->prepare("SELECT * FROM `users` WHERE email = :email LIMIT 1");
        $emCheck->bindParam(':email', $email);
        $emCheck->execute();

        $result = $emCheck->fetchAll(PDO::FETCH_ASSOC);
        $userData = $result[0];
        //gvegadaveba
        if($password != $confirmPassword){
            echo "Passwords do not match";
            return;
        }
        if(strlen($password) < 8){
            echo "Password should be at least 8 chars";
            return;
        }
        // no user matching the email
        if (!empty($result)) {
            $answer =  'This E-mail has already been used';
            echo($answer);
        }else{
            try {
                $statement = $pdo->prepare(
                    "INSERT INTO `users` (`firstname`, `lastname`, `password`, `email`, `address`, `city`, `country`, `postal_code`, `telephone`) 
                                  VALUES (:firstname, :lastname, :password, :email, :address, :city, :country, :postal_code, :telephone)"
                );
        
                $statement->execute($params);
        
                if ($pdo->lastInsertId()) {
                    echo "Registration successful";
                }
        
            } catch (PDOException $e) {
                return $e->getMessage();
                echo "Registration was not successful";
            }
        }
    } catch (PDOException $exception) {
        var_dump($exception->getMessage());
    }

   
}

// call to the register function
register();