<?php
session_start();
//9//
$page10_array = array("", $_POST["q70"], $_POST["q71"], $_POST["q72"], $_POST["q73"], $_POST["q74"], $_POST["q75"], $_POST["q76"], $_POST["q77"], $_POST["q78"]);

// $sumData  = array('', '0', '25', '75', '100');

// $sumDataAll = ($sumData[$_POST["q70"]] + $sumData[$_POST["q71"]] + $sumData[$_POST["q72"]] + $sumData[$_POST["q73"]] + $sumData[$_POST["q74"]] + $sumData[$_POST["q75"]] + $sumData[$_POST["q76"]] + $sumData[$_POST["q77"]] + $sumData[$_POST["q78"]]) / 9;

// $_SESSION["sumNum10"] = $sumDataAll;
$_SESSION["page10_array"] = $page10_array;

// foreach ($_SESSION["page10_array"] as $page10) {
//     echo $page10 . "<br>";
// }
header("Location: page11.php");
