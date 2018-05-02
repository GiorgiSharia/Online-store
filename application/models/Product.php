<?php
require_once ('application/database/DatabaseConnection.php');

class Product {

    public function getProductProfile()
    {

        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        // get product id from session variable
        $productID = $_GET['product_id'];

        $statement = $pdo->prepare("SELECT id, title, category, seller, description, price, shipping_price, product_picture, in_stock FROM `products` WHERE id = :id LIMIT 1");
        $statement->bindParam(':id', $productID);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the id
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find product';
            header('Location: /Online-store/Homepage.php');
            return [];
        }

        $productData = $result[0];

        return $productData;
    }
}
$product = new Product();
$productData = $product->getProductProfile();