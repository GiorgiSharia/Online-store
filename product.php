<?php
    session_start();
    require_once("application/Filter.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/css1.css">
</head>
<div id="includeContent"></div>
<!--<div id="sideMenu">
    <ul class="nav nav-stacked">
        <li class="sidebar"><a href="product.php">All</a></li>
        <li class="sidebar"><a href='product.php?category=Phones'>Phones</a></li>
        <li class="sidebar"><a href='product.php?category=Cameras'>Cameras</a></li>
        <li class="sidebar"><a href="product.php?category=SmartWatches">Smart Watches</a></li>
        <li class="sidebar"><a href="product.php?category=Accessories">Accessories</a></li>
    </ul>
</div>-->
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <?php foreach($allProducts as $products) { ?>
        <a href='productProfile.php?product_id=<?= $products['id'] ?>'>
            <p id="title_text"><b><?= $products['title'] ?><b></p>
            <img src="uploads\<?= $products['product_picture'] ?>" style="width: 300px; height: 300px;">
            <p id="price_text">Price: <b>€ <?= $products['price'] ?><b></p>
            <hr>
        </a>
        <?php } ?></div>
    <div class="col-lg-4"></div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>
</html>