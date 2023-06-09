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
                <h4>Happy Family / ครอบครัวดี </h4>
            </div>

            <form action="page5Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 25.
                                ท่านมีเวลาอยู่กับครอบครัว เพียงพอหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-1" value="1">
                            <label class="form-check-label" for="checkq25-1">
                                1. ไม่เพียงพอ
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
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 26. ท่าน ทำกิจกรรม
                                (ออกกำลังกาย ทำบุญ ซื้อของ ฯลฯ) ร่วมกันกับคนในครอบครัว หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-1" value="1">
                            <label class="form-check-label" for="checkq26-1">
                                1. ไม่ทำ/ทำน้อยที่สุด
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
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">27.
                                โดยรวมแล้วท่านมีความสุขกับครอบครัวของท่านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-1" value="1">
                            <label class="form-check-label" for="checkq27-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-2" value="2">
                            <label class="form-check-label" for="checkq27-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-3" value="3">
                            <label class="form-check-label" for="checkq27-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-4" value="4">
                            <label class="form-check-label" for="checkq27-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-5" value="5">
                            <label class="form-check-label" for="checkq27-5">
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
            <script src="../jsStaff_s/jspage5.js"></script>

        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>