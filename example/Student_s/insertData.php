<?php
session_start();
include '../session/sessionuser.php';

include '../config/connect_s.php';

$date  = date("d-m-") . (date("Y") + 543) . "/" . date("H-i-s");
$page = $_SESSION["page_array"];
$page1 = $_SESSION["page1_array"];
$page2 = $_SESSION["page2_array"];
$page3 = $_SESSION["page3_array"];
$page4 = $_SESSION["page4_array"];
$page5 = $_SESSION["page5_array"];
$page6 = $_SESSION["page6_array"];
$page7 = $_SESSION["page7_array"];
$page8 = $_SESSION["page8_array"];

$id = '0';


try {
    $sd = $conStudent_s->prepare("INSERT INTO insert_data(id, sex, age, q2_3, q2_4_1, q2_4_2, q2_4_3, q2_4_4, q2_4_5, q2_4_6, q2_4_7, q2_4_8, q2_4_9, q2_4_10, q2_4t, q2_5, weight, waist, height, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, q36, q37, q38, q39, q40, q41, q42, q43, q44, q45, q46, q47, q48, q49, q50, q51,date,idcode) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $sd->execute([$id, $page[1], $page[2], $page[3], $page[4], $page[5], $page[6], $page[7], $page[8], $page[9], $page[10], $page[11], $page[12], $page[13], $page[14], $page[15], $page1[1], $page1[2], $page1[3], $page1[4], $page1[5], $page1[6], $page1[7], $page1[8], $page1[9], $page1[10], $page1[11], $page1[12], $page1[13], $page2[1], $page2[2], $page2[3], $page2[4], $page2[5], $page2[6], $page2[7], $page2[8], $page2[9], $page2[10], $page3[1], $page3[2], $page3[3], $page3[4], $page3[5], $page4[1], $page4[2], $page4[3], $page4[4], $page4[5], $page4[6], $page5[1], $page5[2], $page5[3], $page6[1], $page6[2], $page6[3], $page6[4], $page6[5], $page6[6], $page6[7], $page6[8], $page6[9], $page7[1], $page7[2], $page7[3], $page8[1], $page8[2], $page8[3], $page8[4], $date, $_SESSION["user"]]);
} catch (PDOException $e) {
    echo 'insert err' . $e->getMessage();
}

header("location: showData.php");
