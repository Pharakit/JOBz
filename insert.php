<?php
  include("head.php")
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
</head>
<body>
<!-- Data -->
<nav style="background-color: white;" class="navbar navbar-expand-lg navbar-light ">
<nav class="navbar navbar-light ">
  <a class="navbar-brand" href="#">
  <img src="JOB.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Game
  </a>
</nav>
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="font-size: 15px;" class="nav-link active " aria-current="page" href="index.php">หน้าแรก</a>
        </li>
        
        <li class="nav-item">
          <a style="font-size: 15px;" class="nav-link " href="formregister.php" tabindex="-1" aria-disabled="true">สมัครสมาชิก</a>
        </li>
      </ul>
    
</nav>
<div class="container ">
            <div class="card">
                <div class="card-header bg-danger bg-gradient text-light">
                ข้อมูล
                </div>
        <div div class="card-body">
        <?php

        include("config.inc.php");

        isset($_POST[""]);
        $Firstname = $_POST["txt_firstname"];
        $Name = $_POST["txt_name"];
        $Lastname = $_POST["txt_lastname"];
        $Sex = $_POST["txt_sex"];
        $Date = $_POST["txt_birthdate"];
        $Address = $_POST["txt_address"];
        $Phone = $_POST["txt_number"];
        $Email = $_POST["txt_email"];
        
        //คำสั่งกำหนดค่าที่จะใส่ข้อมูลลงใน sql 
        $sql = "INSERT INTO tbl_65309010033 (ID, Firstname, Name, LastName, Sex, Birthdate, Address, Telephone, Email) VALUES ('', '$Firstname', '$Name', '$Lastname', '$Sex', '$Date', '$Address', '$Phone', '$Email')";

        //คำสั่งใส่ข้อมูลลงไปใน sql
      if (mysqli_query($connection, $sql)) {
      echo "<script>
      Swal.fire({
      icon: 'success',
      title: '<h3>บันทึกข้อมูลสำเร็จ</h3>',
      type: 'success',
      showConfirmButton: false,
      timer: 3000
  }).then(function() {
      window.location = 'formregister.php';
  });
  </script>";
  }
      else {
      echo "<script>
      Swal.fire({
      icon: 'error',
      title: '<h3>บันทึกข้อมูลไม่สำเร็จ</h3>',
      type: 'success',
      showConfirmButton: false,
      timer: 3000
  }).then(function() {
      window.location = 'formregister.php';
  });
  </script>";
  }
  $connection -> close();


        /* echo "ชื่อ-นามสกุล : ";
        echo $Firstname . "&nbsp;";
        echo $Name . "&nbsp;&nbsp;";
        echo $Lastname . "&ensp;&ensp;&ensp;&ensp;";
        echo "เพศ : ";
        echo $Sex . "&ensp;&ensp;&ensp;&ensp;";
        echo "วัน/เดือน/ปีเกิด : ";
        echo $Date . "&ensp;&ensp;&ensp;&ensp;<br><br>";
        echo "ที่อยู่ : ";
        echo $Address . "&ensp;&ensp;&ensp;&ensp;";
        echo "เบอร์โทรศัพท์ : ";
        echo $Phone . "&ensp;&ensp;&ensp;&ensp;";
        echo "อีเมล์ : ";
        echo $Email . "&ensp;"; */
        ?>
            
        </div>
        </div>
    </div>

<?php include "footer.php"; ?>
