<?php
session_start();
include  '../session/sessionadmin.php';
include '../config/connect.php';
include '../config/connect_s.php';
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
</head>

<body>
    <?php include '../banner/banner.php'; ?>
    <?php
    $stmt = $conStaff->prepare("SELECT* FROM insert_data ORDER BY id DESC");
    $stmt->execute();
    $row = $stmt->rowCount();
    $date = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>
    <div class="container" style="margin-top:3rem;">
        <div class="col-md-12">

            <h5>แบบสอบถามของเจ้าหน้าที่ฉบับเต็ม</h5>

            <p>จำนวนผู้ตอบทั้งหมด <?= $row ?> คน ตอบล่าสุดเมื่อวันที่ <?= $date["date"] ?> <a href="adminExcalStaff.php" target="_blank">Download Excal</a>

            </p>

        </div>

        <hr>
    </div>
    <?php
    $stmt = $conStaff_s->prepare("SELECT* FROM insert_data ORDER BY id DESC");
    $stmt->execute();
    $row = $stmt->rowCount();
    $date = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>
    <div class="container" style="margin-top:3rem;">
        <div class="col-md-12">

            <h5>แบบสอบถามของเจ้าหน้าที่ฉบับย่อ</h5>

            <p>จำนวนผู้ตอบทั้งหมด <?= $row ?> คน ตอบล่าสุดเมื่อวันที่ <?= $date["date"] ?> <a href="adminExcalStaff_S.php" target="_blank">Download Excal</a>

            </p>

        </div>
        <hr>
    </div>
    <?php
    $stmt = $conStudent->prepare("SELECT* FROM insert_data ORDER BY id DESC");
    $stmt->execute();
    $row = $stmt->rowCount();
    $date = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>
    <div class="container" style="margin-top:3rem;">
        <div class="col-md-12">


            <h5>แบบสอบถามของนักศึกษาฉบับเต็ม</h5>



            <p>จำนวนผู้ตอบทั้งหมด <?= $row ?> คน ตอบล่าสุดเมื่อวันที่ <?= $date["date"] ?> <a href="adminExcalStudent.php" target="_blank">Download Excal</a>

            </p>

        </div>
        <hr>
    </div>
    <?php
    $stmt = $conStudent_s->prepare("SELECT* FROM insert_data ORDER BY id DESC");
    $stmt->execute();
    $row = $stmt->rowCount();
    $date = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>
    <div class="container" style="margin-top:3rem;">
        <div class="col-md-12">


            <h5>แบบสอบถามของนักศึกษาฉบับย่อ</h5>



            <p>จำนวนผู้ตอบทั้งหมด <?= $row ?> คน ตอบล่าสุดเมื่อวันที่ <?= $date["date"] ?> <a href="adminExcalStudent_S.php" target="_blank">Download Excal</a>

            </p>

        </div>
    </div>
    <?php include '../title/footer.php' ?>

</body>

</html>