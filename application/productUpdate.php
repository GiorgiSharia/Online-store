<?php
require_once ("database/DatabaseConnection.php");

include 'validator.php';

function updateProduct() {
    $postedData = $_POST['data'];

    //inputs validated
    $title = $postedData['title'];
    $price = $postedData['price'];
    $prodPic = $postedData['photo'];
    $price = trimSpecialChars($price);
    $shipping_price = $postedData['shipping_price'];
    $shipping_price = trimSpecialChars($shipping_price);
    $in_stock = $postedData['in_stock'];
    $in_stock = trimSpecialChars($in_stock);
    $description = $postedData['description'];

    // create PDO connection object
    $dbConn = new DatabaseConnection();
    $pdo = $dbConn->getConnection();

    $uploadedImage = uploadImage();

    $params = [
        ':title' => $title,
        ':price' => $price,
        ':shipping_price' => $shipping_price,
        ':in_stock' => $in_stock,
        ':description' => $description,
        ':id' => $_GET["product_id"],
    ];



    try {
        if ($uploadedImage === false) {
            $statement = $pdo->prepare(
                "UPDATE `products` SET title = :title, price = :price, shipping_price = :shipping_price,
                                in_stock = :in_stock, description = :description
                                WHERE id = :id"
            );

        } else {
            $params['product_picture'] = $uploadedImage;
            $statement = $pdo->prepare(
                "UPDATE `products` SET title = :title, price = :price, shipping_price = :shipping_price,
                                in_stock = :in_stock, description = :description, product_picture = :product_picture
                                WHERE id = :id"
            );
        }

        $statement->execute($params);

        $_SESSION['success_message'] = 'Product was updated successfully';
        header('Location: /Online-store/Homepage.php');
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
        return false;
    } else {

        $target_dir = __DIR__ . "/../uploads/";
        $target_file = basename($_FILES["product_picture"]["name"]);

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["product_picture"]["tmp_name"]);
        if ($check === false) {
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

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Allow certain file formats
        if (!in_array($imageFileType, $allowedFileType)) {
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
}
unset($_SESSION['success_message']);
unset($_SESSION['error_message']);
// call to the update function
updateProduct();


