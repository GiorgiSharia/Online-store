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
        <img src="images/offer.jpg" alt="Image Not Found" class="slideshow"> 
        <img src="images/2.jpg" alt="Image Not Found" class="slideshow">
        <img src="images/3.jpg" alt="Image Not Found" class="slideshow">
    </div>
    <div id="sideMenu">
        <ul class="nav nav-stacked">
            <li class="sidebar"><a id="electronics">Electronics</a>
                <ul id="electronics_sub" class="sub">
                    <li><a>Cameras</a></li>
                    <li><a>Computers</a></li>
                    <li><a>Tablets</a></li>
                    <li><a>Phones</a></li>
                </ul>
            </li>
            <li class="sidebar"><a id="clothing">Clothing</a>
                <ul id="clothing_sub" class="sub">
                    <li class="subElement"><a>Women</a></li>
                    <li><a>Men</a></li>
                    <li><a>Kids</a></li>
                </ul>
            </li>
            <li class="sidebar"><a id="house">House</a>
                <ul id="house_sub" class="sub">
                    <li><a>Garden</a></li>
                    <li><a>Kitchen</a></li>
                    <li><a>Bathroom</a></li>
                    <li><a>Pool</a></li>
                </ul>
            </li>
            <li class="sidebar"><a id="shoes">Footwear</a>
                <ul id="shoes_sub" class="sub">
                    <li><a>Women</a></li>
                    <li><a>Men</a></li>
                    <li><a>Children</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <footer id="footer">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <h2 id="contact_title"> Contact Details:</h2>
                <ul>
                    <li style="list-style:none">  <i class="material-icons">domain</i> Akadeemia tee 11,
                        Tallinn, Estonia</li> 
                    <li class="fa fa-envelope-o" style="font-size:20px"> info@team3.com</li>
                    
                    <li class="fa fa-mobile" style="font-size:20px">  + 372 599 22 22 22</li>   
                </ul>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <h2>About Us</h2>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
        </div>
    </footer>    
</body>

</html>