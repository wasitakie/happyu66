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
                <h4>Happy Study / การเรียนดี </h4>
            </div>

            <form action="page9Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 52.
                                การเรียนของท่านมีความท้าทายและส่งเสริมให้ท่านได้เรียนรู้สิ่งใหม่ ๆ
                                เพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-1" value="1">
                            <label class="form-check-label" for="checkq52-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-2" value="2">
                            <label class="form-check-label" for="checkq52-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-3" value="3">
                            <label class="form-check-label" for="checkq52-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-4" value="4">
                            <label class="form-check-label" for="checkq52-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-5" value="5">
                            <label class="form-check-label" for="checkq52-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 53. ท่านรู้สึกว่า
                                การเรียนของท่านมีความชัดเจนของโอกาสในการประกอบอาชีพในอนาคต และสร้างความมั่นคงในชีวิต
                                เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-1" value="1">
                            <label class="form-check-label" for="checkq53-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-2" value="2">
                            <label class="form-check-label" for="checkq53-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-3" value="3">
                            <label class="form-check-label" for="checkq53-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-4" value="4">
                            <label class="form-check-label" for="checkq53-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-5" value="5">
                            <label class="form-check-label" for="checkq53-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">54. ท่านรู้สึกว่า
                                การเรียนของท่านจะช่วยให้ท่านมีงานทำภายใน 1 ปีหลังเรียนจบ มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-1" value="1">
                            <label class="form-check-label" for="checkq54-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-2" value="2">
                            <label class="form-check-label" for="checkq54-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-3" value="3">
                            <label class="form-check-label" for="checkq54-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-4" value="4">
                            <label class="form-check-label" for="checkq54-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-5" value="5">
                            <label class="form-check-label" for="checkq54-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 55.
                                ท่านสามารถแสดงความคิดเห็นและมีส่วนร่วมกับการเรียนการสอน
                                และการพัฒนาหลักสูตรร่วมกับอาจารย์หรือภาควิชา/คณะ/มหาวิทยาลัย (เช่น
                                แบบประเมิน/การแสดงความคิดเห็นในชั้นเรียน/ที่ประชุม) มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-1" value="1">
                            <label class="form-check-label" for="checkq55-1">
                                1. ไม่มีส่วนร่วม/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-2" value="2">
                            <label class="form-check-label" for="checkq55-2">
                                2. มีส่วนร่วมบ้างเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-3" value="3">
                            <label class="form-check-label" for="checkq55-3">
                                3. มีส่วนร่วมปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-4" value="4">
                            <label class="form-check-label" for="checkq55-4">
                                4. มีส่วนร่วมมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-5" value="5">
                            <label class="form-check-label" for="checkq55-5">
                                5. มีส่วนร่วมมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">56. ท่านได้รับ
                                การปฏิบัติอย่างถูกต้องตามสิทธิที่นักศึกษาพึงได้ จากมหาวิทยาลัยของท่าน เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-1" value="1">
                            <label class="form-check-label" for="checkq56-1">
                                1. ไม่ได้เลย/ได้รับน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-2" value="2">
                            <label class="form-check-label" for="checkq56-2">
                                2. ได้รับเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-3" value="3">
                            <label class="form-check-label" for="checkq56-3">
                                3. ได้รับพอสมควร
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-4" value="4">
                            <label class="form-check-label" for="checkq56-4">
                                4. ได้รับมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-5" value="5">
                            <label class="form-check-label" for="checkq56-5">
                                5. ได้รับมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">57.
                                ท่านมีเสรีภาพในการสวมหรือไม่สวมเครื่องแบบ เข้าชั้นเรียน เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-1" value="1">
                            <label class="form-check-label" for="checkq57-1">
                                1. ไม่มีเลย/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-2" value="2">
                            <label class="form-check-label" for="checkq57-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-3" value="3">
                            <label class="form-check-label" for="checkq57-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-4" value="4">
                            <label class="form-check-label" for="checkq57-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-5" value="5">
                            <label class="form-check-label" for="checkq57-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 58.
                                ท่านได้รับการพิจารณาผลการเรียน/คะแนน/เกรด/การเลื่อนชั้นเรียนในปีที่ผ่านมาด้วยความเหมาะสม
                                เพียงใด</spen></label>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-1" value="1">
                            <label class="form-check-label" for="checkq58-1">
                                1. ไม่เหมาะสม/เหมาะสมน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-2" value="2">
                            <label class="form-check-label" for="checkq58-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-3" value="3">
                            <label class="form-check-label" for="checkq58-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-4" value="4">
                            <label class="form-check-label" for="checkq58-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-5" value="5">
                            <label class="form-check-label" for="checkq58-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>






                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 59. ท่านได้รับการดูแล
                                ให้คำปรึกษาเมื่อมีปัญหาทางการเรียน/ปัญหาอื่น ๆ จากมหาวิทยาลัยของท่าน เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-1" value="1">
                            <label class="form-check-label" for="checkq59-1">
                                1. ไม่เคยได้รับเลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-2" value="2">
                            <label class="form-check-label" for="checkq59-2">
                                2. ส่วนใหญ่ไม่เคยได้รับ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-3" value="3">
                            <label class="form-check-label" for="checkq59-3">
                                3. ได้รับบ้างเป็นบางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-4" value="4">
                            <label class="form-check-label" for="checkq59-4">
                                4. ได้รับเกือบทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-5" value="5">
                            <label class="form-check-label" for="checkq59-5">
                                5. ได้รับทุกครั้ง
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 60. โดยรวมแล้ว
                                ท่านพึงพอใจกับการให้บริการ/การมีปฏิสัมพันธ์กับบุคลากรของมหาวิทยาลัย เพียงใด</spen>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-1" value="1">
                            <label class="form-check-label" for="checkq60-1">
                                1. ไม่พอใจเลย/พอใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-2" value="2">
                            <label class="form-check-label" for="checkq60-2">
                                2. พอใจน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-3" value="3">
                            <label class="form-check-label" for="checkq60-3">
                                3. พอใจปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-4" value="4">
                            <label class="form-check-label" for="checkq60-4">
                                4. พอใจมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-5" value="5">
                            <label class="form-check-label" for="checkq60-5">
                                5. พอใจมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 61. ท่านมองเห็นว่า
                                ความรู้ที่ได้รับคุ้มค่ากับการลงทุนทางการศึกษา (ค่าเล่าเรียน/
                                เวลาและความอุตสาหะที่ใช้ไปในการเรียน ฯลฯ) เพียงใด</spen></label>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-1" value="1">
                            <label class="form-check-label" for="checkq61-1">
                                1. ไม่คุ้มค่า/คุ้มค่าน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-2" value="2">
                            <label class="form-check-label" for="checkq61-2">
                                2. คุ้มค่าน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-3" value="3">
                            <label class="form-check-label" for="checkq61-3">
                                3. คุ้มค่าปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-4" value="4">
                            <label class="form-check-label" for="checkq61-4">
                                4. คุ้มค่ามาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-5" value="5">
                            <label class="form-check-label" for="checkq61-5">
                                5. คุ้มค่ามากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 62. โดยรวมแล้ว
                                ท่านได้รับการดูแลเกี่ยวกับสุขภาพที่ดีจากมหาวิทยาลัย เพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-1" value="1">
                            <label class="form-check-label" for="checkq62-1">
                                1. ไม่ได้รับ/ได้รับน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-2" value="2">
                            <label class="form-check-label" for="checkq62-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-3" value="3">
                            <label class="form-check-label" for="checkq62-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-4" value="4">
                            <label class="form-check-label" for="checkq62-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-5" value="5">
                            <label class="form-check-label" for="checkq62-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 63.
                                ท่านพึงพอใจต่อสภาพแวดล้อมโดยรวมของมหาวิทยาลัย เพียงใด</spen></label>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-1" value="1">
                            <label class="form-check-label" for="checkq63-1">
                                1. ไม่พอใจเลย/พอใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-2" value="2">
                            <label class="form-check-label" for="checkq63-2">
                                2. พอใจน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-3" value="3">
                            <label class="form-check-label" for="checkq63-3">
                                3. พอใจปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-4" value="4">
                            <label class="form-check-label" for="checkq63-4">
                                4. พอใจมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-5" value="5">
                            <label class="form-check-label" for="checkq63-5">
                                5. พอใจมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 64. โดยรวมแล้ว
                                ท่านพึงพอใจกับสวัสดิการและสิ่งอำนวยความสะดวกต่าง ๆ ที่มหาวิทยาลัยจัดให้ เพียงใด</spen>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-1" value="1">
                            <label class="form-check-label" for="checkq64-1">
                                1. ไม่พอใจเลย/พอใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-2" value="2">
                            <label class="form-check-label" for="checkq64-2">
                                2. พอใจน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-3" value="3">
                            <label class="form-check-label" for="checkq64-3">
                                3. พอใจปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-4" value="4">
                            <label class="form-check-label" for="checkq64-4">
                                4. พอใจมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-5" value="5">
                            <label class="form-check-label" for="checkq64-5">
                                5. พอใจมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 65. โดยรวมแล้ว
                                มหาวิทยาลัยของท่านให้ความสำคัญกับการทำงานกลุ่ม/กิจกรรมกลุ่ม/ชมรม/ร่วมแรงร่วมใจทำงานเป็นทีม
                                เพียงใด

                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-1" value="1">
                            <label class="form-check-label" for="checkq65-1">
                                1. ไม่ให้/ให้น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-2" value="2">
                            <label class="form-check-label" for="checkq65-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-3" value="3">
                            <label class="form-check-label" for="checkq65-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-4" value="4">
                            <label class="form-check-label" for="checkq65-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-5" value="5">
                            <label class="form-check-label" for="checkq65-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 66. โดยรวมแล้ว
                                ท่านสนิทกับเพื่อนร่วมชั้นเรียน/เพื่อนในมหาวิทยาลัยของท่าน มากน้อยเพียงใด

                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-1" value="1">
                            <label class="form-check-label" for="checkq66-1">
                                1. ไม่สนิท/สนิทน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-2" value="2">
                            <label class="form-check-label" for="checkq66-2">
                                2. สนิทน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-3" value="3">
                            <label class="form-check-label" for="checkq66-3">
                                3. สนิทปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-4" value="4">
                            <label class="form-check-label" for="checkq66-4">
                                4. สนิทมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-5" value="5">
                            <label class="form-check-label" for="checkq66-5">
                                5. สนิทมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 67. โดยรวมแล้ว
                                ท่านสื่อสารพูดคุย/ปรึกษาหารือ/แลกเปลี่ยนความรู้สึก ความคิดเห็น ได้อย่างสนิทใจกับเพื่อนใน
                                มหาวิทยาลัย เพียงใด

                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-1" value="1">
                            <label class="form-check-label" for="checkq67-1">
                                1. ไม่สื่อสารเลย/สื่อสารน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-2" value="2">
                            <label class="form-check-label" for="checkq67-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-3" value="3">
                            <label class="form-check-label" for="checkq67-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-4" value="4">
                            <label class="form-check-label" for="checkq67-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-5" value="5">
                            <label class="form-check-label" for="checkq67-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 68.
                                โดยรวมแล้วในมหาวิทยาลัยของท่านมีการถ่ายทอดแลกเปลี่ยนแบบอย่างการเรียนและการใช้ชีวิตในรั้วมหาวิทยาลัยระหว่าง
                                รุ่นพี่รุ่นน้อง เพียงใด

                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-1" value="1">
                            <label class="form-check-label" for="checkq68-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-2" value="2">
                            <label class="form-check-label" for="checkq68-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-3" value="3">
                            <label class="form-check-label" for="checkq68-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-4" value="4">
                            <label class="form-check-label" for="checkq68-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-5" value="5">
                            <label class="form-check-label" for="checkq68-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>












                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 69. โดยรวมแล้ว
                                ท่านเรียนอย่าง มี “ความสุข” มากน้อยเพียงใด
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-1" value="1">
                            <label class="form-check-label" for="checkq69-1">
                                1. ไม่มี/มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-2" value="2">
                            <label class="form-check-label" for="checkq69-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-3" value="3">
                            <label class="form-check-label" for="checkq69-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-4" value="4">
                            <label class="form-check-label" for="checkq69-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-5" value="5">
                            <label class="form-check-label" for="checkq69-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> CV9.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติการเรียนดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-1" value="1">
                            <label class="form-check-label" for="checkcv9-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-2" value="2">
                            <label class="form-check-label" for="checkcv9-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-3" value="3">
                            <label class="form-check-label" for="checkcv9-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-4" value="4">
                            <label class="form-check-label" for="checkcv9-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-5" value="5">
                            <label class="form-check-label" for="checkcv9-5">
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
            <script src="../jsStudent/jspage9.js"></script>
        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>