<?php
session_start();
    if ($_SESSION['isLoggedIn'] !== true) {
        echo "<script type='text/javascript'>alert('You must be logged in to shop');</script>";
        $_SESSION['error_message'] = 'You must be logged in!';
        header('Location: userForm.php');
    }
?>