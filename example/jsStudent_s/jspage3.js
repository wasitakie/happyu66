$(".btnsub").submit(function () {
  if ($(".q22:checked").length == "") {
    alert("22. โดยรวมแล้วท่านรู้สึกเอื้ออาทร/ห่วงใยคนรอบข้างเพียงใด");
    $("#checkq22-1").focus();
    return false;
  }

  if ($(".q23:checked").length == "") {
    alert("23. โดยรวมแล้วท่านให้การช่วยเหลือแก่คนรอบข้างเพียงใด");
    $("#checkq23-1").focus();
    return false;
  }
  if ($(".q24:checked").length == "") {
    alert(
      "24.ท่านได้ใช้เวลาทำกิจกรรมของมหาวิทยาลัยเพื่อบำเพ็ญสาธารณประโยชน์ เช่น อาสาพัฒนาอนุรักษ์สิ่งแวดล้อม มากน้อยเพียงใด "
    );
    $("#checkq24-1").focus();
    return false;
  }
  if ($(".q25:checked").length == "") {
    alert(
      "25.ท่านได้ใช้เวลาทำกิจกรรมตามขนบธรรมเนียมประเพณีไทยและท้องถิ่น และกิจกรรมในวันสำคัญต่าง ๆ ของมหาวิทยาลัย มากน้อยเพียงใด"
    );
    $("#checkq25-1").focus();
    return false;
  }
  if ($(".q26:checked").length == "") {
    alert(
      "26.ท่านได้ใช้เวลาทำกิจกรรมเพื่อสานสัมพันธ์ระหว่างนักศึกษาในมหาวิทยาลัยของท่าน เช่นการรับน้องการเข้าค่าย มากน้อยเพียงใด"
    );
    $("#checkq26-1").focus();
    return false;
  }

  if ($(".cv3:checked").length == "") {
    alert(
      "CV3.สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติน้ำใจดของท่านเพียงใด"
    );
    $("#checkcv3-1").focus();
    return false;
  }

  var status = confirm("ok");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
