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
            <h3 class="w3-center">กรุณาตอบคำถามต่อไปนี้</h3>
        </div>

        <!-- Contact -->
        <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
            <form method="post" action="insert_result.php" onsubmit="return validate();">
                <tr>
                    <td height="40" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> <span class="style9">เพศ</span></strong></td>
                </tr>
                <br><br>
                <tr>
                    <td height="25" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                        <input type="radio" name="gender" id="gender1" value="ชาย" /> ชาย
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender" id="gender2" value="หญิง" /> หญิง
                    </td>
                </tr>
                <br><br>
                <tr>
                    <td height="34" bgcolor="#FFFBF0"> &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style9"><strong>อายุ</strong></span></td>
                </tr>
                <tr>
                    <td height="23" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name="age" type="text" id="age" size="10" maxlength="10" />&nbsp;&nbsp;&nbsp;&nbsp;<storng> ปี </strong>
                    </td>
                </tr>
                <br><br>
                <tr>
                    <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<strong>ระดับการศึกษา</strong></td>
                </tr>
                <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="study" id="radio8" value="ป.4" /> ป.4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="study" id="radio9" value="ป.5" /> ป.5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="study" id="radio10" value="ป.6" /> ป.6 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <br><br>
                <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <strong>ท่านมีโรคประจำตัวหรือข้อบกพร่องที่ทำให้การทำความสะอาดช่องปากมีประสิทธิภาพลดลง หรือไม่ </strong></td>
                <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="congenital" id="radio3" value="ไม่ใช่" /> ไม่ใช่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="congenital" id="radio4" value="ใช่" /> ใช่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <br><br>
                <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <strong>การรับรู้ข่าวสารเกี่ยวกับโรคฟันผุ </strong></td>
                <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="news" value="รับรู้มาก"> รับรู้มาก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="news" value="รับรู้ปานกลาง"> รับรู้ปานกลาง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="news" value="รับรู้น้อย"> รับรู้น้อย
                </td>
                <br><br>
                <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <strong>ท่านบริโภคเครื่องดื่มที่มีน้ำตาล ( น้ำผลไม้ น้ำหวาน น้ำอัดลม น้ำเชื่อม ) หรือไม่ </strong></td>
                <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="sugary" value="เฉพาะในมื้ออาหาร"> เฉพาะในมื้ออาหาร&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="sugary" value="ระหว่างมื้ออาหาร 1 ครั้งต่อวัน"> ระหว่างมื้ออาหาร 1 ครั้งต่อวัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="sugary" value="ระหว่างมื้ออาหาร >=2 ครั้งต่อวัน"> ระหว่างมื้ออาหาร >=2 ครั้งต่อวัน
                </td>
                <br><br>
                <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <strong>ท่านบริโภคขนมกรุบกรอบ หรือไม่ </strong></td>
                <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="snack" value="นานๆครั้ง"> นานๆ ครั้ง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="snack" value="บางวัน"> บางวัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="snack" value="ทุกวัน"> ทุกวัน
                </td>
                <br><br>
                <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <strong>ท่านมีฟันผุ หรือฟันได้รับการอุด หรือไม่ </strong></td>
                <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="decayed" value="ไม่มี"> ไม่มี&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="decayed" value="อุดฟัน/ฟันผุ 1-2 ซี่ ใน 2 ปีที่ผ่านมา"> อุดฟัน/ฟันผุ 1-2 ซี่ ใน 2 ปีที่ผ่านมา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="decayed" value="อุดฟัน/ฟันผุ 3 ซี่ขึ้นไป ใน 2 ปีที่ผ่านมา"> อุดฟัน/ฟันผุ 3 ซี่ขึ้นไป ใน 2 ปีที่ผ่านมา
                </td>
                <br><br>
                <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <strong>ท่านมีรอยขาวขุ่นบนผิวเคลือบฟัน หรือไม่ </strong></td>
                <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="fluorosis" value="ไม่มี"> ไม่มี&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="fluorosis" value="มี 1 ซี่"> มี 1 ซี่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="fluorosis" value="มี >= 2 ซี่"> มี >= 2 ซี่
                </td>
                <br><br>
                <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <strong>ท่านแปรงฟันด้วยยาสีฟันผสมฟลูออไรด์ ( ตั้งแต่ 1,000 ppm ขึ้นไป ) หรือไม่ </strong></td>
                <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="brush" value=">= 2 ครั้งต่อวัน"> >= 2 ครั้งต่อวัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="brush" value="1 ครั้งต่อวัน"> 1 ครั้งต่อวัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="brush" value="< 1 ครั้งต่อวัน">
                    < 1 ครั้งต่อวัน </td> <br><br>
                <td height="37" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <strong>ท่านได้รับการบริการทางทันตกรรม หรือไม่ </strong>
                    <br><br>
                <td height="29" bgcolor="#FFFBF0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="services" value="ได้รับอย่างสม่ำเสมอ"> ได้รับอย่างสม่ำเสมอ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="services" value="ได้รับเป็นบางครั้ง"> ได้รับเป็นบางครั้ง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <INPUT TYPE='radio' NAME="services" value="ไม่ได้รับ"> ไม่ได้รับ
                </td>
                <br><br>
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

                <div style="text-align: center;">
                    <button type="submit" class="b1">วิเคราะห์ความเสี่ยง</button>
                    <button type="reset" name="cancel" id="cancel" class="b1">ล้างข้อมูล</button>
                </div>
                <br>

        </div>
        </form>

        <script type="text/javascript">
            function validate() {
                var gender = document.getElementsByName('gender');
                var age = document.getElementById('age').value;
                var study = document.getElementsByName('study');
                var congenital = document.getElementsByName('congenital');
                var news = document.getElementsByName('news');
                var sugary = document.getElementsByName('sugary');
                var snack = document.getElementsByName('snack');
                var decayed = document.getElementsByName('decayed');
                var fluorosis = document.getElementsByName('fluorosis');
                var brush = document.getElementsByName('brush');
                var services = document.getElementsByName('services');

                if (!(gender[0].checked || gender[1].checked)) {
                    alert("กรุณาระบุเพศ");
                    return false;
                }

                if (age == '') {
                    alert("กรุณาระบุอายุ");
                    return false;
                }

                if (!(study[0].checked || study[1].checked || study[2].checked)) {
                    alert("กรุณาระบุระดับการศึกษา");
                    return false;
                }

                if (!(congenital[0].checked || congenital[1].checked)) {
                    alert("กรุณาระบุให้ครบถ้วน");
                    return false;
                }
                if (!(news[0].checked || news[1].checked || news[2].checked)) {
                    alert("กรุณาระบุให้ครบถ้วน");
                    return false;
                }
                if (!(sugary[0].checked || sugary[1].checked || sugary[2].checked)) {
                    alert("กรุณาระบุให้ครบถ้วน");
                    return false;
                }
                if (!(snack[0].checked || snack[1].checked || snack[2].checked)) {
                    alert("กรุณาระบุให้ครบถ้วน");
                    return false;
                }
                if (!(decayed[0].checked || decayed[1].checked || decayed[2].checked)) {
                    alert("กรุณาระบุให้ครบถ้วน");
                    return false;
                }
                if (!(fluorosis[0].checked || fluorosis[1].checked || fluorosis[2].checked)) {
                    alert("กรุณาระบุให้ครบถ้วน");
                    return false;
                }
                if (!(brush[0].checked || brush[1].checked || brush[2].checked)) {
                    alert("กรุณาระบุให้ครบถ้วน");
                    return false;
                }
                if (!(services[0].checked || services[1].checked || services[2].checked)) {
                    alert("กรุณาระบุให้ครบถ้วน");
                    return false;
                }

                return true;
            }
        </script>
</body>