<?php
    session_start();
    require_once("protected_access_check.php");
    $productID = $_GET['product_id'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/css1.css">
<title>eShop</title>
<script src="js/script.js"></script>
</head>

<div id="includeContent"></div>
<form action="application/paymentHandler.php?product_id=<? echo($productID); ?>" method="POST" id="payment">
<div  id="content">
    <h2>Pay by card </h2>
    <img src="https://www.horusrc.com/media/wysiwyg/pay_by_cards.jpg" alt="cards" style="width:150px; height:25px;">
    <br/>
    <br/>
    <b> Card Holder </b><span style="margin-left: 20px;"><input type="text" id="card_holder" name="data[cardHolder]" required></span>
    <br/>
    <br/>
    <b> Card Number </b><span style="margin-left: 10px;"><input type="text" id="card_number" name="data[cardNumber]" required></span>
    <br/>
    <br/>
    <b>Expires </b>
    <span style="margin-left: 50px;">
    <select name="data[expire_year]" required>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
    </select>
    <span> - </span>
    <select name="data[expire_month]" required>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="04">08</option>
        <option value="04">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
    </span>
    <br/>
    <br/>
    <b>Security Code</b>
    <span style="margin-left: 10px;">
    <input type="text" id="sec_code" size="4" name="data[ccv]" required>
    </span>
    <br/>
    <br/>
    <input type="submit" value="Process Transaction" style=" margin-left: 70px;" name="data[submit]">
    </form>
</div>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>