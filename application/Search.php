<?php
require_once ('database/DatabaseConnection.php');

class Search {

    public function searchProducts()
    {

        // create PDO connection object
        $dbConn = new DatabaseConnection();
        $pdo = $dbConn->getConnection();

        $info=$_POST["data"];
        $keyword=$info['query'];
    
        $statement = $pdo->prepare("SELECT * FROM `products` WHERE (title LIKE '%".$keyword."%')");
        $statement->execute();
        
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // no user matching the id
        if (empty($result)) {
            $_SESSION['error_message'] = 'Couldnt find products';
            header('Location: /Online-store/Homepage.php');
            return [];
        }
        

        $matchProducts=$result;

        return $matchProducts;
    }
}
$match = new Search();
$matchProducts = $match->searchProducts();
foreach($matchProducts as $match){
    echo $match['title'];
}