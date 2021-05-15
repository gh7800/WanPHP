<?php
$servername = "localhost";
$username = "root";
$password = "admin.";
$dbname = "myDB";
$table = "MyGuests";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "连接成功<br>";

    //设置PDO错误模式
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO MyGuests(firstname,lastname,email) 
    VALUE ('John','Doe','john@example.com')";

    $conn->exec($sql);

    echo "插入 success";

} catch (PDOException $exception) {
    echo $exception->getMessage();
}
