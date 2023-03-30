<?php
session_start();
// 29//
$page_array = array("", $_POST["sex"], $_POST["age"], $_POST["q2-3"], $_POST["q2-4"], $_POST["q2_5_1"], $_POST["q2_5_2"], $_POST["q2_5_3"], $_POST["q2_5_4"], $_POST["q2_5_5"], $_POST["q2_5_6"], $_POST["q2_5_7"], $_POST["q2_5_8"], $_POST["q2_5_9"], $_POST["q2_5_10"], $_POST["q2-5t"], $_POST["q2-6"], $_POST["q2-6t"], $_POST["q2-7"], $_POST["q2-8"], $_POST["q2-9"], $_POST["q2-10"], $_POST["q2-10t"], $_POST["q2-11"], $_POST["q2-12"], $_POST["q2-13"], $_POST["q2-13t"], $_POST["q2-14"], $_POST["q2-15"], $_POST["q2-16"]);

// echo $_POST["sex"];
// echo $_POST["age"];
$_SESSION["page_array"] = $page_array;

// foreach ($_SESSION["page1_array"] as $page1) {
//     echo $page1 . "<br>";
// }
header("Location: page1.php");
//header("Location: insertData.php");