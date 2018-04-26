<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();


function changePSW()
{
    //$password = $_POST['currPassword']; // required
    $newPassword = $_POST['newPassword']; // required
    $newPassword2 = $_POST['newPassword2']; // required
    $newPasswordH = password_hash($newPassword, PASSWORD_DEFAULT);

    if($newPassword != $newPassword2){
        echo "New passwords don't match.";
        echo nl2br("\n<a href='../ChangePSW.php'>Return to change password.</a>");
        die();
    }

    $id = $_SESSION['userID'];
    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    /*$stmt = $pdo->prepare("SELECT password FROM `users` WHERE id = :id LIMIT 1");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    echo($res);*/

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
        // usually this error is logged in application log and we should return an error message that's meaninful to user
        var_dump($e->getMessage());
        return $e->getMessage();
    }
}


if($_SESSION['isLoggedIn'] == true) {

    require_once("database/DatabaseConnection.php");

    unset($_SESSION['success_message']);
    unset($_SESSION['error_message']);
    changePSW();

}
?>