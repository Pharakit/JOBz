<?php
include("config.inc.php");
$recive_id = $_GET['get_id'];
$delSQL = "delete from tbl_65309010033 where id=$recive_id";
$objQuery = mysqli_query($connection, $delSQL);
if($objQuery){
    echo "ลบสำเร็จ";
}else{
    echo "ลบไม่สำเร็จ";    
}
?>