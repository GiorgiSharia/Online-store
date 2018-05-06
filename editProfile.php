<?php
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
<link rel="stylesheet" href="css/forms.css">
<script src="js/script.js"></script>
</head>

<div id="includeContent"></div>
<div class="row">
    <div class="col-lg-3">
        <a href=""><img src="images/offer_1.jpg"></a>
    </div>
    <div class="col-lg-6 header"> 
            <h2 id="headerForReg">Edit your profile</h2>
            <hr>
            <form class="row" id="updateForm" action="application/updateHandler.php" method="POST">
                <div class="col-lg-6">
                    <label for="firstname">Firstname:</label>
                    <input id="firstname" placeholder="Full Name" class="form-control"  type="text" name="data[firstname]" value="<?= $userData['firstname']; ?>" required>
                    <br/>
                    <label for="lastname">Lastname:</label>
                    <input id="lastname" placeholder="Full Name" class="form-control"  type="text" name="data[lastname]" value="<?= $userData['lastname']; ?>" required>
                    <br/>                   
                    <label for="regMail">Email Address:</label>
                    <input id="regMail" placeholder="E-mail" class="form-control"  type="email"  name="data[email]" value="<?= $userData['email']; ?>" required>
                    <br/>
                    <label for="address">Address:</label>
                    <input id="address" placeholder="Address" class="form-control"  type="text"  name="data[address]" value="<?= $userData['address']; ?>" required>
                    <br/>
                </div>
                <div class="col-lg-6">
                    <label for="city">City:</label>
                    <input id="city" placeholder="City" class="form-control"  type="text" name="data[city]" value="<?= $userData['city']; ?>" required>
                    <br/>
                    <label for="country">Country:</label>
                    <input id="country" placeholder="Country" class="form-control"  type="text" name="data[country]" value="<?= $userData['country']; ?>" required>
                    <br/>
                    <label for="postal">Postal Code:</label>
                    <input id="postal" placeholder="Postal Code" class="form-control"  type="text" name="data[postcode]" value="<?= $userData['postal_code']; ?>" required>
                    <br/>
                    <label for="phone">Phone Number:</label>
                    <input id="phone" placeholder="Phone Number" class="form-control"  type="text" name="data[telephone]" value="<?= $userData['telephone']; ?>" required>
                    <br/>
                </div>
                <input id="reg" class="buttn" type="submit" value="Submit Changes" name="data[submit]">
                <br/>
            </form>
    </div>
    <div class="col-lg-3">
        <a href=""><img src="images/offer_2.jpg"></a>
    </div>
</div>