<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/forms.css">
    <title>eShop</title>
</head>

<div id="includeContent"></div>
<h2 class="header">Forgot Password</h2>
<hr>
<div class="row">
    <div class="col-lg-4 header" id="login">
        <h2 id="headerForLogin">Get your account back!</h2>
        <?php
        if (isset($_SESSION['error_message'])) {
            echo $_SESSION['error_message'];
        }
        ?>
        <form action="/Online-store/application/send_forgot_psw.php" method="POST">
            <label for="logMail">Email Address:</label>
            <input id="logMail" placeholder="E-mail" class="form-control" type="email" name="logMail" required>
            <br/>
            <input class="buttn" type="submit" value="SUBMIT">
            <br/>
        </form>
    </div>
    <!--<div style="position:absolute; left:35%; top:20%; height: 550px; border-left:1px solid rgb(31, 31, 68);"></div>-->
    <div class="col-lg-2" id="ad">
        <label id="adLabel">SHOP NOW:</label>
        <br/>
        <a href=""><img src="images/item-1.jpg" class="ad" alt:"Green-Polariod"></a>
        <a href=""><img src="images/item-2.jpg" class="ad" alt:"smart-Watch"></a>
        <a href=""><img src="images/item-3.jpg" class="ad" alt:"GoPro-on-legs"></a>
        <a href=""><img src="images/item-4.jpg" class="ad" alt:"GoPro"></a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>