<?php
session_start();
require_once ("database/DatabaseConnection.php");

/**
 * This is the function that handles product addition
 */
function addProduct() {
    $postedData = $_POST['data'];
    $title = $postedData['title'];
    $seller = $postedData['seller'];
    $category = $postedData['category'];
    $description = $postedData['description'];
    $price = $postedData['price'];
    $shipping_price = $postedData['shipping_price'];
    $in_stock = $postedData['in_stock'];

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    $params = [
        ':title' => $title,
        ':seller' => $seller,
        ':category' => $category,
        ':description' => $description,
        ':price' => $price,
        ':shipping_price' => $shipping_price,
        ':in_stock' => $in_stock,
    ];
    $uploadedImage = uploadImage();
    if ($uploadedImage === false) {
        $params['product_picture'] = null;
    } else {
        $params['product_picture'] = $uploadedImage;
    }

    try {
        $statement = $pdo->prepare(
            "INSERT INTO `products` (`title`, `category`, `seller`, `description`, `price`, `shipping_price`, `product_picture`, `in_stock`) 
                          VALUES (:title, :category, :seller, :description, :price, :shipping_price, :product_picture, :in_stock)"
        );

        $statement->execute($params);

        $_SESSION['success_message'] = 'Product was added successfully';
        header('Location: /Online-store/homepage.php');
        return;
    } catch (PDOException $e) {
        var_dump($e->getMessage());
        die();
    }
}

function uploadImage()
{
    // no file selected
    if(empty($_FILES["product_picture"]['name'])) {
        return '';
    }

    $target_dir = __DIR__ . "/../uploads/";
    $target_file =  basename($_FILES["product_picture"]["name"]);

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["product_picture"]["tmp_name"]);
    if($check === false) {
        $_SESSION['error_message'] = "Invalid image file.";
        return false;
    }

    // Check file size
    if ($_FILES["product_picture"]["size"] > 500000) {
        $_SESSION['error_message'] = "Sorry, your file is too large.";
        return false;
    }

    $allowedFileType = [
        "jpg",
        "png",
        "jpeg",
        "gif",
    ];

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Allow certain file formats
    if(!in_array($imageFileType, $allowedFileType)) {
        $_SESSION['error_message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        return false;
    }

    if (move_uploaded_file($_FILES["product_picture"]["tmp_name"], $target_dir . $target_file)) {
        return $target_file;
    } else {
        $_SESSION['error_message'] = "Sorry, there was an error uploading your file.";
        return false;
    }
}
unset($_SESSION['success_message']);
unset($_SESSION['error_message']);
// call to the update function
addProduct();