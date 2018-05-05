<?php
    session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/css1.css">
<link rel="stylesheet" href="css/style_about.css">
<title>eShop</title>
<script src="js/script.js"></script>
</head>

<body >
    <div id="toHide">
        <nav>
            <div>
                <ul id="navBar">
                    <li class="navButton"><a href="homepage.php">Home</a></li>
                    <li class="navButton dropdown"><a class="dropdown-toggle" href="product.php" data-toggle="dropdown">Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="product.php">All</a></li>
                            <li><a href='product.php?category=Phones'>Phones</a></li>
                            <li><a href='product.php?category=Cameras'>Cameras</a></li>
                            <li><a href="product.php?category=SmartWatches">Smart Watches</a></li>
                            <li><a href="product.php?category=Accessories">Accessories</a></li>
                        </ul>
                    </li>
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
                    <li class="navButton toRight"><a href="contact.php">Contact</a></li>
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
    <div>
    <h2 style="margin-left:550px">About Us </h2>

    <div class="project"> 
      <h3><b>Task: </b> E-commerce Website</h3>
    <h4>The Objective of this project is to develop an online shopping store for selling/ buying
        products.</h4>
        <a href="https://drive.google.com/file/d/1NFRJY-lK-lK-7LyEtQCgoeoQBIROrSPK/view"> <p>Task Details</p></a>
</div>
<br/>
  <h4 style="text-align: center">Group members are:</h4>
  <br/>
  <ul class="unordered row">
    <li class="col-lg-3">
        <b>Giorgi Sharia</b>
        <p>Git Expert</p>
        <br/>
        <img  src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/733845_688012414556741_1073234379_n.jpg?_nc_cat=0&oh=70603350a41c1cd60d4adf1d8135d914&oe=5B903BF0" alt="pic"id ="collegue">
    </li>
    <li class="col-lg-3">
        <b>Giorgi Kutateladze</b>
        <p>Backend Developer</p>
        <br/>
        <img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.15752-9/31530939_1908529332505153_1364403374979547136_n.jpg?_nc_cat=0&oh=366e52f25ba9b301814b30bc6e8e7400&oe=5B5031A0" alt="pic"id ="collegue">
    </li>
    <li class="col-lg-3">
        <b>Sophio Japharidze</b>
        <p>Full Stack Developer</p>
        <br/>
        <img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/10584003_837217366303632_2177816116487833929_n.jpg?_nc_cat=0&oh=4c8ee816051b6a23ffdddf38ab0d6292&oe=5B9C5D3C" alt="pic"id ="collegue">
    </li>
    <li class="col-lg-3">
        <b>Lekso Migriauli</b>
        <p>Lead Designer</p>
        <br/>
        <img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.15752-9/31906790_1102285059911929_3088710376410316800_n.jpg?_nc_cat=0&oh=4a3ef62294fffacfa80a305ea3250beb&oe=5B54046A" alt="pic"id ="collegue">
    </li>
  </ul>
  <!--
<div style="margin-left:30px">
<h3 style="margin-left:550px; color: #061050;">The Team </h3>
<div>
<img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/733845_688012414556741_1073234379_n.jpg?_nc_cat=0&oh=70603350a41c1cd60d4adf1d8135d914&oe=5B903BF0" alt="pic"id ="collegue">

<span><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.15752-9/31530939_1908529332505153_1364403374979547136_n.jpg?_nc_cat=0&oh=366e52f25ba9b301814b30bc6e8e7400&oe=5B5031A0" alt="pic"id ="collegue">
</span>
<span>
<img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/10584003_837217366303632_2177816116487833929_n.jpg?_nc_cat=0&oh=4c8ee816051b6a23ffdddf38ab0d6292&oe=5B9C5D3C" alt="pic"id ="collegue">    
</span>
<span>
<img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.15752-9/31906790_1102285059911929_3088710376410316800_n.jpg?_nc_cat=0&oh=4a3ef62294fffacfa80a305ea3250beb&oe=5B54046A" alt="pic"id ="collegue">
</span>
<b>Giorgi Sharia</b>
<br/>
<h9>Git Expert</h9>

<b>Giorgi Kutateladze</b>-->
</div>
</body>
</html>