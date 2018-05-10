<?php
session_start();

require_once ("database/DatabaseConnection.php");
include 'validator.php';

function changePSW()
{
    //inputs validated
    $id = $_SESSION['userID'];
    $postedData = $_POST['data'];
    $password = $postedData['password'];
    $password = trimSpecialChars($password);
    $newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : null; // required
    $newPassword = trimSpecialChars($newPassword);
    $newPassword2 = isset($_POST['newPassword2']) ? $_POST['newPassword'] : null; // required
    $newPassword2 = trimSpecialChars($newPassword2);
    $newPasswordH = password_hash($newPassword, PASSWORD_DEFAULT);

    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    $statement = $pdo->prepare("SELECT * FROM `users` WHERE id = :id LIMIT 1");
    $statement->bindParam(':id', $id);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $userData = $result[0];

    // no user matching found
    if (empty($result)) {
        $_SESSION['error_message'] = 'Invalid email / password!';
        header('Location: /Online-store/profile.php');
        return;
    }

    $userEncryptedPassword = $userData['password'];

    // verify the incoming password with encrypted password
    if (password_verify($password, $userEncryptedPassword)) {
        $_SESSION['isLoggedIn'] = false;
        $_SESSION['success_message'] = 'Password changed successfully';
        header('Location: /Online-store/userForm.php');
    } else {
        echo "Old password is not correct";
        echo nl2br("\n<a href='../ChangePSW.php'>Return to change password.</a>");
        die();
    }

    if($newPassword != $newPassword2){
        echo "New passwords don't match.";
        echo nl2br("\n<a href='../ChangePSW.php'>Return to change password.</a>");
        die();
    }

    $id = $_SESSION['userID'];
    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    try {
        $statement = $pdo->prepare("SELECT * FROM `users` WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $id);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the email
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find user';
            header('Location: /Online-store/userForm.php');
            return;
        }
        $sql = "UPDATE users SET password=:newPasswordH WHERE id = :id";

        // Prepare statement
        $stmt = $pdo->prepare($sql);
        // execute the query
        $update_status = $stmt->execute(array(':newPasswordH' => $newPasswordH, ':id' => $id));

        if ($update_status === TRUE) {
            echo("Record updated successfully" . "\r\n");
            echo nl2br("\n<a href='../Homepage.php'>Return to homepage</a>");
            return true;
        } else {
            echo "Error updating record";
            die();

        }

    } catch (PDOException $e) {
        // usually this error is logged in application log and we should return an error message that's meaningful to user
        var_dump($e->getMessage());
        return $e->getMessage();
    }
}


if($_SESSION['isLoggedIn'] == true) {

    unset($_SESSION['success_message']);
    unset($_SESSION['error_message']);
    changePSW();

}
?>