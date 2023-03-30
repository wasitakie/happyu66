<?php
session_start();
//12//
// echo $_POST["q89"];
// echo $_POST["q90"];
$page11_array = array("", $_POST["q79"], $_POST["q80"], $_POST["q81"], $_POST["q82"], $_POST["q83"], $_POST["q84"], $_POST["q85"], $_POST["q86"], $_POST["q87"], $_POST["q88"], $_POST["q89"], $_POST["q90"]);

$sumData  = array('', '0', '10', '25', '84', '100');

$sumDataAll = ($sumData[$_POST["q79"]] + $sumData[$_POST["q80"]] + $sumData[$_POST["q81"]] + $sumData[$_POST["q82"]] + $sumData[$_POST["q83"]] + $sumData[$_POST["q75"]] + $sumData[$_POST["q85"]] + $sumData[$_POST["q86"]] + $sumData[$_POST["q87"]] + $sumData[$_POST["q88"]]) / 10;

$_SESSION["sumNum11"] = $sumDataAll;
$_SESSION["page11_array"] = $page11_array;

// foreach ($_SESSION["page10_array"] as $page10) {
//     echo $page10 . "<br>";
// }

header("Location: insertData.php");
