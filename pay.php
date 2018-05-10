<?php
    session_start();
    require_once("protected_access_check.php");
    $productID = $_GET['product_id'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <!-- no worries just favicon (chrome doesnt render without encoding if not attached to webserver)-->
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAOgKAADoCgAAAAAA
AAAAAAAAf/8RAH//hwB//3wAf/8HAH//AAAAAAAAAAAAAAAAAAB//wAAf/8uAH//nAB//1YAf/8A
AH//AAAAAAAAAAAAAH//PwB//7EAf/+oAH//TgB//0cAf/9HAH//RgB//0YAf/9DAH//agB//7YA
f/9QAH//AAB//wAAAAAAAAAAAAB//3EAf/+tAH//rAB//6gAf/+pAH//qQB//6kAf/+qAH//qgB/
/6oAf//EAH//fgB+/wAAf/8AAAAAAAAAAAAAf/8CAH//BAB//wQAf/8EAH//BAB//wQAf/8EAH//
BAB//wMAf/8EAH//cgB//6AAf/8CAH//AAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//AACA/wAAf/8C
AH//BwB//w4Af/8ZAH//cwB//7sAf/82AH//AAB//wAAAAAAAAAAAAB//x8Af/9eAH//cgB//4QA
f/+TAH//owB//6wAf/+4AH//vAB//98Af/9BAH//AAB//wAAAAAAAAAAAAAAAAAAf/92AH//tgB/
/5YAf/+GAH//dAB//3EAf/9QAH//YQB//zEAf/+qAH//ZQB//wAAf/8AAAAAAAAAAAAAAAAAAH//
jgB//38Af/9iAH//WgB//1oAf/9jAH//UgB//2wAf/9KAH//qgB//7IAf/8IAH//AAAAAAAAAAAA
AAAAAAB//5gAf/9UAH//SAB//z4Af/8/AH//SQB//zQAf/9SAH//LAB//2sAf//GAH//NQB//wAA
AAAAAAAAAAAAAAAAf/+tAH//bAB//2wAf/9jAH//ZAB//2wAf/9cAH//dAB//1UAf/94AH//tAB/
/34Af/8AAH//AAAAAAAAAAAAAH//pAB//zoAf/9DAH//NwB//zYAf/9AAH//KQB//0gAf/8fAH//
SQB//0sAf/+4AH//EwB//wAAAAAAAAAAAAB//7YAf/+eAH//oQB//54Af/+cAH//nwB//5QAf/+g
AH//jAB//54Af/+LAH//2wB//0oAf/8AAID/AAAAAAAAf/8VAH//HAB//yAAf/8jAH//JwB//ysA
f/8vAH//MwB//zgAf/88AH//PgB//4MAf/+UAH//AQB//wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//wAAf/8iAH//twB//yIAf/8AAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf/8AAH//AQB//5QAf/+LAH//NgB//xwAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//AAB//wAAf/85AH//sQB//80A
f//HD48AAAAPAAAADwAAAAcAAPAPAAAAHwAAAB8AAAAPAAAADwAAAA8AAAAHAAAABwAAAAMAAP/j
AAD/4AAA//AAAA==" rel="icon" type="image/x-icon" />
    <!-- Favicon is DONE-->
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
<link rel="stylesheet" href="css/css1.css">
<title>eShop</title>
</head>

<div id="includeContent"></div>
<form action="application/paymentHandler.php?product_id=<? echo($productID); ?>" method="POST" id="payment">
<div  id="content">
    <h2>Pay by card </h2>
    <img src="images/cards.jpg" alt="cards" style="width:150px; height:25px;">
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

