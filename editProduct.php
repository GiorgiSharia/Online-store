<?php
require_once ('protected_access_check.php');
require_once ('application/models/User.php');
require_once ('application/models/Product.php');

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa symobls -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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