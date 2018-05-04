<?php
include 'validator.php';
require_once ("database/DatabaseConnection.php");
    /**
     * This is the function that handles the registration
     */
function pay() {
    $postedData = $_POST['data'];
    
    //inputs validated
    $year = $postedData['year'];
    $month = $postedData['month'];
    $cardNumber = $postedData['cardNumber'];
    $ccv = $postedData['ccv'];

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();
    // insert using PDO prepared statement, it helps prevents against sql injection attack (more on that later)
    $params = [
        ':ccv' => $ccv,
        ':cardNumber' => $cardNumber,
        ':month' => $month, // we MUST not store password as plain text
        ':year' => $year,
    ];
    try {
        $emCheck = $pdo->prepare("SELECT * FROM `users` WHERE email = :email LIMIT 1");
        $emCheck->bindParam(':email', $email);
        $emCheck->execute();

        $result = $emCheck->fetchAll(PDO::FETCH_ASSOC);
        $userData = $result[0];

        // no user matching the email
        if (!empty($result)) {
           // $_SESSION['error_message'] = 'Invalid email / password!';
            //header('Location: /Online-store/userForm.php');
            $answer =  'email exists';
            echo('email exists');
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
                // usually this error is logged in application log and we should return an error message that's meaninful to user 
                return $e->getMessage();
                echo "Registration was not successful";
            }
        
            
        }
    } catch (PDOException $exception) {
        var_dump($exception->getMessage());
    }

   
}
pay();
   