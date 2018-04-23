<?php
session_start();
if($_SESSION['isLoggedIn'] == true) {

    require_once("database/DatabaseConnection.php");

    unset($_SESSION['success_message']);
    unset($_SESSION['error_message']);

    // validation expected data exists
    if (!isset($_POST['currPassword']) && !isset($_POST['newPassword']) && !isset($_POST['newPassword2'])) {
        echo('We are sorry, but there appears to be a problem with the form you submitted.');
        die();
    }




    function changePSW()
    {
        $password = $_POST['currPassword']; // required
        $newPassword = $_POST['newPassword']; // required
        $newPassword2 = $_POST['NewPassword2']; // required
        $newPasswordH = password_hash($newPassword, PASSWORD_DEFAULT);

        $userID = $_SESSION['userID'];
        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        try {
            $statement = $pdo->prepare("SELECT * FROM `users` WHERE id = :userID LIMIT 1");
            $statement->bindParam(':userID', $userID);
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);

            // no user matching the email
            if (empty($result)) {
                $_SESSION['error_message'] = 'Couldnt find user';
                header('Location: /Online-store/userForm.php');
                return;
            }
            $sql = "UPDATE users SET password=:newPasswordH WHERE id = :userID";

            // Prepare statement
            $stmt = $pdo->prepare($sql);

            // execute the query
            $update_status = $stmt->execute(array(':newPasswordH' => $newPasswordH, ':id' => $userID));


            if ($update_status === TRUE) {
                echo("Record updated successfully" . "\r\n");
                echo nl2br("\nPassword: ");
                echo ($newPassword);
                echo nl2br("\nHashed Password: ");
                echo ($newPasswordH);
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
changePSW();