<?php

function validasiData($data){

    foreach($data as $index => $value){
        $value = trim($value);
        if($value === '' || $value === 0 || $value === null || $value === false){
            return $index;
        }
    }
    return 0;
}

function inputKopi($data, $koneksi){
    $name = $data['nama'];
    $keterangan = $data['keterangan'];
    $price = $data['price'];
    $fileName = $data['image'];
    $category = $data['kategori'];

    $sql = "INSERT INTO product (product_name, deskripsi, img, price, id_category) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if($stmt === false) 
    {
        return "failed";
       
    }

    mysqli_stmt_bind_param($stmt, 'sssii',$name,$keterangan, $fileName, $price, $category);
    $result = mysqli_stmt_execute($stmt);

    if(!$result)
        return false;
    
    mysqli_stmt_close($stmt);
    return true;  
}

function viewKopi($koneksi){
    $sqli = "SELECT product.id, product_name, deskripsi, img, price, id_category, category_name FROM product JOIN category ON product.id_category = category.id";

    $stmt = mysqli_query($koneksi, $sqli);

    if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false; 
}




?>