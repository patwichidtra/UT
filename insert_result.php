<?php
include 'conn.php';
$gender = $_POST['gender'];
$age = $_POST['age'];
$study = $_POST['study'];
$congenital = $_POST['congenital'];
$news = $_POST['news'];
$sugary = $_POST['sugary'];
$snack = $_POST['snack'];
$decayed = $_POST['decayed'];
$fluorosis = $_POST['fluorosis'];
$brush = $_POST['brush'];
$services = $_POST['services'];
$risk = risk_analysis($sugary, $snack, $decayed, $fluorosis, $brush);

$sql = "INSERT INTO aathai (id, gender, age, study, congenital, news, sugary, snack, decayed, fluorosis, brush, services, risk) VALUES 
(NULL, '" . $gender . "', '" . $age . "','" . $study . "', ' " . $congenital . "', '" . $news . "','" . $sugary . "', ' " . $snack . "', '" . $decayed . "','" . $fluorosis . "', ' " . $brush . "', '" . $services . "','" . $risk . "')";
$qsql = mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);

// echo $sql;
exit("<script> location.href= 'result.php?id=$last_id';</script>");

function risk_analysis($sugary,  $snack,  $decayed,  $fluorosis,  $brush)
{
    $risk = "";
    if ($snack == "บางวัน" && $decayed == "อุดฟัน/ฟันผุ 1-2 ซี่ ใน 2 ปีที่ผ่านมา") {
        $risk = "เสี่ยงปานกลาง";
    } elseif ($snack == "บางวัน" && $decayed == "อุดฟัน/ฟันผุ 3 ซี่ขึ้นไป ใน 2 ปีที่ผ่านมา") {
        $risk = "เสี่ยงสูง";
    } elseif ($snack == "บางวัน" && $decayed == "ไม่มี" && $sugary == "ระหว่างมื้ออาหาร 1 ครั้งต่อวัน") {
        $risk = "เสี่ยงปานกลาง";
    } elseif ($snack == "บางวัน" && $decayed == "ไม่มี" && $sugary == "ระหว่างมื้ออาหาร >=2 ครั้งต่อวัน") {
        $risk = "เสี่ยงสูง";
    } elseif ($snack == "บางวัน" && $decayed == "ไม่มี" && $sugary == "เฉพาะในมื้ออาหาร" && $fluorosis == "ไม่มี") {
        $risk = "เสี่ยงต่ำ";
    } elseif ($snack == "บางวัน" && $decayed == "ไม่มี" && $sugary == "เฉพาะในมื้ออาหาร" && $fluorosis == "มี 1 ซี่") {
        $risk = "เสี่ยงต่ำ";
    } elseif ($snack == "บางวัน" && $decayed == "ไม่มี" && $sugary == "เฉพาะในมื้ออาหาร" && $fluorosis == "มี >= 2 ซี่") {
        $risk = "เสี่ยงปานกลาง";
    } elseif ($snack == "ทุกวัน" && $decayed == "อุดฟัน/ฟันผุ 3 ซี่ขึ้นไป ใน 2 ปีที่ผ่านมา") {
        $risk = "เสี่ยงสูง";
    } elseif ($snack == "นานๆครั้ง" && $decayed == "ไม่มี" && $brush == ">= 2 ครั้งต่อวัน") {
        $risk = "เสี่ยงต่ำ";
    } elseif ($snack == "นานๆครั้ง" && $decayed == "ไม่มี" && $brush == "1 ครั้งต่อวัน") {
        $risk = "เสี่ยงปานกลาง";
    } elseif ($snack == "นานๆครั้ง" && $decayed == "ไม่มี" && $sugary == "เฉพาะในมื้ออาหาร" && $fluorosis == "ไม่มี" && $brush == ">= 2 ครั้งต่อวัน") {
        $risk = "เสี่ยงต่ำ";
    } elseif ($snack == "ทุกวัน") {
        $risk = "เสี่ยงสูง";
    } elseif ($brush == "< 1 ครั้งต่อวัน") {
        $risk = "เสี่ยงสูง";
    }
    return $risk;
}
