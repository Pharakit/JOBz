<?php

$servername = "localhost"; //ip server
$username = "admin_db_member"; //username
$password = "123456"; //password
$dbname = "db_member65"; //ชื่อ database

//สร้าง connection
$connection = new mysqli($servername, $username, $password, $dbname);

//ทำให้รองรับ utf8
$connection -> set_charset("utf8");

//เช็คการเชื่อมต่อ
/*if ($connection -> connect_error) {
    die ("connection failed: " . $connection -> connect_error);
}
else {
    echo "Connection Successfully!";
}*/

?>