<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns:alt="http://www.w3.org/1999/xhtml">
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
<h2 class="header">Add Product</h2>
<hr>
<div class="row">
    <div class="col-lg-4 header">
        <?php
        if (isset($_SESSION['error_message'])) {
            echo $_SESSION['error_message'];
        }
        ?>
        <form action="application/add_product.php" method="POST" id="addProduct" enctype="multipart/form-data">
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
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>
</body>