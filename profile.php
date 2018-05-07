<?php
require_once ('application/database/DatabaseConnection.php');
require_once ('protected_access_check.php');
require_once ('application/models/User.php');
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
<link rel="stylesheet" href="css/profile_style.css"
</head>

<div id="includeContent"></div>
    <div class="row">  
        <div class="col-lg-3">
            <a href=""><img src="images/offer_1.jpg"></a>
        </div>      
        <div class="col-lg-3">
            <h2 id="user_name">Hello, <?php echo($userData['firstname']); ?></h2>
            <p><b>Full name: </b><?php echo($userData['firstname']);
            echo " ";
            echo($userData['lastname']); ?></p>
            <p><b>E-mail: </b><?php echo($userData['email']); ?></p>
            <p><b>Address: </b><?php echo($userData['address']); ?></p>
            <p><b>City: </b><?php echo($userData['city']); ?></p>
            <p><b>Country: </b><?php echo($userData['country']); ?></p>
            <p><b>Postal Code: </b><?php echo($userData['postal_code']); ?></p>
            <p><b>Telephone: </b><?php echo($userData['telephone']); ?></p>
        </div>
        <div class="col-lg-3">
            <br/>
            <button class="btn buttn"><a href="editProfile.php">Edit Profile</a></button>
            <br/>
            <button class="btn buttn"><a href="changePSW.php">Change Password</a></button>
            <br/>
            <?php if($userData['is_admin']==1){ ?>
                <button class="btn buttn"><a href="addProduct.php">Add Product</a></button>
                <br>
                <button class="btn buttn"><a href="customers.php">Manage Customers</a></button>
                <br/>
            <?php }?>
            <button class="btn buttn"><a href="">Order History</a></button>
        </div>
        <div class="col-lg-3">
            <a href=""><img src="images/offer_2.jpg"></a>
        </div>
    </div>
</body>
<script src="js/script.js"></script>
</html>