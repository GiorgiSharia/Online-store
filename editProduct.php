<?php
require_once ('protected_access_check.php');
require_once ('application/models/User.php');
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
    <link rel="stylesheet" href="css/forms.css">
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
                <li class="navButton toRight" id="user"><a href="/Online-store/logout.php"><i class="fa fa-user"></i> Sign Out</a></li>
                <li class="navButton toRight"><a href="profile.php">My Profile</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="row">
    <div class="col-lg-3">
        <a href=""><img src="images/offer_1.jpg"></a>
    </div>
    <div class="col-lg-6 header">
        <h2 id="headerForReg">Edit your profile</h2>
        <hr>
        <form class="row" id="updateProduct" action="application/productUpdate.php" method="POST" enctype="multipart/form-data">
            <div class="col-lg-6">
                <p><?php echo("ID: "); echo($productData['id']); ?></p>
                <br>
                <label for="photo">Photo:</label>
                <img id="photo" src="uploads/<?php echo($productData['product_picture']); ?>" alt="No picture found">
                <br/>

                <label for="title">Title:</label>
                <input id="title" class="form-control"  type="text" name="data[title]" value="<?= $productData['title']; ?>" required>
                <br/>
                <label for="price">Price:</label>
                <input id="price" class="form-control"  type="text" name="data[price]" value="<?= $productData['price']; ?>" required>
                <br/>
                <label for="shipping_price">Shipping Price:</label>
                <input id="shipping_price" class="form-control"  type="text" name="data[shipping_price]" value="<?= $productData['shipping_price']; ?>" required>
                <br/>
            </div>
            <div class="col-lg-6">
                <label for="in_stock">In Stock:</label>
                <input id="in_stock" class="form-control"  type="text" name="data[in_stock]" value="<?= $productData['in_stock']; ?>" required>
                <br/>
                <label for="prodDesc">Description:</label>
                <textarea id="prodDesc" cols="40" rows="5"name="data[description]" required><?php echo($productData['description']); ?></textarea>
                <br/>
                <br>
                <label>Update Picture: </label>
                <input type="file" name="product_picture" id="prodPicture">
            </div>
            <input id="reg" class="buttn" type="submit" value="Submit Changes" name="data[submit]">
            <br> <br>
            <button class="buttn" ><a href='removeProduct.php?product_id=<?php echo($productData['id']);?>'><font color="red">Remove Product</a></font></button>
            <br/>
        </form>
    </div>
    <div class="col-lg-3">
        <a href=""><img src="images/offer_2.jpg"></a>
    </div>
</div>