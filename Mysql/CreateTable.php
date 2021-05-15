<?php
$servername = "localhost";
$username = "root";
$password = "admin.";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    //设置PDO错误模式
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    firstname VARCHAR (30) NOT NULL,
    lastname VARCHAR (30) NOT NULL ,
    email VARCHAR(50),
    reg_date TIMESTAMP 
)";

    $conn->exec($sql);
    echo "数据表 MyGuests 创建成功";
} catch (PDOException $exception) {
    echo $exception->getMessage();
}







