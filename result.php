<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ระบบวิเคราะห์ความเสี่ยงการเกิดโรคฟันผุ</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

  <!-- Header -->
  <header class="w3-display-container w3-content w3-center" style="max-width:1500px">
    <img class="w3-image" src="photo/gen.svg" alt="Me" width="1500" height="600">
  </header>

  <!-- Navbar on small screens -->
  <div class="navbar-collapse collapse">
    <div class="w3-bar w3-light-grey">
      <a href="index.php" class="w3-bar-item w3-button">หน้าแรก</a>
      <a href="question.php" class="w3-bar-item w3-button">การวิเคราะห์การเกิดโรคฟันผุ</a>
      <a href="general.php" class="w3-bar-item w3-button">ความรู้ทั่วไปเกี่ยวกับโรคฟันผุ</a>
    </div>
  </div>

  <!-- Page content -->
  <div class="w3-content w3-padding-large w3-margin-top" id="portfolio">
    <div style="text-align: center;">
      <h3 class="w3-center">ผลลัพธ์การวิเคราะห์</h3>

      <!-- Contact -->
      <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
      <?php
      $sql = "select risk from aathai where id = " . $_GET["id"];
      $qsql = mysqli_query($conn, $sql);
      $risk = mysqli_fetch_assoc($qsql);

      if ($risk['risk'] == 'เสี่ยงต่ำ') {
        echo "<h1 style='color:green;'>" . $risk['risk'] . "</h1>","<BR>";
        $t="คำแนะนำ";
        $t1="แนะนำให้เลือกรับประทานผักสด ผลไม้สด ช่วยกระตุ้นการหลั่งของน้ำลายในช่องปาก";
        $t2="แนะนำการใช้น้ำยาบ้วนปากร่วมด้วย เพื่อช่วยกำจัดแบคทีเรียที่ก่อให้เกิดกลิ่นปากหรือเหงือกอักเสบ";
        echo "<h3><u>$t</u></h3>","<BR>";
        echo "<h4><li>$t1</li></h4>","<BR>";
        echo "<h4><li>$t2</li></h4>","<BR>";
      } elseif ($risk['risk'] == 'เสี่ยงปานกลาง') {
        echo "<h1 style='color:#FFCC00;'>" . $risk['risk'] . "</h1>","<BR>";
        $b="คำแนะนำ";
        $b1="บริโภคอาหารให้เหมาะสมตามหลักโภชนาการ และลดการกินขนมกรุบกรอบ";
        $b2="ใช้ไหมขัดฟัน หรือ แปรงทำความสะอาดฟอกฟันร่วมด้วย เพื่อทำความสะอาดบริเวณซอกฟันหรือบริเวณที่การแปรงฟันเข้าไม่ถึง";
        echo "<h3><u>$b</u></h3>","<BR>";
        echo "<h4><li>$b1</li></h4>","<BR>";
        echo "<h4><li>$b2</li></h4>","<BR>";
      } else {
        echo "<h1 style='color:red;'>" . $risk['risk'] . "</h1>","<BR>";
        $h="คำแนะนำ";
        $h1="ควบคุมความถี่การกินขนมกรุบกรอบและเครื่องดื่มที่เสี่ยงต่อการเกิดฟันผุ";
        $h2="ควรพบทันตแพทย์เพื่อตรวจสุขภาพช่องปากทุกๆ 6 เดือน เป็นประจำ";
        $h3="แปรงฟันด้วยยาสีฟันผสมฟลูออไรด์ อย่างน้อยวันละ 2 ครั้ง แปรงนาน 2 นาที";
        echo "<h3><u>$h</u></h3>","<BR>";
        echo "<h4><li>$h1</li></h4>","<BR>";
        echo "<h4><li>$h2</li></h4>","<BR>";
        echo "<h4><li>$h3</li></h4>","<BR>";
      }

      ?>
                <style>
                    .b1 {
                        background-color: hsla(200, 100%, 59%, 0.667);
                        border: none;
                        padding: 5px 10px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                    }

                    .b1 {
                        background-color: white;
                        color: black;
                        border: 2px solid #19a9ca;
                    }

                    .b1:hover {
                        background-color: #19a9ca;
                        color: white;
                    }

                    .b1 {
                        border-radius: 5px;
                    }
                </style>
        <br>
        <button onclick="document.location = 'index.php'" class="b1">กลับสู่หน้าแรก</button>
      </div>
    </div>
  </div>