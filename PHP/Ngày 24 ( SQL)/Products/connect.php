<?php
// CREATE DATABASE dbname;
// vd : CREATE DATABASE abc3;
// tên CSDL là abc3

// XAMPP
$username = "root";
$password = "";
// máy chủ CSDL ( IP ) sử dụng 127.0.0.1 hay localhost => production : 192.118.1.11
$serverName = "127.0.0.1";
// tên CSDL ( tùy chọn )
$databaseName = "t3h.12.2020";

try {
    // $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $connection = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
    // set the PDO error mode to exception
    // đặt chế độ lỗi cho ngoại lệ khi kết nối PDO
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {

    echo $e->getMessage();

}