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

<div id="includeContent"></div>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 header">
        <h2 id="headerForReg">Edit your profile</h2>
        <hr>
        <form class="row" id="updateProduct" action="application/productUpdate.php?product_id=<?php echo($productData['id']);?>" method="POST" enctype="multipart/form-data">
            <div class="col-lg-6">
                <p><?php echo("ID: "); echo($productData['id']); ?></p>
                <br>
                <label for="photo">Photo:</label>
                <img id="photo" name="data[photo]" src="uploads/<?php echo($productData['product_picture']); ?>" alt="No picture found">
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
            <button class="buttn" ><a href='removeProduct.php?product_id=<?= $productData['id'];?>'><i class="fa fa-trash"></i> Remove Product</a></button>
            <br/>
        </form>
    </div>
    <div class="col-lg-3"></div>
</div>