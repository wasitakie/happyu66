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
                <h4>Happy Mind / ผ่อนคลายดี </h4>
            </div>
            <form action="page2Insert.php" method="post" class="btnsub">

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 12. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการเบื่อ ไม่สนใจ ไม่อยากทำอะไรเลย
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-1" value="1">
                            <label class="form-check-label" for="checkq12-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-2" value="2">
                            <label class="form-check-label" for="checkq12-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-3" value="3">
                            <label class="form-check-label" for="checkq12-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-4" value="4">
                            <label class="form-check-label" for="checkq12-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-5" value="5">
                            <label class="form-check-label" for="checkq12-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 13. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการเบื่ออาหาร หรือ กินมากเกินไป
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-1" value="1">
                            <label class="form-check-label" for="checkq13-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-2" value="2">
                            <label class="form-check-label" for="checkq13-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-3" value="3">
                            <label class="form-check-label" for="checkq13-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-4" value="4">
                            <label class="form-check-label" for="checkq13-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-5" value="5">
                            <label class="form-check-label" for="checkq13-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 14. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการเหนื่อยง่าย หรือ ไม่ค่อยมีแรง
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-1" value="1">
                            <label class="form-check-label" for="checkq14-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-2" value="2">
                            <label class="form-check-label" for="checkq14-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-3" value="3">
                            <label class="form-check-label" for="checkq14-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-4" value="4">
                            <label class="form-check-label" for="checkq14-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-5" value="5">
                            <label class="form-check-label" for="checkq14-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 15. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการหลับยาก หรือ หลับ ๆ ตื่น ๆ
                                หรือหลับมากไป
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-1" value="1">
                            <label class="form-check-label" for="checkq15-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-2" value="2">
                            <label class="form-check-label" for="checkq15-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-3" value="3">
                            <label class="form-check-label" for="checkq15-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-4" value="4">
                            <label class="form-check-label" for="checkq15-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-5" value="5">
                            <label class="form-check-label" for="checkq15-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 16. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการไม่สบายใจ หรือ ท้อแท้ หรือ ซึมเศร้า
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-1" value="1">
                            <label class="form-check-label" for="checkq16-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-2" value="2">
                            <label class="form-check-label" for="checkq16-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-3" value="3">
                            <label class="form-check-label" for="checkq16-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-4" value="4">
                            <label class="form-check-label" for="checkq16-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-5" value="5">
                            <label class="form-check-label" for="checkq16-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 17. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกหรือมีอาการสมาธิไม่ดี เวลาทำอะไร เช่น ดูทีวี
                                ฟังเพลง
                                เล่นเน็ต หรือทำงานที่ต้องใช้ความตั้งใจ หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-1" value="1">
                            <label class="form-check-label" for="checkq17-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-2" value="2">
                            <label class="form-check-label" for="checkq17-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-3" value="3">
                            <label class="form-check-label" for="checkq17-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-4" value="4">
                            <label class="form-check-label" for="checkq17-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-5" value="5">
                            <label class="form-check-label" for="checkq17-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 18. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลว
                                ทำให้ตนเองหรือครอบครัวผิดหวัง หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-1" value="1">
                            <label class="form-check-label" for="checkq18-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-2" value="2">
                            <label class="form-check-label" for="checkq18-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-3" value="3">
                            <label class="form-check-label" for="checkq18-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-4" value="4">
                            <label class="form-check-label" for="checkq18-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-5" value="5">
                            <label class="form-check-label" for="checkq18-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 19. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกว่าทำอะไรช้าลงจนคนอื่นสังเกตเห็นได้ หรือ
                                กระสับกระส่าย ไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-1" value="1">
                            <label class="form-check-label" for="checkq19-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-2" value="2">
                            <label class="form-check-label" for="checkq19-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-3" value="3">
                            <label class="form-check-label" for="checkq19-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-4" value="4">
                            <label class="form-check-label" for="checkq19-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-5" value="5">
                            <label class="form-check-label" for="checkq19-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 20. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านรู้สึกว่า ถ้าเราตายไปคงจะดี หรือเคยคิดฆ่าตัวตาย
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-1" value="1">
                            <label class="form-check-label" for="checkq20-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-2" value="2">
                            <label class="form-check-label" for="checkq20-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-3" value="3">
                            <label class="form-check-label" for="checkq20-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-4" value="4">
                            <label class="form-check-label" for="checkq20-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-5" value="5">
                            <label class="form-check-label" for="checkq20-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 21. ในช่วง 2
                                อาทิตย์ที่ผ่านมารวมทั้งวันนี้ ท่านเคยทำร้ายตัวเอง หรือ เคยพยายามฆ่าตัวตาย
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-1" value="1">
                            <label class="form-check-label" for="checkq21-1">
                                1. เป็นทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-2" value="2">
                            <label class="form-check-label" for="checkq21-2">
                                2. เป็นบ่อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-3" value="3">
                            <label class="form-check-label" for="checkq21-3">
                                3. เป็นบางวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-4" value="4">
                            <label class="form-check-label" for="checkq21-4">
                                4. เป็นน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-5" value="5">
                            <label class="form-check-label" for="checkq21-5">
                                5. ไม่เป็นเลย
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> CV2.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติผ่อนคลายดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-1" value="1">
                            <label class="form-check-label" for="checkcv2-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-2" value="2">
                            <label class="form-check-label" for="checkcv2-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-3" value="3">
                            <label class="form-check-label" for="checkcv2-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-4" value="4">
                            <label class="form-check-label" for="checkcv2-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-5" value="5">
                            <label class="form-check-label" for="checkcv2-5">
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
            <script src="../jsStudent/jspage2.js"></script>






        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>