<?php
include 'validator.php';
require_once ('database/DatabaseConnection.php');

class Search {

    public function searchProducts()
    {

        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();   

        $keyword = $_POST["query"];
        $keyword= trimSpecialChars($keyword);

        $statement = $pdo->prepare("SELECT * FROM `products` WHERE title LIKE '%".$keyword."%'");
        $statement->execute();
        
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        

        // no user matching the keyword
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find products';
            return [];
        }
        
  
        $matchProducts=$result;

        return $matchProducts;
    }
}
$match = new Search();
$matchProducts = $match->searchProducts();


