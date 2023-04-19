<?php
session_start();
include '../config/connect.php';
include '../config/connect_s.php';

if ($_GET["g"] == "sf") {
    $f = $con->prepare("DELETE FROM staff_f WHERE idcode <> ?  ");
    $f->execute([0]);
    header("location:adminPageAll.php");
}
if ($_GET["g"] == "ss") {
    $f = $con->prepare("DELETE FROM staff_s WHERE idcode <> ?  ");
    $f->execute([0]);
    header("location:adminPageAll.php");
}
if ($_GET["g"] == "sdf") {
    $f = $con->prepare("DELETE FROM student_f WHERE idcode <> ?  ");
    $f->execute([0]);
    header("location:adminPageAll.php");
}
if ($_GET["g"] == "sds") {
    $f = $con->prepare("DELETE FROM student_s WHERE idcode <> ?  ");
    $f->execute([0]);
    header("location:adminPageAll.php");
}
