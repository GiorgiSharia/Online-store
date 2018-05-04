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
<title>eShop</title>
<script src="js/script.js"></script>
</head>

<body>
    <div>
        <nav>
            <div>
                <ul id="navBar">
                    <li class="navButton"><a href="homepage.php">Home</a></li>
                    <li class="navButton dropdown"><a class="dropdown-toggle" href="product.php" data-toggle="dropdown">Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Phones</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Smart Watches</a></li>
                            <li><a href="#">Accessories</a></li>
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
<div  id="content">
    <h2>Pay by card </h2>
    <img src="https://www.horusrc.com/media/wysiwyg/pay_by_cards.jpg" alt="cards" style="width:150px; height:25px;">
    <br/>
    <br/>
    <b> Card Holder </b><span style="margin-left: 20px;"><input type="text" id="card_holder"></span>
    <br/>
    <br/>
    <b> Card Number </b><span style="margin-left: 10px;"><input type="text" id="card_number"></span>
    <br/>
    <br/>
    <b>Expires </b>
    <span style="margin-left: 50px;">
    <select>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
    </select>
    <span> - </span>
    <select>
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
    <input type="text" id="sec_code" size="4">
    </span>
    <br/>
    <br/>
    <input type="submit" value="Process Transaction" style=" margin-left: 70px;">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>