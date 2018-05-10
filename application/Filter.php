<?php
require_once ('application/database/DatabaseConnection.php');

class Filter {

    public function getProducts()
    {

        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        $productCategory=$_GET["category"];

        if($productCategory == "Phones" || $productCategory == "Cameras" || $productCategory == "SmartWatches" || $productCategory == "Accessories"){
            $statement = $pdo->prepare("SELECT * FROM `products` WHERE category=:category");
            $statement->bindParam(':category', $productCategory);
            $statement->execute();
        }

        else{
        $statement = $pdo->prepare("SELECT * FROM `products`");
        $statement->execute();
        }
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no product matching category
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find products';
            header('Location: /Online-store/Homepage.php');
            return [];
        }

        $allProducts=$result;

        return $allProducts;
    }
}
$products = new Filter();
$allProducts = $products->getProducts();