<?php

session_start();
include '../config/connect_s.php';
$date  = date("d-m-") . (date("Y") + 543) . "/" . date("H-i-s");
$pagePart1 = $_SESSION["page_part1"];
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
    $stf  = $conStaff_s->prepare("INSERT INTO insert_data(id,a1, a2, a3, a4, a4t, a5, a5t, sex, age, q2_3, q2_4, q2_5_1, q2_5_2, q2_5_3, q2_5_4, q2_5_5, q2_5_6, q2_5_7, q2_5_8, q2_5_9, q2_5_10, q2_5t, q2_6, q2_6t, q2_7, q2_8, q2_9, q2_10, q2_10t, q2_11, q2_12, q2_13, q2_13t, q2_14, q2_15, q2_16, weight, waist, height, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, q36, q37, q38, q39, q40, date, idcode) VALUES 
    (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $stf->execute([$id, $pagePart1[1], $pagePart1[2], $pagePart1[3], $pagePart1[4], $pagePart1[5], $pagePart1[6], $pagePart1[7], $page[1], $page[2], $page[3], $page[4], $page[5], $page[6], $page[7], $page[8], $page[9], $page[10], $page[11], $page[12], $page[13], $page[14], $page[15], $page[16], $page[17], $page[18], $page[19], $page[20], $page[21], $page[22], $page[23], $page[24], $page[25], $page[26], $page[27], $page[28], $page[29], $page1[1], $page1[2], $page1[3], $page1[4], $page1[5], $page1[6], $page1[7], $page1[8], $page1[9], $page1[10], $page1[11], $page2[1], $page2[2], $page2[3], $page2[4], $page2[5], $page3[1], $page3[2], $page3[3], $page3[4], $page3[5], $page4[1], $page4[2], $page4[3], $page4[4], $page4[5], $page5[1], $page5[2], $page5[3], $page6[1], $page6[2], $page6[3], $page6[4], $page6[5], $page6[6], $page7[1], $page7[2], $page7[3], $page8[1], $page8[2], $page8[3], $page8[4], $date, $_SESSION["user"]]);
} catch (PDOException $e) {
    echo 'insert error' . $e->getMessage();
}
header("location: showData.php");
