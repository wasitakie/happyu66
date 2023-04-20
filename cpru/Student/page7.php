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
                <h4>Happy Brain / ใฝ่รู้ดี</h4>
            </div>

            <form action="page7Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 45. โดยรวมแล้ว
                                ท่านสนใจแสวงหาความรู้ใหม่ ๆ เพิ่มเติมจากแหล่งความรู้ต่าง ๆ
                                เพียงใดมากน้อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-1" value="1">
                            <label class="form-check-label" for="checkq45-1">
                                1. ไม่สนใจ/สนใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-2" value="2">
                            <label class="form-check-label" for="checkq45-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-3" value="3">
                            <label class="form-check-label" for="checkq45-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-4" value="4">
                            <label class="form-check-label" for="checkq45-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-5" value="5">
                            <label class="form-check-label" for="checkq45-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 46. โดยรวมแล้ว
                                ท่านสนใจที่จะพัฒนาตนเอง เพื่อความก้าวหน้าในชีวิต เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-1" value="1">
                            <label class="form-check-label" for="checkq46-1">
                                1. ไม่สนใจ/สนใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-2" value="2">
                            <label class="form-check-label" for="checkq46-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-3" value="3">
                            <label class="form-check-label" for="checkq46-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-4" value="4">
                            <label class="form-check-label" for="checkq46-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-5" value="5">
                            <label class="form-check-label" for="checkq46-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">47. โดยรวมแล้ว
                                ท่านมีโอกาสที่จะได้รับการอบรม/ศึกษาต่อ/ดูงาน เพื่อพัฒนาทักษะและความสามารถของตนเอง
                                เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-1" value="1">
                            <label class="form-check-label" for="checkq47-1">
                                1. ไม่มีโอกาส/มีโอกาสน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-2" value="2">
                            <label class="form-check-label" for="checkq47-2">
                                2. มีโอกาสน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-3" value="3">
                            <label class="form-check-label" for="checkq47-3">
                                3. มีโอกาสปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-4" value="4">
                            <label class="form-check-label" for="checkq47-4">
                                4. มีโอกาสมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-5" value="5">
                            <label class="form-check-label" for="checkq47-5">
                                5. มีโอกาสมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> CV7.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติใฝ่รู้ดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv7" type="radio" name="cv7" id="checkcv7-1" value="1">
                            <label class="form-check-label" for="checkcv7-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv7" type="radio" name="cv7" id="checkcv7-2" value="2">
                            <label class="form-check-label" for="checkcv7-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv7" type="radio" name="cv7" id="checkcv7-3" value="3">
                            <label class="form-check-label" for="checkcv7-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv7" type="radio" name="cv7" id="checkcv7-4" value="4">
                            <label class="form-check-label" for="checkcv7-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv7" type="radio" name="cv7" id="checkcv7-5" value="5">
                            <label class="form-check-label" for="checkcv7-5">
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
            <script src="../jsStudent/jspage7.js"></script>


        </div>
    </div>

    <?php include '../title/footer.php' ?>
</body>

</html>