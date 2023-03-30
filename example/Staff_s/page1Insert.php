<?php
session_start();
// 12//
$page1_array = array("", $_POST["weight"], $_POST["waist"], $_POST["height"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"], $_POST["q6"], $_POST["q7"], $_POST["q8"], $_POST["q9"], $_POST["cv1"]);

$sumData = array('', '0', '25', '50', '75', '100');

$sumDataAll = ($sumData[$_POST["q2"]] + $sumData[$_POST["q3"]] + $sumData[$_POST["q4"]] + $sumData[$_POST["q5"]] + $sumData[$_POST["q6"]] + $sumData[$_POST["q7"]] + $sumData[$_POST["q8"]] + $sumData[$_POST["q9"]]) / 11;

$_SESSION["sumNum1"] = $sumDataAll;
$_SESSION["page1_array"] = $page1_array;

// foreach ($_SESSION["page1_array"] as $page1) {
//     echo $page1 . "<br>";
// }
header("Location: page2.php");
