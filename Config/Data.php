<?php
error_reporting(0);
ini_set('display_errors',0);
require_once "../Config/Config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

        echo "<script>alert('File Berhasil Di Upload');</script>";

        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        

        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = basename($_FILES['image']['name']);
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpeg'];
        
        if (in_array($fileType, $allowedTypes)) {
            $uploadDir = 'uploads/';
            $destinationPath = $uploadDir . basename($fileName);
            
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
    
    $data = [
    'nama' => $name,
    'keterangan' => $desc,
    'price' => $price,
    'kategori' => $category,
    'image' => $fileName,
    ];

$result = inputKopi($data, $koneksi);
}

?>