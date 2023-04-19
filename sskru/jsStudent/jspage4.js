$(".btnsub").submit(function () {
  if ($(".q27:checked").length == "") {
    alert(
      "27. โดยทั่วไปเมื่อท่านประสบปัญหาในชีวิต ท่านสามารถใช้สติจัดการกับปัญหาได้มากน้อยเพียงใด"
    );
    $("#checkq27-1").focus();
    return false;
  }

  if ($(".q28:checked").length == "") {
    alert(
      "28. โดยรวมแล้ว ท่านปฏิบัติกิจทางศาสนาเพื่อให้จิตใจสงบ มากน้อยเพียงใด"
    );
    $("#checkq28-1").focus();
    return false;
  }
  if ($(".q29:checked").length == "") {
    alert(
      "29.โดยรวมแล้วท่านมีสมาธิที่สามารถนำไปประยุกต์ใช้กับชีวิตประจำวัน เช่น ลดความเครียดผ่อนคลายทั้งกายและใจ รวมถึงช่วยเพิ่มประสิทธิภาพในการเรียนและการทำงาน มากน้อยเพียงใดด "
    );
    $("#checkq29-1").focus();
    return false;
  }
  if ($(".q30:checked").length == "") {
    alert(
      "30. โดยรวมแล้วท่านยกโทษและให้อภัยอย่างจริงใจต่อผู้ที่สำนึกผิด เพียงใด"
    );
    $("#checkq30-1").focus();
    return false;
  }
  if ($(".q31:checked").length == "") {
    alert(
      "31. โดยรวมแล้วท่านยอมรับและขอโทษในความผิดที่ทำหรือมีส่วนรับผิดชอบ เพียงใด"
    );
    $("#checkq31-1").focus();
    return false;
  }
  if ($(".q32:checked").length == "") {
    alert("32. โดยรวมแล้วท่านตอบแทนผู้มีพระคุณหรือช่วยเหลือท่าน เพียงใด");
    $("#checkq32-1").focus();
    return false;
  }

  if ($(".cv4:checked").length == "") {
    alert(
      "CV4.สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติจิตวิญญาณดีของท่านเพียงใดของท่านเพียงใด"
    );
    $("#checkcv4-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
