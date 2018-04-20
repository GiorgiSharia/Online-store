<?php
if(isset($_POST['logMail'])) {

    require_once("database/DatabaseConnection.php");

    unset($_SESSION['success_message']);
    unset($_SESSION['error_message']);


    function died($error)
    {
        // your error code can go here
        echo "We are very sorry, but you have to input correct email. ";
        echo "If there was anything else you will see errors below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if (!isset($_POST['logMail'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }


    $email = $_POST['logMail']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }


    function sendPSW()
    {
        $pass = randomPassword();
        $email = $_POST['logMail'];
        $newpsw = password_hash($pass, PASSWORD_DEFAULT);

        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        try {
            $statement = $pdo->prepare("SELECT * FROM `users` WHERE email = :email LIMIT 1");
            $statement->bindParam(':email', $email);
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            // no user matching the email
            if (empty($result)) {
                $_SESSION['error_message'] = 'Invalid email!';
                echo "You entered an e-mail, which is not in database";
                return;
            }
                $sql = "UPDATE users SET password=:newpsw WHERE email = :email";

                // Prepare statement
                $stmt = $pdo->prepare($sql);

                // execute the query
                $update_status = $stmt->execute(array(':newpsw' => $newpsw, ':email' => $email));


                if ($update_status === TRUE) {
                    echo("Record updated successfully" . "\r\n");
                    $subject = "Password Update Request";
                    $mailContent = 'Dear Customer, 
                <br/>Sending your randomly generated password, make sure you change it once logged in.
                <br/>Here is your temporary password: ' . $pass . '
                <br/><br/>Regards,
                <br/>eSHOP';
                    //set content-type header for sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    //additional headers
                    $headers .= 'From: eSHOP' . "\r\n";
                    //send email
                    mail($email, $subject, $mailContent, $headers);
                    echo nl2br("\nPassword: ");
                    echo ($pass);
                    echo nl2br("\nHashed Password: ");
                    echo ($newpsw);
                    return true;
                } else {
                    echo "Error updating record";
                    die();

                }

        } catch (PDOException $e) {
            // usually this error is logged in application log and we should return an error message that's meaninful to user
            return $e->getMessage();
        }
    }
}
    sendPSW();