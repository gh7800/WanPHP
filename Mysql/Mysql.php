<?php
$servername = "localhost";
$username = "root";
$password = "admin.";

// 创建连接
//$conn = new mysqli($servername, $username, $password);

// 检测连接
//if ($conn->connect_error) {
//    die("连接失败: " . $conn->connect_error);
//}
//echo "连接成功<br>";

//$sql = "CREATE DATABASE myDB";
//if($conn->query($sql) == true){
//    echo "创建数据库成功";
//}else{
//    echo "error" . $conn->error;
//}
//
//$conn->close();

/**
 * 创建连接
 */
try {
    $conn = new PDO("mysql:host=$servername;",$username,$password);
    echo "连接成功";
}catch (PDOException $exception){
    echo $exception->getMessage();
}

/**
 * PDO创建数据库
 */
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);

    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDB";
    $conn->exec($sql);

    echo "数据库创建成功";

} catch (PDOException $exception) {
    echo $exception;
}

