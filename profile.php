<?php
require_once ('application/database/DatabaseConnection.php');
require_once ('protected_access_check.php');
require_once ('application/models/User.php');
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
<link rel="stylesheet" href="css/profile_style.css"
<script src="js/script.js"></script>
</head>

<body>
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
                    <li class="navButton toRight" id="user"><a href="/Online-store/logout.php"><i class="fa fa-user"></i> Sign Out</a></li>
                    <li class="navButton toRight"><a href="">My Profile</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">  
        <div class="col-lg-4">
            <img src="https://image.flaticon.com/sprites/new_packs/145977-user-avatars-compilation.png">
        </div>      
        <div class="col-lg-2">
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
        <div class="col-lg-2">
            <br/>
            <button class="btn buttn"><a href="editProfile.php">Edit Profile</a></button>
            <br/>
            <button class="btn buttn"><a href="changePSW.php">Change Password</a></button>
            <br/>
            <?php if($userData['is_admin']==1){ ?>
                <button class="btn buttn"><a href="addProduct.php">Add Product</a></button>
                <br>
            <?php }?>
            <button class="btn buttn"><a href="">Order History</a></button>
        </div>
        <div class="col-lg-4">
            <img src="https://image.flaticon.com/sprites/new_packs/145977-user-avatars-compilation.png">
        </div>
    </div>
</body>

</html>