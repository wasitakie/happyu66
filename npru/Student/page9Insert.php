<?php
session_start();
//19//
$page9_array = array("", $_POST["q52"], $_POST["q53"], $_POST["q54"], $_POST["q55"], $_POST["q56"], $_POST["q57"], $_POST["q58"], $_POST["q59"], $_POST["q60"], $_POST["q61"], $_POST["q62"], $_POST["q63"], $_POST["q64"], $_POST["q65"], $_POST["q66"], $_POST["q67"], $_POST["q68"], $_POST["q69"], $_POST["cv9"]);

$sumData  = array('', '0', '25', '50', '75', '100');

$sumDataAll = ($sumData[$_POST["q52"]] + $sumData[$_POST["q53"]] + $sumData[$_POST["q54"]] + $sumData[$_POST["q55"]] + $sumData[$_POST["q56"]] + $sumData[$_POST["q57"]] + $sumData[$_POST["q58"]] + $sumData[$_POST["q59"]] + $sumData[$_POST["q60"]] + $sumData[$_POST["q61"]] + $sumData[$_POST["q62"]] + $sumData[$_POST["q63"]] + $sumData[$_POST["q64"]] + $sumData[$_POST["q65"]] + $sumData[$_POST["q66"]] + $sumData[$_POST["q67"]] + $sumData[$_POST["q68"]] + $sumData[$_POST["q69"]]) / 18;

$_SESSION["sumNum9"] = $sumDataAll;
$_SESSION["page9_array"] = $page9_array;
include '../function/staffNumText.php';

if ($sumDataAll >= 0.00 and $sumDataAll <= 24.00) {
    $imgS = '<img src="../imgS/s1.png">';
    $numS = "Very Unhappy= 0.00-24.00 คะแนน";
    $textS = $staffNumText1;
} elseif ($sumDataAll >= 25.00 and $sumDataAll <= 49.99) {
    $imgS = '<img src="../imgS/s2.png">';
    $numS = "Unhappy= 25.00-49.99 คะแนน";
    $textS = $staffNumText2;
} elseif ($sumDataAll >= 50.00 and $sumDataAll <= 74.99) {
    $imgS = '<img src="../imgS/s3.png">';
    $numS = "Happy= 50.00-74.99 คะแนน";
    $textS = $staffNumText3;
} elseif ($sumDataAll >= 75.00 and $sumDataAll <= 100) {
    $imgS = '<img src="../imgS/s3.png">';
    $numS = "Very Happy= 75.0-100 คะแนน";
    $textS = $staffNumText4;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include '../title/title.php' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../boot/css/mdb.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php include '../banner/banner.php'; ?>
    <br>
    <div class="container centralest">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 animate__animated animate__zoomInUp">
                <div class="mainS font">
                    <div class="headS">ค่าคะแนนระดับความสุขและความหมายของเครื่องมือ HAPPINOMETER </div>
                    <hr>
                    <div class="userS">ค่าคะแนนของคุณ :
                        <?= round($sumDataAll, 2) ?> คะแนน</div>
                    <div class="imgS"><?= $imgS ?></div>
                    <div class="numS"><?= $numS ?></div>
                    <hr>
                    <div class="textS"><?= $textS ?></div>
                    <hr>
                    <a name="" id="" class="btn btn-primary btn-block" href="page10.php" role="button">ทำแบบสำรวจในส่วนต่อไป</a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>




</body>

</html>