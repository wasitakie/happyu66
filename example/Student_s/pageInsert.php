<?php
session_start();
// 15//
$page_part1 = array("", $_POST["a2"], $_POST["a3"]);

$page_array = array("", $_POST["sex"], $_POST["age"], $_POST["q2-3"], $_POST["q2_4_1"], $_POST["q2_4_2"], $_POST["q2_4_3"], $_POST["q2_4_4"], $_POST["q2_4_5"], $_POST["q2_4_6"], $_POST["q2_4_7"], $_POST["q2_4_8"], $_POST["q2_4_9"], $_POST["q2_4_10"], $_POST["q2-4t"], $_POST["q2-5"]);

// echo $_POST["sex"];
// echo $_POST["age"];
$_SESSION["page_Part1"] = $page_part1;
$_SESSION["page_array"] = $page_array;

// foreach ($_SESSION["page1_array"] as $page1) {
//     echo $page1 . "<br>";
// }
header("Location: page1.php");
//header("Location: insertData.php");