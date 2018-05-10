<?php
session_start();
include 'validator.php';
require_once ("database/DatabaseConnection.php");
    /**
     * This is the function that handles payment validation
     */

function pay() {
    $postedData = $_POST['data'];
    $productID = $_GET['product_id'];
    $userID = $_SESSION['userID'];
    $year = $postedData['expire_year'];
    $month = $postedData['expire_month'];
    $cardNumber = $postedData['cardNumber'];
    $ccv = $postedData['ccv'];
    $cardHolder = $postedData['cardHolder'];


    if(checkCardNumber($cardNumber) == false || checkCardCVV($ccv) == false){
        echo nl2br("Your card number/ccv is not correct");
        echo nl2br("\n<a href='../Homepage.php'>Return to homepage</a>");
        die();
    }

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    $params = [
        ':cardHolder' => $cardHolder,
        ':userID' => $userID,
        ':productID' => $productID,
        ':cardNumber' => $cardNumber,
        ':expireMonth' => $month, 
        ':expireYear' => $year,
        ':ccv' => $ccv,
    ];
    try {

        $statement = $pdo->prepare("SELECT id, title, category, seller, description, price, shipping_price, product_picture, in_stock FROM `products` WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $productID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no product matching the id
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find product';
            header('Location: /Online-store/Homepage.php');
            return [];
        }

        $productData = $result[0];

        if($productData['in_stock'] > 0){
            $statement = $pdo->prepare(
                "INSERT INTO `orders` (`userID`, `productID`, `cardHolder`, `cardNumber`, `expireMonth`, `expireYear`, `ccv`) 
                          VALUES (:userID, :productID, :cardHolder, :cardNumber, :expireMonth, :expireYear, :ccv)"
            );
            $statement->execute($params);
            //if product was purchased, one less is left in stock
            $newInStock = $productData['in_stock'] - 1;
            $stmnt = $pdo->prepare("UPDATE `products` SET in_stock = :in_stock WHERE id = :id");
            $stmnt->bindParam(':id', $productID);
            $stmnt->bindParam(':in_stock', $newInStock);
            $stmnt->execute();
            header('Location: /Online-store/profile.php');
        } else {
            $_SESSION['error_message'] = 'Product is out of stock';
            echo nl2br("\nProduct is out of stock!");
            echo nl2br("\n<a href='../Homepage.php'>Return to homepage</a>");
        }



    } catch (PDOException $e) {
        var_dump($e->getMessage());
        die();
    }

   
}
pay();
   