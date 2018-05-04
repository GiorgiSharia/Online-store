<?php
    session_start();
    require_once ('application/categoryHandler.php');
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    
      <link rel="stylesheet" href="css/css1.css">
    </head>

<body>
    <div id="toHide">
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
                        <div class="col-lg-6"  id="searchBox">
                            <div class="input-group" >
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                        <span id="title">Departments</span> 
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="drop">
                                        <li><a href="#">Computers</a></li>
                                        <li><a href="#">Cameras</a></li>
                                        <li><a href="#">Tablets</a></li>
                                        <li><a href="#">Phones</a></li>
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
                        <li class="navButton toRight"><a href="changePSW.php">My Profile</a></li>
                      <?php }else{ ?>
                        <li class="navButton toRight" id="user"><a href="userForm.php"><i class="fa fa-user"></i> Log in | Register</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
   <!-- <div id="sideMenu">
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
    </div>-->
    <a href='productProfile.php?product_id=90'><img src="images/FP032.jpg" style="width: 300px; height: 300px;"></a>
    <a href='productProfile.php?product_id=91'><img src="images/Apple-iPhoneX.jpg" style="width: 300px; height: 500px;"></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>