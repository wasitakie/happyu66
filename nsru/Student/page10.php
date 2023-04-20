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
                <h4>ความผูกพันกับสถาบันการศึกษา</h4>
            </div>

            <form action="page10Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 70. โดยรวมแล้ว
                                ท่านจะแนะนำญาติ/เพื่อน/คนรู้จักมาเรียนที่มหาวิทยาลัยของท่าน เพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-1" value="1">
                            <label class="form-check-label" for="checkq70-1">
                                1. ไม่/แนะนำน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-2" value="2">
                            <label class="form-check-label" for="checkq70-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-3" value="3">
                            <label class="form-check-label" for="checkq70-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-4" value="4">
                            <label class="form-check-label" for="checkq70-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-5" value="5">
                            <label class="form-check-label" for="checkq70-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 71. โดยรวมแล้ว
                                หากมีใครกล่าวถึงมหาวิทยาลัยของท่านในทางที่ไม่เหมาะสม ท่านจะปกป้องมหาวิทยาลัยของท่าน
                                เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-1" value="1">
                            <label class="form-check-label" for="checkq71-1">
                                1. ไม่/ปกป้องน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-2" value="2">
                            <label class="form-check-label" for="checkq71-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-3" value="3">
                            <label class="form-check-label" for="checkq71-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-4" value="4">
                            <label class="form-check-label" for="checkq71-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-5" value="5">
                            <label class="form-check-label" for="checkq71-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">72. โดยรวมแล้ว
                                ท่านภาคภูมิใจที่ได้เป็นนิสิต/นักศึกษาของมหาวิทยาลัยแห่งนี้ เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-1" value="1">
                            <label class="form-check-label" for="checkq72-1">
                                1. ไม่ภาคภูมิใจ/ภูมิใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-2" value="2">
                            <label class="form-check-label" for="checkq72-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-3" value="3">
                            <label class="form-check-label" for="checkq72-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-4" value="4">
                            <label class="form-check-label" for="checkq72-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-5" value="5">
                            <label class="form-check-label" for="checkq72-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 73. โดยรวมแล้ว
                                ท่านรู้สึกอยากมามหาวิทยาลัย มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-1" value="1">
                            <label class="form-check-label" for="checkq73-1">
                                1. ไม่อยากมาเลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-2" value="2">
                            <label class="form-check-label" for="checkq73-2">
                                2. ไม่อยากมา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-3" value="3">
                            <label class="form-check-label" for="checkq73-3">
                                3. อยากมาบางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-4" value="4">
                            <label class="form-check-label" for="checkq73-4">
                                4. อยากมามาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-5" value="5">
                            <label class="form-check-label" for="checkq73-5">
                                5. อยากมามากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">74. โดยรวมแล้ว
                                ท่านรู้สึกว่าการตัดสินใจเข้าเรียนที่มหาวิทยาลัยแห่งนี้
                                ตั้งแต่แรกจนถึงปัจจุบันเป็นอย่างไร
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-1" value="1">
                            <label class="form-check-label" for="checkq74-1">
                                1. ตัดสินใจไม่ถูกต้องเลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-2" value="2">
                            <label class="form-check-label" for="checkq74-2">
                                2. ตัดสินใจไม่ถูกต้องเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-3" value="3">
                            <label class="form-check-label" for="checkq74-3">
                                3. ตัดสินใจถูกต้องบ้าง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-4" value="4">
                            <label class="form-check-label" for="checkq74-4">
                                4. ตัดสินใจถูกต้องมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q74" type="radio" name="q74" id="checkq74-5" value="5">
                            <label class="form-check-label" for="checkq74-5">
                                5. ตัดสินใจถูกต้องมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">75. โดยรวมแล้ว
                                ท่านรู้สึกเป็นส่วนหนึ่งของมหาวิทยาลัยที่ท่านเรียนในปัจจุบัน เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-1" value="1">
                            <label class="form-check-label" for="checkq75-1">
                                1. ไม่รู้สึก/รู้สึกน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-2" value="2">
                            <label class="form-check-label" for="checkq75-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-3" value="3">
                            <label class="form-check-label" for="checkq75-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-4" value="4">
                            <label class="form-check-label" for="checkq75-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q75" type="radio" name="q75" id="checkq75-5" value="5">
                            <label class="form-check-label" for="checkq75-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>





                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 76. โดยรวมแล้ว
                                ท่านทุ่มเทศึกษาเล่าเรียนเพื่อสร้าง/รักษาชื่อเสียงของมหาวิทยาลัยของท่าน เพียงใด</spen>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-1" value="1">
                            <label class="form-check-label" for="checkq76-1">
                                1. ไม่/ทุ่มเทน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-2" value="2">
                            <label class="form-check-label" for="checkq76-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-3" value="3">
                            <label class="form-check-label" for="checkq76-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-4" value="4">
                            <label class="form-check-label" for="checkq76-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q76" type="radio" name="q76" id="checkq76-5" value="5">
                            <label class="form-check-label" for="checkq76-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 77. โดยรวมแล้ว
                                ท่านทุ่มเท
                                คิดใหม่ ทำใหม่ เพื่อสร้างความก้าวหน้าให้กับมหาวิทยาลัยของท่าน เพียงใดใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-1" value="1">
                            <label class="form-check-label" for="checkq77-1">
                                1. ไม่/น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-2" value="2">
                            <label class="form-check-label" for="checkq77-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-3" value="3">
                            <label class="form-check-label" for="checkq77-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-4" value="4">
                            <label class="form-check-label" for="checkq77-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q77" type="radio" name="q77" id="checkq77-5" value="5">
                            <label class="form-check-label" for="checkq77-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 78. โดยรวมแล้ว
                                ในแต่ละวัน
                                ท่านศึกษาเล่าเรียนอย่างมีเป้าหมาย เพียงใด

                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-1" value="1">
                            <label class="form-check-label" for="checkq78-1">
                                1. ไม่/น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-2" value="2">
                            <label class="form-check-label" for="checkq78-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-3" value="3">
                            <label class="form-check-label" for="checkq78-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-4" value="4">
                            <label class="form-check-label" for="checkq78-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q78" type="radio" name="q78" id="checkq78-5" value="5">
                            <label class="form-check-label" for="checkq78-5">
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
            <script src="../jsStudent/jspage10.js"></script>


        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>