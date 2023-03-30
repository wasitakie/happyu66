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
                <h4>Happy Soul / จิตวิญญาณดี </h4>
            </div>

            <form action="page4Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 27. โดยทั่วไป
                                เมื่อท่านประสบปัญหาในชีวิต
                                ท่านสามารถใช้สติจัดการกับปัญหาได้มากน้อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-1" value="1">
                            <label class="form-check-label" for="checkq27-1">
                                1. ไม่สามารถใช้สติได้เลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-2" value="2">
                            <label class="form-check-label" for="checkq27-2">
                                2. สามารถใช้สติได้น้อยมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-3" value="3">
                            <label class="form-check-label" for="checkq27-3">
                                3. สามารถใช้สติได้ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-4" value="4">
                            <label class="form-check-label" for="checkq27-4">
                                4. สามารถใช้สติได้มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-5" value="5">
                            <label class="form-check-label" for="checkq27-5">
                                5. สามารถใช้สติได้มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 28. โดยรวมแล้ว
                                ท่านปฏิบัติกิจทางศาสนาเพื่อให้จิตใจสงบ มากน้อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-1" value="1">
                            <label class="form-check-label" for="checkq28-1">
                                1. ไม่ปฏิบัติ/ปฏิบัติน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-2" value="2">
                            <label class="form-check-label" for="checkq28-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-3" value="3">
                            <label class="form-check-label" for="checkq28-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-4" value="4">
                            <label class="form-check-label" for="checkq28-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-5" value="5">
                            <label class="form-check-label" for="checkq28-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 29.
                                โดยรวมแล้วท่านมีสมาธิที่สามารถนำไปประยุกต์ใช้กับชีวิตประจำวัน เช่น ลดความเครียด
                                ผ่อนคลายทั้งกายและใจ รวมถึงช่วยเพิ่มประสิทธิภาพในการเรียนและการทำงาน มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-1" value="1">
                            <label class="form-check-label" for="checkq29-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-2" value="2">
                            <label class="form-check-label" for="checkq29-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-3" value="3">
                            <label class="form-check-label" for="checkq29-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-4" value="4">
                            <label class="form-check-label" for="checkq29-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-5" value="5">
                            <label class="form-check-label" for="checkq29-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 30. โดยรวมแล้ว
                                ท่านยกโทษและให้อภัยอย่างจริงใจต่อผู้ที่สำนึกผิด เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-1" value="1">
                            <label class="form-check-label" for="checkq30-1">
                                1. ไม่ยกโทษ/ให้อภัยน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-2" value="2">
                            <label class="form-check-label" for="checkq30-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-3" value="3">
                            <label class="form-check-label" for="checkq30-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-4" value="4">
                            <label class="form-check-label" for="checkq30-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-5" value="5">
                            <label class="form-check-label" for="checkq30-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 31. โดยรวมแล้ว
                                ท่านยอมรับและขอโทษในความผิดที่ทำหรือมีส่วนรับผิดชอบ เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-1" value="1">
                            <label class="form-check-label" for="checkq31-1">
                                1. ไม่ยอมรับ/ขอโทษน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-2" value="2">
                            <label class="form-check-label" for="checkq31-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-3" value="3">
                            <label class="form-check-label" for="checkq31-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-4" value="4">
                            <label class="form-check-label" for="checkq31-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-5" value="5">
                            <label class="form-check-label" for="checkq31-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 32. โดยรวมแล้ว
                                ท่านตอบแทนผู้มีพระคุณหรือช่วยเหลือท่าน เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-1" value="1">
                            <label class="form-check-label" for="checkq32-1">
                                1. ไม่ตอบแทน/ตอบแทนน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-2" value="2">
                            <label class="form-check-label" for="checkq32-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-3" value="3">
                            <label class="form-check-label" for="checkq32-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-4" value="4">
                            <label class="form-check-label" for="checkq32-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-5" value="5">
                            <label class="form-check-label" for="checkq32-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary"></button>
                </div>



            </form>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="../jsStudent/jspage4.js"></script>


        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>