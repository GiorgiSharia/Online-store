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
<h2 class="header">Add Product</h2>
<hr>
<div class="row">
    <div class="col-lg-4 header" id="login">
        <?php
        if (isset($_SESSION['error_message'])) {
            echo $_SESSION['error_message'];
        }
        ?>
        <form action="/Online-store/application/add_product.php" method="POST" id="addProduct" enctype="multipart/form-data>
            <label for="prodTitle">Title:</label>
            <input id="prodTitle" class="form-control" type="text" name="data[title]" required>
            <br/>
            <label for="prodCategory">Category:</label>
            <br><br>
            <!--<input id="prodCategory" class="form-control" type="radio" name="prodCategory" required>-->
            <input id="prodCategory" type="radio" name="data[category]" value="Phones"> Phones<br>
            <input id="prodCategory" type="radio" name="data[category]" value="Cameras"> Cameras<br>
            <input id="prodCategory" type="radio" name="data[category]" value="SmartWatches"> Smart Watches<br>
            <input id="prodCategory" type="radio" name="data[category]" value="Accessories"> Accessories<br>
            <br/>
            <label for="prodSeller">Seller:</label>
            <input id="prodSeller" class="form-control" type="text" name="data[seller]" required>
            <br/>
            <label for="prodDesc">Description:</label> <br> <br>
            <textarea id="prodDesc" cols="40" rows="5"name="data[description]" required></textarea>
            <br/>
            <label for="prodPrice">Price:</label>
            <input id="prodPrice" class="form-control" type="text" name="data[price]" required>
            <br/>
            <label for="prodShipPrice">Shipping Price:</label>
            <input id="prodShipPrice" class="form-control" type="text" name="data[shipping_price]" required>
            <br/>
            <label>Product Picture: </label>
            <input type="file" name="product_picture" id="prodPicture">
            <br>
            <label for="prodInStock">Amount in stock:</label>
            <input id="prodInStock" class="form-control" type="text" name="data[in_stock]" required><br>
            <input class="buttn" type="submit" value="Add Product">
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