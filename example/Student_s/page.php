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
            <form action="pageInsert.php" method="post" class="btnsub">

                <div class="headpage">
                    <h4>ส่วนที่ 1: ข้อมูลหน่วยงาน</h4>
                </div>
                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="text" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        1.1 ชื่อ มหาวิทยาลัย</span></label>

                                <div class="form-check">
                                    <label type="text" for="formGroupExampleInput" class="form-label">มหาวิทยาลัยราชภัฏหมู่บ้านจอมบึง </label>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="text" for="formGroupExampleInput " class="form-label">
                                    <span class="textQ">
                                        1.2 ชื่อส่วนงาน (คณะ/สถาบัน/วิทยาลัย) </span></label>
                                <select class="form-select a2" name="a2" aria-label="Default select example" id="a2">
                                    <option value="0">ชื่อส่วนงาน (คณะ/สถาบัน/วิทยาลัย/ศูนย์/สำนัก)</option>
                                    <option value="1.คณะครุศาสตร์">1. คณะครุศาสตร์</option>
                                    <option value="2.คณะวิทยาศาสตร์และเทคโนโลยี">2. คณะวิทยาศาสตร์และเทคโนโลยี</option>
                                    <option value="3.คณะวิทยาการจัดการ">3. คณะวิทยาการจัดการ</option>
                                    <option value="4.คณะมนุษยศาสตร์และสังคมศาสตร์">4. คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                    <option value="5.วิทยาลัยมวยไทยศึกษาและการแพทย์แผนไทย">5. วิทยาลัยมวยไทยศึกษาและการแพทย์แผนไทย</option>
                                    <option value="6.คณะเทคโนโลยีอุตสาหกรรม">6. คณะเทคโนโลยีอุตสาหกรรม</option>
                                    <option value="7.คณะพยาบาลศาสตร์">7. คณะพยาบาลศาสตร์</option>
                                    <option value="8.คณะอื่น ๆ ในมหาวิทยาลัย">8. คณะอื่น ๆ ในมหาวิทยาลัย</option>



                                </select>


                            </div>
                        </div>
                    </div>

                </div>



                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="text" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        1.3 โดยรวมแล้วท่านเข้าร่วมกิจกรรม/ชมรมต่าง ๆ ในมหาวิทยาลัย (กิจกรรมใดก็ได้ที่เป็นหรือไม่เป็นสมาชิก) บ่อยครั้งเพียงใด</span></label>
                                <div class="form-check">
                                    <input class="form-check-input a3" type="radio" name="a3" id="checka3-1" value="1">
                                    <label class="form-check-label" for="checka3-1">
                                        1. ไม่เคยเข้าร่วมเลย
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input a3" type="radio" name="a3" id="checka3-2" value="2">
                                    <label class="form-check-label" for="checka3-2">
                                        2. เข้าร่วมน้อยครั้ง
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input a3" type="radio" name="a3" id="checka3-3" value="3">
                                    <label class="form-check-label" for="checka3-3">
                                        3. เข้าร่วมบางครั้ง/เท่าที่จำเป็น
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input a3" type="radio" name="a3" id="checka3-4" value="4">
                                    <label class="form-check-label" for="checka3-4">
                                        4. เข้าร่วมบ่อยครั้ง
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input a3" type="radio" name="a3" id="checka3-5" value="5">
                                    <label class="form-check-label" for="checka3-5">
                                        5. เข้าร่วมประจำ/ทุกครั้ง
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="headpage">
                    <h4>ส่วนที่ 2: ข้อมูลทั่วไป </h4>
                </div>



                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="number" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        2.1 เพศ</span></label>
                                <div class="form-check">
                                    <input class="form-check-input sex" type="radio" name="sex" id="checksex-1" value="1">
                                    <label class="form-check-label" for="checksex-1">
                                        1. ชาย
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input sex" type="radio" name="sex" id="checksex-2" value="2">
                                    <label class="form-check-label" for="checksex-2">
                                        2. หญิง
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input sex" type="radio" name="sex" id="checksex-3" value="3">
                                    <label class="form-check-label" for="checksex-3">
                                        3. เพศหลากหลาย
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="box">
                    <div class="question">
                        <label type="number" for="formGroupExampleInput" class="form-label"><span class="textQ"> 2.2 อายุ</span></label>
                        <div class="mb-3">
                            <input type="number" class="form-control age" style="width:100px" name="age" placeholder="อายุ......ปี" onKeyPress="if(this.value.length==3)">
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.3 มหาวิทยาลัยที่ท่านศึกษาอยู่ในปัจจุบันเป็นจังหวัดเดียวกับภูมิลำเนาของท่านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-3" type="radio" name="q2-3" id="checkq2-3-1" value="1">
                            <label class="form-check-label" for="checkq2-3-1">
                                1. ใช่
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-3" type="radio" name="q2-3" id="checkq2-3-2" value="2">
                            <label class="form-check-label" for="checkq2-3-2">
                                2. ไม่ใช่
                            </label>
                        </div>

                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.4 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_1" type="checkbox" value="1" id="checkq2-4-1">
                            <label class="form-check-label" for="checkq2-4-1">
                                1. อยู่คนเดียว
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_2" type="checkbox" value="2" id="checkq2-4-2">
                            <label class="form-check-label" for="checkq2-4-2">
                                2. คู่สมรส (สามี/ภรรยา)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_3" type="checkbox" value="3" id="checkq2-4-3">
                            <label class="form-check-label" for="checkq2-4-3">
                                3. พี่/น้อง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_4" type="checkbox" value="4" id="checkq2-4-4">
                            <label class="form-check-label" for="checkq2-4-4">
                                4. พ่อแม่/พ่อแม่บุญธรรม/พ่อแม่เลี้ยง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_5" type="checkbox" value="5" id="checkq2-4-5">
                            <label class="form-check-label" for="checkq2-4-5">
                                5. ปู่ ย่า ตา ยาย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_6" type="checkbox" value="6" id="checkq2-4-6">
                            <label class="form-check-label" for="checkq2-4-6">
                                6. ลูก/ลูกบุญธรรม/ลูกเลี้ยง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_7" type="checkbox" value="7" id="checkq2-4-7">
                            <label class="form-check-label" for="checkq2-4-7">
                                7. ญาติ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_8" type="checkbox" value="8" id="checkq2-4-8">
                            <label class="form-check-label" for="checkq2-4-8">
                                8. เพื่อน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" name="q2_4_9" type="checkbox" value="9" id="checkq2-4-9">
                            <label class="form-check-label" for="checkq2-4-9">
                                9. คนรัก/แฟน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4-10" name="q2_4_10" type="checkbox" value="10" id="checkq2-4-10">
                            <label class="form-check-label" for="checkq2-4-10">
                                10. อื่น ๆ ระบุ
                                <input type="text" class="form-control " id="q2-4t" style="width:200px" name="q2-4t" placeholder="ระบุ">
                            </label>
                        </div>

                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 2.5 ท่านกำลังเรียนอยู่ชั้นปีใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-5" type="radio" name="q2-5" id="checkq2-5-1" value="1">
                            <label class="form-check-label" for="checkq2-5-1">
                                1. ปีที่ 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" type="radio" name="q2-5" id="checkq2-5-2" value="2">
                            <label class="form-check-label" for="checkq2-5-2">
                                2. ปีที่ 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" type="radio" name="q2-5" id="checkq2-5-3" value="3">
                            <label class="form-check-label" for="checkq2-5-3">
                                3. ปีที่ 3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" type="radio" name="q2-5" id="checkq2-5-4" value="4">
                            <label class="form-check-label" for="checkq2-5-4">
                                4. ปีที่ 4
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" type="radio" name="q2-5" id="checkq2-5-5" value="5">
                            <label class="form-check-label" for="checkq2-5-5">
                                5. ปีที่ 5
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" type="radio" name="q2-5" id="checkq2-5-6" value="5">
                            <label class="form-check-label" for="checkq2-5-6">
                                6. ปีที่ 6
                            </label>
                        </div>
                    </div>
                </div>




                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>


            </form>

            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="../jsStudent_s/jspage.js"></script>









        </div>
    </div>

    <?php include '../title/footer.php' ?>
</body>

</html>