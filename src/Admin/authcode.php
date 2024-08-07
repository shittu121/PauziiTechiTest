<?php
include '../dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_path = '';

    // Check if an image file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Define the upload directory
        $upload_dir = 'uploads/';
        
        // Get the uploaded file's name and create a unique file name
        $file_name = basename($_FILES['image']['name']);
        $unique_name = uniqid() . '-' . $file_name;

        // Define the full path to save the image
        $upload_file = $upload_dir . $unique_name;

        // Move the uploaded file to the designated directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_file)) {
            $image_path = $upload_file;
        } else {
            echo "Error uploading the image.";
            exit;
        }
    }

    // Insert product details into the database
    $query = "INSERT INTO products (name, title, description, price, image_path) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $name, $title, $description, $price, $image_path);

    if ($stmt->execute()) {
        echo "Product added successfully.";
    } else {
        echo "Error adding product.";
    }

    $stmt->close();
    $conn->close();
}
?>
