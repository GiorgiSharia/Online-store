<?php
    session_start();
    include ('application/models/Product.php');

    if($_SESSION['isLoggedIn']){
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        // get user id from session variable
        $userID = $_SESSION['userID'];

        $statement = $pdo->prepare("SELECT id, firstname, lastname, email, address, city, country, postal_code, telephone, is_admin FROM `users` WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $userID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $userData = $result[0];
    }

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

<div id="includeContent"></div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-4">
        <img src="uploads/<?php echo($productData['product_picture']); ?>" alt="No picture found">
    </div>
    <div class="col-lg-4">
        <h2><?php echo($productData['title']); ?></h2>
        <p>Price: <span id="price">€ <?php echo($productData['price']); ?></span></p>
        <p>Shipping Price: <span id="price">€ <?php echo($productData['shipping_price']); ?></span></p>
        <?php if($productData['in_stock'] > 0){ ?>
            <p>In Stock</p>
        <?php }else{ ?>
            <p>Out of Stock</p>
        <?php } ?>
        <p id="description"><?php echo($productData['description']); ?>
            <br/>
        </p>
        <a href="pay.php"><button id="buy" class="btn">Buy Now</button></a>
        <br> <br> <br>
        <?php if($userData['is_admin']==1){ ?>
            <button class="btn buttn"><a href='editProduct.php?product_id=<?php echo($productData['id']);?>'>Edit Product</a></button>
        <?php } ?>
    </div>
</div>
</body>
</html>