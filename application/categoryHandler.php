<?php
require_once ('application/database/DatabaseConnection.php');

class Filter {

    public function getProducts()
    {

        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        // get product id from session variable
        $productCategory = $_GET["category"];

        $statement = $pdo->prepare("SELECT id, title, category, seller, description, price, shipping_price, product_picture, in_stock FROM `products` WHERE category = :category LIMIT 1");
        $statement->bindParam(':id', $productCategory);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the id
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find products';
            header('Location: /Online-store/Homepage.php');
            return [];
        }

        $products = $result[0];

        return $products;
    }
}
$product = new Filter();
$productData = $product->getProducts();