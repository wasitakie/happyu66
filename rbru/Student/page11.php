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
    <script src="../boot/js/mdb.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#slider-range-max").slider({
                range: "max",
                min: 0,
                max: 10,
                value: 0,
                step: 0.1,
                slide: function(event, ui) {
                    $("#amount").val(ui.value);
                }
            });
            $("#amount").val($("#slider-range-max").slider("value"));
        });
        $(function() {
            $("#slider-range-max1").slider({
                range: "max",
                min: 0,
                max: 10,
                value: 0,
                step: 0.1,
                slide: function(event, ui) {
                    $("#amount1").val(ui.value);
                }
            });
            $("#amount1").val($("#slider-range-max1").slider("value"));
        });
    </script>

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
                <h4>สมดุลระหว่างชีวิตกับการเรียน</h4>
            </div>

            <form action="page11Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 79.
                                โดยเฉลี่ยในหนึ่งสัปดาห์ท่านรู้สึกว่าท่านใช้เวลาในเรื่องเรียน กี่วัน</span></label>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-1" value="1">
                            <label class="form-check-label" for="checkq79-1">
                                1. 1- 2 วัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-2" value="2">
                            <label class="form-check-label" for="checkq79-2">
                                2. 3 – 4 วัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-3" value="3">
                            <label class="form-check-label" for="checkq79-3">
                                3. 5 วัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-4" value="4">
                            <label class="form-check-label" for="checkq79-4">
                                4. 6 วัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q79" type="radio" name="q79" id="checkq79-5" value="5">
                            <label class="form-check-label" for="checkq79-5">
                                5. 7 วัน (ทุกวัน)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 80.
                                โดยเฉลี่ยในแต่ละวัน
                                ท่านรู้สึกว่าท่านใช้เวลาในเรื่องเรียนวันละ กี่ชั่วโมง
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-1" value="1">
                            <label class="form-check-label" for="checkq80-1">
                                1. น้อยกว่า 6 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-2" value="2">
                            <label class="form-check-label" for="checkq80-2">
                                2. 6 – 8 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-3" value="3">
                            <label class="form-check-label" for="checkq80-3">
                                3. 9 – 10 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-4" value="4">
                            <label class="form-check-label" for="checkq80-4">
                                4. 11 – 12 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q80" type="radio" name="q80" id="checkq80-5" value="5">
                            <label class="form-check-label" for="checkq80-5">
                                5. มากกว่า 12 ชั่วโมง
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">81.
                                โดยเฉลี่ยในแต่ละวัน
                                ท่านรู้สึกว่าได้พักผ่อน (ไม่รวมการนอนหลับตอนกลางคืน) กี่ชั่วโมง
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-1" value="1">
                            <label class="form-check-label" for="checkq81-1">
                                1. น้อยกว่า 1 ชั่วโมงด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-2" value="2">
                            <label class="form-check-label" for="checkq81-2">
                                2. 1 – 2 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-3" value="3">
                            <label class="form-check-label" for="checkq81-3">
                                3. 3 – 5 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-4" value="4">
                            <label class="form-check-label" for="checkq81-4">
                                4. 6 - 7 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q81" type="radio" name="q81" id="checkq81-5" value="5">
                            <label class="form-check-label" for="checkq81-5">
                                5. 8 ชั่วโมง
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 82. โดยทั่วไป
                                ท่านสามารถบริหารจัดการเวลาได้ มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-1" value="1">
                            <label class="form-check-label" for="checkq82-1">
                                1. ไม่สามารถจัดการได้เลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-2" value="2">
                            <label class="form-check-label" for="checkq82-2">
                                2. จัดการได้น้อยมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-3" value="3">
                            <label class="form-check-label" for="checkq82-3">
                                3. จัดการได้ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-4" value="4">
                            <label class="form-check-label" for="checkq82-4">
                                4. จัดการได้มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q82" type="radio" name="q82" id="checkq82-5" value="5">
                            <label class="form-check-label" for="checkq82-5">
                                5. จัดการได้มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">83. โดยรวมแล้ว
                                ท่านรู้สึกว่าการบริหารจัดการเวลา เป็นเรื่องที่ท้าทาย (ยากสำหรับท่าน) เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q83" type="radio" name="q83" id="checkq83-1" value="1">
                            <label class="form-check-label" for="checkq83-1">
                                1. ไม่ท้าทายเลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q83" type="radio" name="q83" id="checkq83-2" value="2">
                            <label class="form-check-label" for="checkq83-2">
                                2. ท้าทายเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q83" type="radio" name="q83" id="checkq83-3" value="3">
                            <label class="form-check-label" for="checkq83-3">
                                3. ท้าทายปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q83" type="radio" name="q83" id="checkq83-4" value="4">
                            <label class="form-check-label" for="checkq83-4">
                                4. ท้าทายมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q83" type="radio" name="q83" id="checkq83-5" value="5">
                            <label class="form-check-label" for="checkq83-5">
                                5. ท้าทายมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">84. โดยทั่วไป
                                ตารางเรียนและกิจกรรมทางการศึกษาส่งผลกระทบต่อการทำกิจกรรมส่วนตัวของท่าน เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q84" type="radio" name="q84" id="checkq84-1" value="1">
                            <label class="form-check-label" for="checkq84-1">
                                1. ส่งผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q84" type="radio" name="q84" id="checkq84-2" value="2">
                            <label class="form-check-label" for="checkq84-2">
                                2. ส่งผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q84" type="radio" name="q84" id="checkq84-3" value="3">
                            <label class="form-check-label" for="checkq84-3">
                                3. ส่งผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q84" type="radio" name="q84" id="checkq84-4" value="4">
                            <label class="form-check-label" for="checkq84-4">
                                4. ส่งผลกระทบน้อยมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q84" type="radio" name="q84" id="checkq84-5" value="5">
                            <label class="form-check-label" for="checkq84-5">
                                5. ไม่ส่งผลกระทบเลย
                            </label>
                        </div>
                    </div>
                </div>





                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 85.
                                มหาวิทยาลัยของท่าน
                                มีความยืดหยุ่น ในการเรียนการสอน (ในสถานการณ์ปกติ) เพียงใด (เช่น
                                ความยืดหยุ่นในการให้เรียนที่บ้านหรือนอกสถานที่
                                ไม่ต้องเข้าชั้นเรียน/ยืดหยุ่นการส่งงานตามเวลาที่กำหนด/การเรียนนอกเวลาที่กำหนด)</spen>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input q85" type="radio" name="q85" id="checkq85-1" value="1">
                            <label class="form-check-label" for="checkq85-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q85" type="radio" name="q85" id="checkq85-2" value="2">
                            <label class="form-check-label" for="checkq85-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q85" type="radio" name="q85" id="checkq85-3" value="3">
                            <label class="form-check-label" for="checkq85-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q85" type="radio" name="q85" id="checkq85-4" value="4">
                            <label class="form-check-label" for="checkq85-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q85" type="radio" name="q85" id="checkq85-5" value="5">
                            <label class="form-check-label" for="checkq85-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 86.
                                ท่านได้ใช้เวลาทำกิจกรรมนอกห้องเรียนร่วมกับเพื่อนมากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q86" type="radio" name="q86" id="checkq86-1" value="1">
                            <label class="form-check-label" for="checkq86-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q86" type="radio" name="q86" id="checkq86-2" value="2">
                            <label class="form-check-label" for="checkq86-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q86" type="radio" name="q86" id="checkq86-3" value="3">
                            <label class="form-check-label" for="checkq86-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q86" type="radio" name="q86" id="checkq86-4" value="4">
                            <label class="form-check-label" for="checkq86-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q86" type="radio" name="q86" id="checkq86-5" value="5">
                            <label class="form-check-label" for="checkq86-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 87.
                                ท่านได้ใช้เวลาทำกิจกรรมเพื่อเพิ่มพูนความรู้ความสามารถทางวิชาการ เช่น การเรียนพิเศษ
                                การเรียน
                                ภาษาต่างประเทศ มากน้อยเพียงใด

                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q87" type="radio" name="q87" id="checkq87-1" value="1">
                            <label class="form-check-label" for="checkq87-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q87" type="radio" name="q87" id="checkq87-2" value="2">
                            <label class="form-check-label" for="checkq87-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q87" type="radio" name="q87" id="checkq87-3" value="3">
                            <label class="form-check-label" for="checkq87-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q87" type="radio" name="q87" id="checkq87-4" value="4">
                            <label class="form-check-label" for="checkq87-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q87" type="radio" name="q87" id="checkq87-5" value="5">
                            <label class="form-check-label" for="checkq87-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 88. โดยปกติ
                                ท่านได้ใช้สิทธิและเสรีภาพในการแสดงความคิดเห็นทางการเมือง เช่น
                                การเลือกตั้งผู้แทนในท้องถิ่นของท่าน
                                การเลือกตั้งประธานและคณะกรรมการนักศึกษา มากน้อยเพียงใด


                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q88" type="radio" name="q88" id="checkq88-1" value="1">
                            <label class="form-check-label" for="checkq88-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q88" type="radio" name="q88" id="checkq88-2" value="2">
                            <label class="form-check-label" for="checkq88-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q88" type="radio" name="q88" id="checkq88-3" value="3">
                            <label class="form-check-label" for="checkq88-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q88" type="radio" name="q88" id="checkq88-4" value="4">
                            <label class="form-check-label" for="checkq88-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q88" type="radio" name="q88" id="checkq88-5" value="5">
                            <label class="form-check-label" for="checkq88-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="customRange3" class="form-label"><span class="textQ">
                                89. ปัจจุบัน ความสุขของชีวิตโดยรวมในรั้วมหาวิทยาลัยของท่านอยู่ในระดับใด ขอให้ท่านกากบาท X ลงบนเส้นด้านล่าง โดยคะแนนจะเรียงจากน้อยไปหามาก เริ่มจาก 0 หมายถึง ไม่มีความสุขเลย ไปจนถึง 10 หมายถึงมีความสุขที่สุด </span></label>
                        <p>
                            <label for="amount">ผลคะแนนที่ท่านเลือก:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" name="q89">
                        </p>
                        <div id="slider-range-max"></div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="customRange3" class="form-label"><span class="textQ">
                                90. ปัจจุบันสถานการณ์การแพร่ระบาดโควิด-19 ส่งผลกระทบต่อชีวิตความเป็นอยู่ของท่านในระดับใด โปรด กากบาท X ลงบนเส้นด้านล่าง โดยคะแนนเริ่มจาก 0 หมายถึง ไม่ส่งผลกระทบต่อชีวิตความเป็นอยู่เลย ไปจนถึง 10 หมายถึง ส่งผลกระทบต่อชีวิตความเป็นอยู่มากที่สุด </span></label>
                        <p>
                            <label for="amount1">ผลคะแนนที่ท่านเลือก:</label>
                            <input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;" name="q90">
                        </p>
                        <div id="slider-range-max1"></div>
                    </div>
                </div>



                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>

            </form>
            <script src="../jsStudent/jspage11.js"></script>



        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>