<?php 
    require_once "../Config/Config.php";
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
              echo "<img src='$destinationPath' alt='gagal' style='max-width: 400px;'>";
        ?>
    </h1>
    </div>
</div>
</body>
</html>