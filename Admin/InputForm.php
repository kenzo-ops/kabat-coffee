<?php

error_reporting(0);
ini_set('display_errors',0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Script/CSS/InputForm.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Questrial&display=swap"
        rel="stylesheet" />
    <link rel="Icon" type="image/x-icon" href="../Logo/KABAT.jpg">
    <title>ProductInput</title>
</head>

<body>
    <h1>Kabat<span>Coffee</span></h1>
    <h2>InputProduct</h2>
    <form action="ProductOutput.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <label for="">Product Name</label>
        <input type="text" name="name">
        <label for="">Description</label>
        <textarea name="desc" id=""></textarea>
        <label for="">Image</label>
        <input type="file" class="img" name="image">
        <label for="">Price</label>
        <input type="number" name="price">
        <label for="">ID of the Category</label>
        <input type="number" name="category">
        <input type="submit" value="Kirim" placeholder="Kirim" name="kirim">
    </form>
</body>

</html>