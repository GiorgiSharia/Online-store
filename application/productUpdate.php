<?php
require_once ("database/DatabaseConnection.php");

include 'validator.php';

function updateProduct() {
    $postedData = $_POST['data'];

    //inputs validated
    $title = $postedData['title'];
    $price = $postedData['price'];
    $price = trimSpecialChars($price);
    $shipping_price = $postedData['shipping_price'];
    $shipping_price = trimSpecialChars($shipping_price);
    $in_stock = $postedData['in_stock'];
    $in_stock = trimSpecialChars($in_stock);
    $description = $postedData['description'];

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    $params = [
        ':title' => $title,
        ':price' => $price,
        ':shipping_price' => $shipping_price,
        ':in_stock' => $in_stock,
        ':description' => $description,
        ':id' => $_GET["product_id"],
    ];

    try {
        $statement = $pdo->prepare(
            "UPDATE `products` SET title = :title, price = :price, shipping_price = :shipping_price,
                                in_stock = :in_stock, description = :description
                                WHERE id = :id"
        );

        $statement->execute($params);

        $_SESSION['success_message'] = 'Product was updated successfully';
        header('Location: /Online-store/Homepage.php');
        return;
    } catch (PDOException $e) {
        var_dump($e->getMessage());
        die();
    }
}
unset($_SESSION['success_message']);
unset($_SESSION['error_message']);
// call to the update function
updateProduct();


