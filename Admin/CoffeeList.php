<?php 
require "../Config/Config.php";

 
if (isset($_POST["delete"]) && isset($_POST["selected_id"])) {
 foreach($_POST["selected_id"] as $ids) {
  $delete = "DELETE  FROM product WHERE product.id = $ids";
  mysqli_query($koneksi, $delete);
  break;
       }
}



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
    <form action="" method="POST">
    <div class="container">
         <div class="titleu">
        <h1>List Produk</h1>
        <h2>Kabat<span>Coffee</span></h2>
    </div> 
    
    <div class="btn">
    <button class="hapus" name="delete">Hapus</button>
     <button class="tambah" onclick="location.href = 'InputForm.php';">Tambah</button>
    </div>

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
                        <th>Select</th>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Edit</th>
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
                            text-align: center;
                            padding: 2vh;
                            background: rgba(0, 0, 0, 0.19);
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(7.7px);
-webkit-backdrop-filter: blur(7.7px);
                        }
                        
                    </style>
                    <tr>
                        <td><input type="checkbox" name="selected_id[]" value="<?= $data['id'] ?>"></td>
                        <td><?= $no ?></td>
                        <td><?= $data['product_name']; ?></td>
                        <td>Rp.<?= $data['price']; ?></td>
                        <td><?= $data['category_name']; ?></td>
                        <td><button class="edit">Edit</button></td>
                    </tr>
                    <?php 
                       $no ++;
                    }
                     
                    ?>
                    </div>
                </table>
                <?php } 
               ?>
                </form> 

</body>
</html>
