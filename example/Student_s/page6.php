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
                <h4>Happy Society / สังคมดี </h4>
            </div>

            <form action="page6Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 36. โดยรวมแล้ว
                                เพื่อนบ้าน/เพื่อนร่วมหอพัก/คนรอบตัวท่าน มีความสัมพันธ์ที่ดีต่อท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q36" type="radio" name="q36" id="checkq36-1" value="1">
                            <label class="form-check-label" for="checkq36-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q36" type="radio" name="q36" id="checkq36-2" value="2">
                            <label class="form-check-label" for="checkq36-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q36" type="radio" name="q36" id="checkq36-3" value="3">
                            <label class="form-check-label" for="checkq36-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q36" type="radio" name="q36" id="checkq36-4" value="4">
                            <label class="form-check-label" for="checkq36-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q36" type="radio" name="q36" id="checkq36-5" value="5">
                            <label class="form-check-label" for="checkq36-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 37. โดยปกติ
                                ท่านรู้สึกว่าได้รับมลพิษจากสิ่งแวดล้อม (เช่น ฝุ่น กลิ่น อากาศ เสียง เป็นพิษ)
                                รอบตัวท่านเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q37" type="radio" name="q37" id="checkq37-1" value="1">
                            <label class="form-check-label" for="checkq37-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q37" type="radio" name="q37" id="checkq37-2" value="2">
                            <label class="form-check-label" for="checkq37-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q37" type="radio" name="q37" id="checkq37-3" value="3">
                            <label class="form-check-label" for="checkq37-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q37" type="radio" name="q37" id="checkq37-4" value="4">
                            <label class="form-check-label" for="checkq37-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q37" type="radio" name="q37" id="checkq37-5" value="5">
                            <label class="form-check-label" for="checkq37-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 38. โดยรวมแล้ว
                                ท่านรู้สึกปลอดภัยในชีวิตและทรัพย์สินในสังคมที่ท่านอยู่เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q38" type="radio" name="q38" id="checkq38-1" value="1">
                            <label class="form-check-label" for="checkq38-1">
                                1. ไม่รู้สึก/รู้สึกน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q38" type="radio" name="q38" id="checkq38-2" value="2">
                            <label class="form-check-label" for="checkq38-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q38" type="radio" name="q38" id="checkq38-3" value="3">
                            <label class="form-check-label" for="checkq38-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q38" type="radio" name="q38" id="checkq38-4" value="4">
                            <label class="form-check-label" for="checkq38-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q38" type="radio" name="q38" id="checkq38-5" value="5">
                            <label class="form-check-label" for="checkq38-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 39. โดยปกติ
                                ท่านรู้สึกปลอดภัยจากอุบัติเหตุบนถนนในการใช้ชีวิตประจำวันของท่านเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-1" value="1">
                            <label class="form-check-label" for="checkq39-1">
                                1. ไม่รู้สึก/รู้สึกน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-2" value="2">
                            <label class="form-check-label" for="checkq39-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-3" value="3">
                            <label class="form-check-label" for="checkq39-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-4" value="4">
                            <label class="form-check-label" for="checkq39-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-5" value="5">
                            <label class="form-check-label" for="checkq39-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">40. โดยรวมแล้ว
                                ท่านเคยถูกละเมิดสิทธิหรือคุกคามทางเพศ รวมทั้งคำพูด ท่าที พฤติกรรมข่มขู่
                                หรือบังคับให้มีเพศสัมพันธ์ หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-1" value="1">
                            <label class="form-check-label" for="checkq40-1">
                                1. เป็นประจำ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-2" value="2">
                            <label class="form-check-label" for="checkq40-2">
                                2. บ่อยครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-3" value="3">
                            <label class="form-check-label" for="checkq40-3">
                                3. บางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-4" value="4">
                            <label class="form-check-label" for="checkq40-4">
                                4. นาน ๆ ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-5" value="5">
                            <label class="form-check-label" for="checkq40-5">
                                5. ไม่เคย
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">41. โดยรวมแล้ว
                                ท่านเคยถูกบูลลี่ (Bully) ด้วยคำพูดหรือพฤติกรรมก้าวร้าว จนทำให้ท่านรู้สึกอับอายหรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-1" value="1">
                            <label class="form-check-label" for="checkq41-1">
                                1. เป็นประจำ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-2" value="2">
                            <label class="form-check-label" for="checkq41-2">
                                2. บ่อยครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-3" value="3">
                            <label class="form-check-label" for="checkq41-3">
                                3. บางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-4" value="4">
                            <label class="form-check-label" for="checkq41-4">
                                4. นาน ๆ ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-5" value="5">
                            <label class="form-check-label" for="checkq41-5">
                                5. ไม่เคย
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">42. โดยรวมแล้ว
                                ท่านเคยเล่นการพนัน เช่น การพนันออนไลน์ ไพ่ เข้าบ่อน หวยใต้ดิน ฯลฯ หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-1" value="1">
                            <label class="form-check-label" for="checkq42-1">
                                1. เป็นประจำ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-2" value="2">
                            <label class="form-check-label" for="checkq42-2">
                                2. บ่อยครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-3" value="3">
                            <label class="form-check-label" for="checkq42-3">
                                3. บางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-4" value="4">
                            <label class="form-check-label" for="checkq42-4">
                                4. นาน ๆ ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-5" value="5">
                            <label class="form-check-label" for="checkq42-5">
                                5. ไม่เคย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 43. โดยรวมแล้ว
                                ท่านรู้สึกว่า สังคมไทยทุกวันนี้ มีความสงบสุข เพียงใด</spen></label>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-1" value="1">
                            <label class="form-check-label" for="checkq43-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-2" value="2">
                            <label class="form-check-label" for="checkq43-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-3" value="3">
                            <label class="form-check-label" for="checkq43-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-4" value="4">
                            <label class="form-check-label" for="checkq43-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-5" value="5">
                            <label class="form-check-label" for="checkq43-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 44. โดยรวมแล้ว
                                ทุกวันนี้ท่านใช้ชีวิตในสังคมอย่างมีความสุข มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-1" value="1">
                            <label class="form-check-label" for="checkq44-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-2" value="2">
                            <label class="form-check-label" for="checkq44-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-3" value="3">
                            <label class="form-check-label" for="checkq44-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-4" value="4">
                            <label class="form-check-label" for="checkq44-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-5" value="5">
                            <label class="form-check-label" for="checkq44-5">
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
            <script src="../jsStudent_s/jspage6.js"></script>

        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>