<?php
session_start();
    if ($_SESSION['isLoggedIn'] !== true) {
        echo "<script type='text/javascript'>var answer = confirm('You must be logged in to shop');if(answer){window.location.href = 'userForm.php';}</script>";
    }
?>