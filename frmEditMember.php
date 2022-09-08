<?php
  include("head.php");
  include("config.inc.php");
  $recive_id = $_GET['get_id'];
  //echo $recive_id;

$SQL = "select * from tbl_65309010033 where id=$recive_id";
$objQuery = mysqli_query($connection, $SQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)
?>
    <style>
        *{
            font-family: 'Kanit', sans-serif;
            
            
        }
        i.IO{
            margin-right: 20px;
            /* font-size: 25px; */
          }
        img.IO{
          /* width: 1280px; */
          /* height: 720px; */
          width:100%;
          height: 100%;
        }
        
    </style>
<body>
<?php
  include("header.php")
?>
    <main>
        <div class="container ">
            <div class="card">
                <div class="card-header bg-danger bg-gradient text-light">
                ฟอร์มแก้ไขข้อมูลสมาชิก
                </div>
        <div div class="card-body">
            <form name ="form1" action="insert.php" method="post">
                <div class="row">
                    <div class="col-md-2">
                    <label for="exampleFormControlInput1" class="form-label" >คำนำหน้าชื่อ</label>
                    <select name="txt_firstname" id="txt_firstname" class="form-select">
                        <option value="<?php echo $objResult['Firstname']; ?>"><?php echo $objResult['Firstname']; ?></option>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                    </select></div>
                    
                    <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label" >ชื่อ</label>
                    <input  class="form-control" type="text" name="txt_name" id="txt_name"placeholder="<?php echo $objResult['Name']; ?>"></div>
                    <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label" >นามสกุล</label>
                    <input  class="form-control" type="text" name="txt_lastname" id="txt_lastname"placeholder="<?php echo $objResult['LastName']; ?>"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"><br>
                    <label for="exampleFormControlInput1" class="form-label" >เพศ</label>
                    <div>

                    <?php
                        if ($objResult['Sex']=='ชาย') {
                    ?>
                    <input  class="form-check-input" type="radio" name="txt_sex" id="txt_sex" value="ชาย" checked="checked">ชาย
                    <input  class="form-check-input" type="radio" name="txt_sex" id="txt_sex" value = "หญิง">หญิง
                    <?php
                        }
                        else {
                    ?>
                    <input  class="form-check-input" type="radio" name="txt_sex" id="txt_sex" value="ชาย">ชาย
                    <input  class="form-check-input" type="radio" name="txt_sex" id="txt_sex" value = "หญิง" checked="checked">หญิง
                    <?php
                        }
                    ?>
                </div>
                </div>

                    <div class="col-md-3"><br>
                    <label for="exampleFormControlInput1" class="form-label" >วัน/เดือน/ปี</label>
                    <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                    placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th"></div>
                    <div class="col-md-7"><br>
                    <label for="exampleFormControlInput1" class="form-label" >ที่อยู่</label>
                    <textarea class="form-control" type="text" name="txt_address" id="txt_address"placeholder="<?php echo $objResult['Address']; ?>"></textarea></div>

                    <div class="col-md-6"><br><label for="exampleFormControlInput1" class="form-label" >เบอร์โทร</label>
                    <input  class="form-control" type="number" name="txt_number" id="txt_number"placeholder="<?php echo $objResult['Telephone']; ?>"></div>
                    <div class="col-md-6"><br><label for="exampleFormControlInput1" class="form-label" >อีเมล์</label>
                    <input  class="form-control" type="email" name="txt_email" id="txt_email"placeholder="<?php echo $objResult['Email']; ?>"></div>
                    
                    <center>
                    <br>
                    <button class="btn btn-outline-success" type="submit"> <i class="IO"><i class="bi bi-check-square"></i></i>บันทึก</button>&ensp;
                    <button class="btn btn-outline-danger" type="reset"> <i class="IO"><i class="bi bi-x-square"></i></i>ยกเลิก</button>
                    </center>
                    
                </div>

            </form>
            
        </div>
        </div>
    </div>

    </main>
    <?php include "footer.php"; ?>
</body>
</html>