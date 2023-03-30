<?php
session_start();
include '../session/sessionuser.php';
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
    <div class="container manu">
        <div class="col-md-12">
            <div class="headText">
                <h4>คำชี้แจงในการตอบแบบสำรวจ</h4>
                <p>ให้ใส่เครื่องหมาย <i class="fa-solid fa-check"></i> ในช่อง <i class="fa-regular fa-square"></i>
                    ทุกข้อที่ท่านเลือก </p>
            </div>

            <div class="headpage">
                <h4>Happy Heart / น้ำใจดี </h4>
            </div>

            <form action="page3Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 22. โดยรวมแล้ว
                                ท่านรู้สึกเอื้ออาทร/ห่วงใยคนรอบข้างเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-1" value="1">
                            <label class="form-check-label" for="checkq22-1">
                                1. ไม่รู้สึกเลย/น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-2" value="2">
                            <label class="form-check-label" for="checkq22-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-3" value="3">
                            <label class="form-check-label" for="checkq22-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-4" value="4">
                            <label class="form-check-label" for="checkq22-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-5" value="5">
                            <label class="form-check-label" for="checkq22-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 23. โดยรวมแล้ว
                                ท่านให้การช่วยเหลือแก่คนรอบข้างเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-1" value="1">
                            <label class="form-check-label" for="checkq23-1">
                                1. ไม่เคย/แทบจะไม่เคยช่วย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-2" value="2">
                            <label class="form-check-label" for="checkq23-2">
                                2. นาน ๆ ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-3" value="3">
                            <label class="form-check-label" for="checkq23-3">
                                3. ช่วยบ้างบางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-4" value="4">
                            <label class="form-check-label" for="checkq23-4">
                                4. ช่วยแทบทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-5" value="5">
                            <label class="form-check-label" for="checkq23-5">
                                5. ช่วยทุกครั้ง
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 24.
                                ท่านได้ใช้เวลาทำกิจกรรมของมหาวิทยาลัยเพื่อบำเพ็ญสาธารณประโยชน์ เช่น อาสาพัฒนา
                                อนุรักษ์สิ่งแวดล้อม มากน้อยเพียงใด </span></label>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-1" value="1">
                            <label class="form-check-label" for="checkq24-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-2" value="2">
                            <label class="form-check-label" for="checkq24-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-3" value="3">
                            <label class="form-check-label" for="checkq24-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-4" value="4">
                            <label class="form-check-label" for="checkq24-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-5" value="5">
                            <label class="form-check-label" for="checkq24-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 25.
                                ท่านได้ใช้เวลาทำกิจกรรมตามขนบธรรมเนียมประเพณีไทยและท้องถิ่น และกิจกรรมในวันสำคัญ
                                ต่าง ๆ ของมหาวิทยาลัย มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-1" value="1">
                            <label class="form-check-label" for="checkq25-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-2" value="2">
                            <label class="form-check-label" for="checkq25-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-3" value="3">
                            <label class="form-check-label" for="checkq25-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-4" value="4">
                            <label class="form-check-label" for="checkq25-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-5" value="5">
                            <label class="form-check-label" for="checkq25-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 26.
                                ท่านได้ใช้เวลาทำกิจกรรมเพื่อสานสัมพันธ์ระหว่างนักศึกษาในมหาวิทยาลัยของท่าน เช่น
                                การรับน้อง
                                การเข้าค่าย มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-1" value="1">
                            <label class="form-check-label" for="checkq26-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-2" value="2">
                            <label class="form-check-label" for="checkq26-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-3" value="3">
                            <label class="form-check-label" for="checkq26-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-4" value="4">
                            <label class="form-check-label" for="checkq26-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-5" value="5">
                            <label class="form-check-label" for="checkq26-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> CV3.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติน้ำใจดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-1" value="1">
                            <label class="form-check-label" for="checkcv3-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-2" value="2">
                            <label class="form-check-label" for="checkcv3-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-3" value="3">
                            <label class="form-check-label" for="checkcv3-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-4" value="4">
                            <label class="form-check-label" for="checkcv3-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-5" value="5">
                            <label class="form-check-label" for="checkcv3-5">
                                5. มีผลกระทบน้อยที่สุด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="../jsStudent/jspage3.js"></script>




        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>