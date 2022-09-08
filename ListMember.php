<!DOCTYPE html>

<?php
include("head.php");
?>

<body>

<?php
include("header.php");
include("config.inc.php");

$SQL = "select * from tbl_65309010033";
$objQuery = mysqli_query($connection, $SQL);
?>

<main>
    <h1>รายชื่อสมาชิก</h1>
</main>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">คำนำหน้า</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">นามสกุล</th>
            <th scope="col">เพศ</th>
            <th scope="col">วันเกิด</th>
            <th scope="col">ที่อยู่</th>
            <th scope="col">เบอร์โทร</th>
            <th scope="col">อีเมล</th>
            <th scope="col">แก้ไข</th>
            <th scope="col">ลบ</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <th scope="row"><?php echo $objResult['ID']; ?></th>
            <td><?php echo $objResult['Firstname']; ?></td>
            <td><?php echo $objResult['Name']; ?></td>
            <td><?php echo $objResult['LastName']; ?></td>
            <td><?php echo $objResult['Sex']; ?></td>
            <td><?php echo $objResult['Birthdate']; ?></td>
            <td><?php echo $objResult['Address']; ?></td>
            <td><?php echo $objResult['Telephone']; ?></td>
            <td><?php echo $objResult['Email']; ?></td>
            <td><a href="frmEditMember.php?get_id=<?php echo $objResult['ID']; ?>"class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="delMember.php?get_id=<?php echo $objResult['ID']; ?>" class="btn btn-danger"><i class="bi bi-archive"></i></a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

</body>