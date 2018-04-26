<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
print_r($_SESSION);


function changePSW()
{
    //$password = $_POST['currPassword']; // required
    $newPassword = $_POST['newPassword']; // required
    //$newPassword2 = $_POST['NewPassword2']; // required
    $newPasswordH = password_hash($newPassword, PASSWORD_DEFAULT);
    echo($newPassword);

    $id = $_SESSION['userID'];
    echo($id);
    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    try {
        $statement = $pdo->prepare("SELECT * FROM `users` WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $id);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo "SADASDASD";

        // no user matching the email
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find user';
            header('Location: /Online-store/userForm.php');
            return;
        }
        $sql = "UPDATE users SET password=:newPasswordH WHERE id = :id";

        // Prepare statement
        $stmt = $pdo->prepare($sql);
        echo "AFGHANIKO";
        // execute the query
        $update_status = $stmt->execute(array(':newPasswordH' => $newPasswordH, ':id' => $id));
        echo "IHAAA";
        echo($update_status);
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