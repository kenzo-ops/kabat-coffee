<?php
error_reporting(0);
ini_set('display_errors',0);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

        echo "<script>alert('File Berhasil Di Upload');</script>";

        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        
        // Define allowed file types
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
        if (in_array($fileType, $allowedTypes)) {
            // Specify the target directory for uploads
            $uploadDir = 'uploads/';
            $destinationPath = $uploadDir . basename($fileName);
            
            // Move the uploaded file to the destination directory
            if (move_uploaded_file($fileTmpPath, $destinationPath)) {
            } else {
                echo "Error moving the uploaded file.";
            }

            
        } else {
            echo "Unsupported file type.";
        }
    } else {
        echo "Error uploading file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Questrial&display=swap"
        rel="stylesheet" />
    <link rel="Icon" type="image/x-icon" href="../Logo/KABAT.jpg">
    <link rel="stylesheet" href="../Script/CSS/ProductOutput.css">
    <title>Output</title>
</head>
<body>
    <h1>Kabat<span>Coffee</span></h1>
    <h2>Output Product</h2>

    <div class="output">
    <div class="container">
        <h2>Nama Produk :</h2>
    <h3>
        <?php 
            echo $name;
        ?>
    </h3>    
    </div>
    <div class="container">
    <h2>Deskripsi :</h2>
    <h3>
        <?php 
            echo $desc;
        ?>
    </h3>    
    </div>
    <div class="container">
    <h2>Harga :</h2>
    <h3>
        <?= $price; ?>
    </h3> 
    </div>
    <div class="container">
 <h2>Category :</h2>   
    <h3>
        <?php 
            echo $category;
        ?>
    </h3>    
    </div>
    <div class="container">
 <h2>Gambar Produk :</h2>
    <h1>
        <?php 
              echo "<img src='$destinationPath' alt='failed' style='max-width: 400px;'>";
        ?>
    </h1>
    </div>
    
   
    
   
   
    </div>
</body>
</html>