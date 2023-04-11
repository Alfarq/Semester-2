<?php
    $host = 'localhost';
    $dbname = 'dbkoperasi';
    $username = 'root';
    $password = '';

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname" , $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOExeption $e){
        echo "KONEKSI GAGAL: " . $e->getMessege();
    }
?>