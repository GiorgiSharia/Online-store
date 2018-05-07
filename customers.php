<?php
    session_start();
    require_once("application/AllCustomers.php");
    require_once("application/models/User.php");
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
    <table border="1">
            <tr>
                <th> ID</th>
                <th>Firstname</th>
                <th> Lastname</th>
                <th> Email</th>
                <th> Address</th>
                <th> City</th>
                <th> Country</th>
                <th> Phone</th> 
                <th> Postal Code</th>
                <th> Action </th>
            </tr>
        <?php foreach($allCustomers as $customers) { ?>
            <tr>
                <td><?php echo $customers['id']?></td>
                <td><?php echo $customers['firstname']?></td>
                <td><?php echo $customers['lastname']?></td>
                <td><?php echo $customers['email']?></td>
                <td><?php echo $customers['address']?></td>
                <td><?php echo $customers['city']?></td>
                <td><?php echo $customers['country']?></td>
                <td><?php echo $customers['telephone']?></td> 
                <td><?php echo $customers['postal_code']?></td>
                <td><a href='application/removeCustomer.php?customer_id=<?= $customers['id'] ?>' style="color:red"> REMOVE<a/></td>
            </tr>
        <?php } ?>
    </talbe>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>
</html>