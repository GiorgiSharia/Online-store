<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns:alt="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/forms.css">
    <title>eShop</title>
</head>

<body>
<div id="toHide">
    <nav>
        <div>
            <ul id="navBar">
                <li class="navButton"><a href="homepage.php">Home</a></li>
                <li class="navButton"><a href="product.php">Products</a></li>
                <li class="navButton"><a href="about.php">About</a></li>
                <li>
                    <div class="col-lg-6"  id="search">
                        <div class="input-group well-align" >
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                    <span id="title">Departments</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" id="drop">
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">House</a></li>
                                    <li><a href="#">Footwear</a></li>
                                </ul>
                            </div>
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                    <button class="btn" type="button"><i class="glyphicon glyphicon-search"></i> Search</button>
                                </span>
                        </div>
                    </div>
                </li>
                <li class="navButton toRight"><a href="contact.html">Contact</a></li>
                <?php if($_SESSION['isLoggedIn']){ ?>
                        <li class="navButton toRight" id="user"><a href="/Online-store/logout.php"><i class="fa fa-user"></i> Sign Out</a></li>
                        <li class="navButton toRight"><a href="profile.php">My Profile</a></li>
                <?php }else{ ?>
                        <li class="navButton toRight" id="user"><a href="userForm.php"><i class="fa fa-user"></i> Log in | Register</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>
<h2 class="header">Change User Password</h2>
<hr>
<div class="row">
    <div class="col-lg-4 header" id="login">
        <?php
        if (isset($_SESSION['error_message'])) {
            echo $_SESSION['error_message'];
        }
        ?>
        <form action="/Online-store/application/change_user_password.php" method="POST" id="changePswForm">
            <label for="currPassword">Current Password:</label>
            <input id="currPassword" placeholder="Current Password" class="form-control" type="password" name="logMail" required>
            <br/>
            <label for="newPassword">New Password:</label>
            <input id="newPassword" placeholder="New Password" class="form-control" type="password" name="newPassword" required>
            <br/>
            <label for="newPassword2">Repeat New Password:</label>
            <input id="newPassword2" placeholder="Repeat New Password" class="form-control" type="password" name="newPassword2" required>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>