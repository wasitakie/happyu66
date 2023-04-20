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
                <h4>Happy Money / สุขภาพเงินดี</h4>
            </div>

            <form action="page8Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 48.
                                ปัจจุบันท่านมีรายได้จากการทำงาน/ทำงานพิเศษ มากน้อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-1" value="1">
                            <label class="form-check-label" for="checkq48-1">
                                1. ไม่มีรายได้พิเศษเลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-2" value="2">
                            <label class="form-check-label" for="checkq48-2">
                                2. มีรายได้จากการทำงานเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-3" value="3">
                            <label class="form-check-label" for="checkq48-3">
                                3. มีรายได้จากการทำงานปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-4" value="4">
                            <label class="form-check-label" for="checkq48-4">
                                4. มีรายได้จากการทำงานมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-5" value="5">
                            <label class="form-check-label" for="checkq48-5">
                                5. มีรายได้จากการทำงานมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 49.
                                ท่านสามารถบริหารจัดการเรื่องเงินตามแผนการเงินที่ตั้งไว้ทุกครั้ง มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-1" value="1">
                            <label class="form-check-label" for="checkq49-1">
                                1. ไม่เป็นไปตามที่ตั้งไว้ทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-2" value="2">
                            <label class="form-check-label" for="checkq49-2">
                                2. ไม่เป็นไปตามที่ตั้งไว้บ่อยครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-3" value="3">
                            <label class="form-check-label" for="checkq49-3">
                                3. เป็นไปตามที่ตั้งไว้บ้างบางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-4" value="4">
                            <label class="form-check-label" for="checkq49-4">
                                4. ตรงตามที่ตั้งไว้เกือบทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-5" value="5">
                            <label class="form-check-label" for="checkq49-5">
                                5. ตรงตามที่ตั้งไว้ทุกครั้ง
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">50. โดยรวมแล้ว
                                ท่านมีเงินเก็บออมในแต่ละเดือน มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-1" value="1">
                            <label class="form-check-label" for="checkq50-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-2" value="2">
                            <label class="form-check-label" for="checkq50-2">
                                2. มี/เก็บออมเพียงเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-3" value="3">
                            <label class="form-check-label" for="checkq50-3">
                                3. มี/เก็บออมปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-4" value="4">
                            <label class="form-check-label" for="checkq50-4">
                                4. มี/เก็บออมมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-5" value="5">
                            <label class="form-check-label" for="checkq50-5">
                                5. มี/เก็บออมมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">51. โดยรวมแล้ว
                                รายรับที่ท่านได้รับทั้งหมดในแต่ละเดือนเป็นอย่างไร
                                เมื่อเปรียบเทียบกับรายจ่ายทั้งหมดในแต่ละเดือน
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-1" value="1">
                            <label class="form-check-label" for="checkq51-1">
                                1. รายจ่ายเกินกว่ารายได้มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-2" value="2">
                            <label class="form-check-label" for="checkq51-2">
                                2. รายจ่ายเกินกว่ารายได้เล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-3" value="3">
                            <label class="form-check-label" for="checkq51-3">
                                3. รายจ่ายพอๆ กับรายได้
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-4" value="4">
                            <label class="form-check-label" for="checkq51-4">
                                4. รายจ่ายน้อยกว่ารายได้
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-5" value="5">
                            <label class="form-check-label" for="checkq51-5">
                                5. รายจ่ายน้อยกว่ารายได้มาก
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">CV8.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติสุขภาพเงินดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-1" value="1">
                            <label class="form-check-label" for="checkcv8-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-2" value="2">
                            <label class="form-check-label" for="checkcv8-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-3" value="3">
                            <label class="form-check-label" for="checkcv8-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-4" value="4">
                            <label class="form-check-label" for="checkcv8-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-5" value="5">
                            <label class="form-check-label" for="checkcv8-5">
                                5. มีผลกระทบน้อยที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="../jsStudent/jspage8.js"></script>



        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>