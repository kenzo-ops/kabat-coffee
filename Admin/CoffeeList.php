<?php 
require "../Config/Config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListProduk</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Questrial&display=swap"
        rel="stylesheet" />
    <link rel="Icon" type="image/x-icon" href="../Logo/KABAT.jpg">
    <link rel="stylesheet" href="../Script/CSS/CoffeeList.css">
</head>
<body>
    <div class="container">
         <div class="titleu">
        <h1>List Produk</h1>
        <h2>Kabat<span>Coffee</span></h2>
    </div>

    <button class="tambah" onclick="location.href = 'InputForm.php';">Tambah</button>
    </div>
   
        
                <?php 
                    $kopi = viewKopi($koneksi);

                    if($kopi == 0) {
                        echo 'Data Kosong';
                    }
                    else {
                ?>
                <table>
                    <div class="gp">
                    <tr class = "title">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                    </tr>
                    <?php 
                    $no = 1; 
                    foreach($kopi as $data) {
                    ?>
                    <style>

                         td {
                            border-bottom: 1px solid white;
                            font-weight: lighter;
                            font-size: 2vh;
                            padding: 2vh;
                        }

                        th {
                            text-align: left;
                            padding: 2vh;
                            background: rgba(0, 0, 0, 0.19);
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(7.7px);
-webkit-backdrop-filter: blur(7.7px);
                        }
                        
                    </style>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data['product_name']; ?></td>
                        <td>Rp.<?= $data['price']; ?></td>
                        <td><?= $data['category_name']; ?></td>

                    </tr>
                    <?php 
                       $no ++;
                    }
                     
                    ?>
                    </div>
                </table>
                <?php } ?>
    
</body>
</html>