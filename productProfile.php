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
    <!-- no worries just favicon (chrome doesnt render without encoding if not attached to webserver)-->
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAOgKAADoCgAAAAAA
AAAAAAAAf/8RAH//hwB//3wAf/8HAH//AAAAAAAAAAAAAAAAAAB//wAAf/8uAH//nAB//1YAf/8A
AH//AAAAAAAAAAAAAH//PwB//7EAf/+oAH//TgB//0cAf/9HAH//RgB//0YAf/9DAH//agB//7YA
f/9QAH//AAB//wAAAAAAAAAAAAB//3EAf/+tAH//rAB//6gAf/+pAH//qQB//6kAf/+qAH//qgB/
/6oAf//EAH//fgB+/wAAf/8AAAAAAAAAAAAAf/8CAH//BAB//wQAf/8EAH//BAB//wQAf/8EAH//
BAB//wMAf/8EAH//cgB//6AAf/8CAH//AAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//AACA/wAAf/8C
AH//BwB//w4Af/8ZAH//cwB//7sAf/82AH//AAB//wAAAAAAAAAAAAB//x8Af/9eAH//cgB//4QA
f/+TAH//owB//6wAf/+4AH//vAB//98Af/9BAH//AAB//wAAAAAAAAAAAAAAAAAAf/92AH//tgB/
/5YAf/+GAH//dAB//3EAf/9QAH//YQB//zEAf/+qAH//ZQB//wAAf/8AAAAAAAAAAAAAAAAAAH//
jgB//38Af/9iAH//WgB//1oAf/9jAH//UgB//2wAf/9KAH//qgB//7IAf/8IAH//AAAAAAAAAAAA
AAAAAAB//5gAf/9UAH//SAB//z4Af/8/AH//SQB//zQAf/9SAH//LAB//2sAf//GAH//NQB//wAA
AAAAAAAAAAAAAAAAf/+tAH//bAB//2wAf/9jAH//ZAB//2wAf/9cAH//dAB//1UAf/94AH//tAB/
/34Af/8AAH//AAAAAAAAAAAAAH//pAB//zoAf/9DAH//NwB//zYAf/9AAH//KQB//0gAf/8fAH//
SQB//0sAf/+4AH//EwB//wAAAAAAAAAAAAB//7YAf/+eAH//oQB//54Af/+cAH//nwB//5QAf/+g
AH//jAB//54Af/+LAH//2wB//0oAf/8AAID/AAAAAAAAf/8VAH//HAB//yAAf/8jAH//JwB//ysA
f/8vAH//MwB//zgAf/88AH//PgB//4MAf/+UAH//AQB//wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//wAAf/8iAH//twB//yIAf/8AAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf/8AAH//AQB//5QAf/+LAH//NgB//xwAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//AAB//wAAf/85AH//sQB//80A
f//HD48AAAAPAAAADwAAAAcAAPAPAAAAHwAAAB8AAAAPAAAADwAAAA8AAAAHAAAABwAAAAMAAP/j
AAD/4AAA//AAAA==" rel="icon" type="image/x-icon" />
    <!-- Favicon is DONE-->
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
            <p style="color:green">In Stock</p>
        <?php }else{ ?>
            <p style="color:red">Out of Stock</p>
        <?php } ?>
        <p id="description"><?php echo($productData['description']); ?>
            <br/>
        </p>
        <?php if($productData['in_stock'] >= 1){ ?>
            <a href="pay.php?product_id=<? echo($productData['id']); ?>"><button id="buy" class="btn">Buy Now</button></a>
        <?php } else { ?>
            <h3>This item is currently unavailable</h3>
        <?php }?>
        <br> <br> <br>
        <?php if($userData['is_admin']==1){ ?>
            <button class="btn buttn"><a href='editProduct.php?product_id=<?php echo($productData['id']);?>'>Edit Product</a></button>
        <?php } ?>
    </div>
</div>
</body>
</html>