<?php
session_start();
$_SESSION["user"] = $idcode = md5("hapypy" . date("dmyHis"));
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
    <div class="container" style="margin-top:2rem;">
        <div class="col-md-12">
            <h5>
                <p style="text-align: center;"><strong>
                        เอกสารชี้แจงในการตอบแบบสำรวจ
                    </strong></p>
            </h5>
            <hr>
            <p>ศูนย์วิจัยความสุขคนทำงานแห่งประเทศไทย มีวัตถุประสงค์เพื่อสำรวจและศึกษาคุณภาพชีวิต ความผูกพัน และความสุขในกลุ่มคนทำงาน ซึ่งประโยชน์ที่จะได้รับ คือ ได้ฐานข้อมูลมาศึกษาวิเคราะห์และพัฒนาองค์ความรู้ คุณภาพชีวิต ความสุข และความผูกพันในองค์กร</p>
            <p> หากท่านตัดสินใจเข้าร่วมตอบแบบสำรวจ HAPPINOMETER ด้วยตนเอง ท่านจะใช้เวลาประมาณ 15 นาที แบบสำรวจดังกล่าวฯ ประกอบด้วยข้อมูลทั่วไปในตอนต้น และคำถาม 8 มิติ ได้แก่ 1) สุขภาพกายดี 2) ผ่อนคลายดี 3) น้ำใจดี 4) จิตวิญญาณดี 5) ครอบครัวดี 6) สังคมดี 7) ใฝ่รู้ดี 8) สุขภาพเงินดี ขอความกรุณาให้ท่านตอบคำถามตามความรู้สึกหรือประสบการณ์ของท่านให้ใกล้เคียงมากที่สุด </p>
            <p>ข้อมูลและคำตอบทั้งหมดจะถูกปกปิดเป็นความลับ และผลการศึกษาจะรายงานออกมาเป็นภาพรวมของการวิจัยเท่านั้น จึงไม่มีผลกระทบใดใดต่อผู้ตอบ เนื่องจากไม่สามารถนำมาสืบค้นเจาะจงหาผู้ตอบได้ หากท่านมีข้อสงสัยเกี่ยวกับแบบสำรวจหรือได้รับการปฏิบัติไม่ตรงตามที่ระบุไว้ ท่านสามารถติดต่อสอบถาม ได้ตามรายละเอียดด้านล่าง<br /> <br /><strong>ชื่อผู้วิจัย:</strong> รองศาสตราจารย์ ดร. ศิรินันท์ กิตติสุขสถิต <br /> <strong>สถานที่ทำงานและที่อยู่ :</strong> สถาบันวิจัยประชากรและสังคม มหาวิทยาลัยมหิดล <br />ตำบลศาลายา อำเภอพุทธมณฑล จังหวัดนครปฐม<br />73170 โทรศัพท์: 02-441-0201 ต่อ 613 <br /> Email: sirinan.kit@mahidol.ac.th</p>
            <p>โครงการวิจัยนี้ได้รับการพิจารณารับรองจาก คณะกรรมการจริยธรรมการวิจัยสถาบันวิจัยประชากรและสังคม ซึ่งมีสำนักงานอยู่ที่สถาบันวิจัยประชากรและสังคมมหาวิทยาลัยมหิดล ถนนพุทธมณฑลสาย 4 ตำบลศาลายา อำเภอพุทธมณฑล จังหวัดนครปฐม 73170 โทรศัพท์ 02-441-0201-4 โทรสาร 02-441-9333 หากท่านได้รับการปฏิบัติไม่ตรงตามที่ระบุไว้ ท่านสามารถติดต่อกับประธานคณะกรรมการฯ หรือผู้แทน ได้ตามสถานที่และหมายเลขโทรศัพท์ข้างต้น</p>
            <p style="text-align: right;"><br /> ขอขอบคุณที่กรุณาตอบแบบสำรวจ</p>

            <hr>
            <div class="d-grid gap-2">
                <a href="page.php" type="button" name="" id="" class="btn btn-primary">เริ่มทำแบบสำรวจ</a>
            </div>
        </div>
    </div>

    <?php include '../title/footer.php' ?>

</body>

</html>