<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="authcode.php" method="post" enctype="multipart/form-data">
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" required>
    
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
    
        <label for="price">Price:</label>
        <input type="text" name="price" id="price" required>
    
        <label for="image">Upload Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
    
        <input type="submit" value="Upload Product">
    </form>
</body>
</html>