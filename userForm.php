<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/css1.css">
  <link rel="stylesheet" href="css/forms.css">
  <title>eShop</title>
</head>

<div id="includeContent"></div>
    <h2 class="header">Log In or Register</h2>
    <hr>
    <div class="row">
        <div class="col-lg-4 header" id="login">
            <h2 id="headerForLogin">I'm a Returning Customer</h2>
            <?php
                if (isset($_SESSION['error_message'])) {
                    echo $_SESSION['error_message'];
                }
            ?>
            <form action="/Online-store/application/loginHandler.php" method="POST">
                <label for="logMail">Email Address:</label>
                <input id="logMail" placeholder="E-mail" class="form-control" type="email" name="data[email]" required>
                <br/>
                <label for="logPass">Password:</label>
                <input id="logPass" type="password" placeholder="Password" class="form-control" name="data[password]" required> 
                <br/>
                <input id="log" class="buttn" type="submit" value="LOG IN" name="data[submit]">
                <br/>
                <p><a href="forgotPSW.php">Forgot Password ?</a></p>
            </form>
        </div>  
        <div class="divider"></div>
        <div class="col-lg-6 header" id="register" > 
            <h2 id="headerForReg">I'm a New Customer</h2>
            <form method="POST" id="regForm" class="row">
                <div class="col-lg-6">
                    <label for="firstname">Firstname:</label>
                    <input id="firstname" placeholder="Full Name" class="form-control"  type="text" name="data[firstname]"required>
                    <br/>
                    <label for="lastname">Lastname:</label>
                    <input id="lastname" placeholder="Full Name" class="form-control"  type="text" name="data[lastname]" required>
                    <br/>                   
                    <label for="regMail">Email Address:</label>
                    <input id="regMail" placeholder="E-mail" class="form-control"  type="email"  name="data[email]" required>
                    <br/>
                    <label for="address">Address:</label>
                    <input id="address" placeholder="Address" class="form-control"  type="text"  name="data[address]" required>
                    <br/>
                    <label for="city">City:</label>
                    <input id="city" placeholder="City" class="form-control"  type="text" name="data[city]" required>
                    <br/>
                </div>
                <div class="col-lg-6">
                    <label for="country">Country:</label>
                    <input id="country" placeholder="Country" class="form-control"  type="text" name="data[country]" required>
                    <br/>
                    <label for="postal">Postal Code:</label>
                    <input id="postal" placeholder="Postal Code" class="form-control"  type="text" name="data[postcode]" required>
                    <br/>
                    <label for="phone">Phone Number:</label>
                    <input id="phone" placeholder="Phone Number" class="form-control"  type="text" name="data[telephone]" required>
                    <br/>
                    <label for="regPass">Password:</label>
                    <input id="regPass"type="password" placeholder="Password" class="form-control" name="data[password]" required> 
                    <br/>
                    <label for="regPassRepeat">Repeat Password:</label>
                    <input id="regPassRepeat"type="password" placeholder="Repeat Password" class="form-control" required> 
                    <br/>
                </div>
                <input id="reg" class="buttn" type="submit" value="REGISTER" name="data[submit]">
                <br/>
            </form>
        </div>
        <div class="col-lg-2" id="ad">
            <div>SHOP NOW:</div>
            <br/>
            <a href="productProfile.php" id="item-1"><img src="images/item-1.jpg" class="ad" alt:"Green-Polariod"></a>
            <a href='productProfile.php?product_id=99'><img src="images/item-2.jpg" class="ad" alt:"smart-Watch"></a>
            <a href='productProfile.php?product_id=96'><img src="images/item-3.jpg" class="ad" alt:"GoPro-on-legs"></a>
            <a href='productProfile.php?product_id=100'><img src="images/item-4.jpg" class="ad" alt:"GoPro"></a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>