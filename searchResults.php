<?php
    session_start();
    require_once("C:\MAMP\htdocs\Online-store\application\Search.php");
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
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
    <?php if(empty($matchProducts)) {?>
        <h2 style="padding-left: 30px"><?php echo $_SESSION['error_message'] ?></h2>
    <?php }else{
             foreach($matchProducts as $match) { ?>
        <a href='productProfile.php?product_id=<?= $match['id'] ?>'>
            <p id="title_text"><b><?= $match['title'] ?><b></p>
            <img src="uploads\<?= $match['product_picture'] ?>" style="width: 300px; height: 300px;">
            <p id="price_text">Price: <b>€ <?= $match['price'] ?><b></p>
            <hr>
        </a>
        <?php } 
        }?></div>
    <div class="col-lg-4"></div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>