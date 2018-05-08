<?php
session_start();
include("application/orderHistories.php");
?>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/css1.css">
</head>
<div id="includeContent"></div>
<div>
        <?php if(empty($orders)) {?>
        <!-- AK GAMOACHINET RAMENAIRAD RO ARGAK ORDER HISTORYTKO -->
    <?php } else {
            foreach($allOrders as $orders) { ?>
    <table border="1">
        <tr>
            <th> ID</th>
            <th> Product ID</th>
            <th> Card Number</th>
            <th> Card Holder</th>
            <th> Month</th>
            <th> Year</th>
            <th> CCV</th>
        </tr>
                <tr>
                    <td><?php echo $orders['id']?></td>
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