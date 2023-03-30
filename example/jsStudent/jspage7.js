$(".btnsub").submit(function () {
  if ($(".q45:checked").length == "") {
    alert(
      "45. โดยรวมแล้วท่านสนใจแสวงหาความรู้ใหม่ ๆ เพิ่มเติมจากแหล่งความรู้ต่าง ๆเพียงใดมากน้อยเพียงใด"
    );
    $("#checkq45-1").focus();
    return false;
  }

  if ($(".q46:checked").length == "") {
    alert(
      "46. โดยรวมแล้วท่านสนใจที่จะพัฒนาตนเอง เพื่อความก้าวหน้าในชีวิต เพียงใด"
    );
    $("#checkq46-1").focus();
    return false;
  }
  if ($(".q47:checked").length == "") {
    alert(
      "47. โดยรวมแล้ว่านมีโอกาสที่จะได้รับการอบรม/ศึกษาต่อ/ดูงาน เพื่อพัฒนาทักษะและความสามารถของตนเองเพียงใด"
    );
    $("#checkq47-1").focus();
    return false;
  }

  if ($(".cv7:checked").length == "") {
    alert(
      "CV7.สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติใฝ่รู้ดีของท่านเพียงใด"
    );
    $("#checkcv7-1").focus();
    return false;
  }

  var status = confirm("ok");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
