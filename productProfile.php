<?php
    session_start();
    require_once ('application/models/Product.php');
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
<link rel="stylesheet" href="css/prodProfile.css">
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
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-4">
        <img src="uploads/<?php echo($productData['product_picture']); ?>" alt="No picture found">
    </div>
    <div class="col-lg-4">
        <h2><?php echo($productData['title']); ?></h2>
        <p>Price: <span id="price">€ <?php echo($productData['price']); ?></span></p>
        <p>Shipping Price: <span id="price">€ <?php echo($productData['shipping_price']); ?></span></p>
        <p id="stock">In Stock</p>
        <p id="description"><?php echo($productData['description']); ?>
            <br/>
        </p>
        <button id="buy" class="btn">Buy Now</button>
    </div>
</div>

</body>
</html>