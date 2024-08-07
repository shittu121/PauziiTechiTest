<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include database connection details
include 'dbcon.php';

// Initialize error_message
$error_message = '';

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the product ID from the URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Debug: Check product ID
if ($product_id == 0) {
    die("Invalid product ID.");
}

if ($product_id > 0) {
    // Prepare and execute the query
    $query = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);

    if ($stmt === false) {
        // Error preparing the statement
        die("Failed to prepare the SQL statement: " . $conn->error);
    }

    $stmt->bind_param("i", $product_id);
    $stmt->execute();

    // Debug: Check query execution
    if (!$stmt->execute()) {
        die("Failed to execute the SQL statement: " . $stmt->error);
    }

    // Bind the result variables
    $stmt->bind_result($id, $name, $title, $description, $price, $image_path);

    // Fetch the data
    if ($stmt->fetch()) {
        // Product details found
        $name = htmlspecialchars($name);
        $title = htmlspecialchars($title);
        $description = htmlspecialchars($description);
        $price = htmlspecialchars($price);
        $image_path = htmlspecialchars($image_path);
    } else {
        // Product not found
        $name = $title = $description = $price = $image_path = null;
        $error_message = "Product not found.";
    }

    $stmt->close();
} else {
    $error_message = "Invalid product ID.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="flex">
    <?php if (isset($product_id) && empty($error_message)): ?>
        <div class="w-full h-full">
            <?php if (!empty($image_path)): ?>
                <img class="h-full w-full object-cover" src="Admin/<?= htmlspecialchars($image_path) ?>" alt="<?= htmlspecialchars($name) ?>">
            <?php endif; ?>
        </div>
        <div class="p-4">
            <h1 class="text-xl font-bold"><?= $name ?></h1>
            <h2 class="text-lg font-semibold"><?= $title ?></h2>
            <p class="text-gray-700"><?= $description ?></p>
            <p class="text-green-500 font-semibold">Price: $<?= $price ?></p>
        </div>
    <?php else: ?>
        <div class="p-4">
            <p class="text-red-500"><?= htmlspecialchars($error_message) ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
