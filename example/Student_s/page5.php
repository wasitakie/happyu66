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
                <h4>Happy Family / ครอบครัวดี</h4>
            </div>

            <form action="page5Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 33. โดยรวมแล้ว
                                ท่านรู้สึกว่ามีเวลาอยู่กับครอบครัวเพียงพอ มากน้อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-1" value="1">
                            <label class="form-check-label" for="checkq33-1">
                                1. ไม่เพียงพอ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-2" value="2">
                            <label class="form-check-label" for="checkq33-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-3" value="3">
                            <label class="form-check-label" for="checkq33-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-4" value="4">
                            <label class="form-check-label" for="checkq33-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-5" value="5">
                            <label class="form-check-label" for="checkq33-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 34. โดยรวมแล้ว
                                ท่านทำกิจกรรม (เช่น ออกกำลังกาย ทำบุญ ซื้อของ รับประทานอาหาร ท่องเที่ยว ฯลฯ)
                                ร่วมกันกับคนใน
                                ครอบครัว มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-1" value="1">
                            <label class="form-check-label" for="checkq34-1">
                                1. ไม่ทำ/ทำน้อยที่สุดย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-2" value="2">
                            <label class="form-check-label" for="checkq34-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-3" value="3">
                            <label class="form-check-label" for="checkq34-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-4" value="4">
                            <label class="form-check-label" for="checkq34-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-5" value="5">
                            <label class="form-check-label" for="checkq34-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 35. โดยรวมแล้ว
                                ท่านรู้สึกว่ามีความสุขกับครอบครัวของท่านเพียงใด </span></label>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-1" value="1">
                            <label class="form-check-label" for="checkq35-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-2" value="2">
                            <label class="form-check-label" for="checkq35-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-3" value="3">
                            <label class="form-check-label" for="checkq35-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-4" value="4">
                            <label class="form-check-label" for="checkq35-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-5" value="5">
                            <label class="form-check-label" for="checkq35-5">
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
            <script src="../jsStudent/jspage5.js"></script>


        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>