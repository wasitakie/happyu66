<?php
session_start()
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
                <h4>Happy Soul / จิตวิญญาณดี </h4>
            </div>

            <form action="page4Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 20.
                                โดยรวมแล้วท่านทำนุบำรุงศิลปวัฒนธรรม/ ศาสนา/ การให้ทาน หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-1" value="1">
                            <label class="form-check-label" for="checkq20-1">
                                1. ไม่ทำ/ ทำน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-2" value="2">
                            <label class="form-check-label" for="checkq20-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-3" value="3">
                            <label class="form-check-label" for="checkq20-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-4" value="4">
                            <label class="form-check-label" for="checkq20-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-5" value="5">
                            <label class="form-check-label" for="checkq20-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 21. โดยรวมแล้ว
                                ท่านปฏิบัติกิจตามศาสนาเพื่อให้จิตใจสงบหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-1" value="1">
                            <label class="form-check-label" for="checkq21-1">
                                1. ไม่ปฏิบัติ/ ปฏิบัติน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-2" value="2">
                            <label class="form-check-label" for="checkq21-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-3" value="3">
                            <label class="form-check-label" for="checkq21-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-4" value="4">
                            <label class="form-check-label" for="checkq21-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-5" value="5">
                            <label class="form-check-label" for="checkq21-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">22. โดยรวมแล้ว
                                ท่านยกโทษและให้อภัยอย่างจริงใจต่อผู้ที่สำนึกผิด หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-1" value="1">
                            <label class="form-check-label" for="checkq22-1">
                                1. ไม่ยกโทษ/ ให้อภัยน้อยที่สุด
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
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">23. โดยรวมแล้ว
                                ท่านยอมรับและขอโทษในความผิดที่ทำหรือมีส่วนรับผิดชอบ หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-1" value="1">
                            <label class="form-check-label" for="checkq23-1">
                                1. ไม่ยอมรับ/ ขอโทษน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-2" value="2">
                            <label class="form-check-label" for="checkq23-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-3" value="3">
                            <label class="form-check-label" for="checkq23-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-4" value="4">
                            <label class="form-check-label" for="checkq23-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-5" value="5">
                            <label class="form-check-label" for="checkq23-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 24. โดยรวมแล้ว
                                ท่านตอบแทนผู้มีพระคุณ หรือช่วยเหลือท่าน หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-1" value="1">
                            <label class="form-check-label" for="checkq24-1">
                                1. ไม่ตอบแทน/ ตอบแทนน้อยที่สุด
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

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>

            </form>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="../jsStaff_s/jspage4.js"></script>

        </div>
    </div>

    <?php include '../title/footer.php' ?>
</body>

</html>