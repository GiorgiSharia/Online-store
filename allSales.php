<?php
session_start();
include("application/orderHistoriesA.php");
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

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/css1.css">
</head>
<div id="includeContent"></div>
<div>
    <?php if(empty($allOrders)) {?>
        <h2 style="padding-left: 50px">There are no orders placed on this website</h2>
    <?php } else { ?>
    <table border="1">
        <tr>
            <th> Order ID</th>
            <th> User ID</th>
            <th> Product ID</th>
            <th> Card Number</th>
            <th> Card Holder</th>
            <th> Month</th>
            <th> Year</th>
            <th> CCV</th>
        </tr>
    <?php foreach($allOrders as $orders) { ?>
        <tr>
            <td><?php echo $orders['id']?></td>
            <td><?php echo $orders['userID']?></td>
            <td><?php echo $orders['productID']?></td>
            <td><?php echo $orders['cardNumber']?></td>
            <td><?php echo $orders['cardHolder']?></td>
            <td><?php echo $orders['expireMonth']?></td>
            <td><?php echo $orders['expireYear']?></td>
            <td><?php echo $orders['ccv']?></td>
        </tr>
        <?php }
        } ?>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>
</body>
</html>