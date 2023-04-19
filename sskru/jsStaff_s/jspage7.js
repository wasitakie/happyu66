$(".btnsub").submit(function () {
  if ($(".q34:checked").length == "") {
    alert("34.โดยรวมแล้วท่านสนใจในการแสวงหาความรู้ใหม่ ๆ ");
    $("#checkq34-1").focus();
    return false;
  }

  if ($(".q35:checked").length == "") {
    alert("35. โดยรวมแล้วท่านสนใจที่จะพัฒนาตนเอง");
    $("#checkq35-1").focus();
    return false;
  }
  if ($(".q36:checked").length == "") {
    alert("36. ท่านมีโอกาสที่จะได้รับการอบรม/ ศึกษาต่อ/ ดูงาน");
    $("#checkq36-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
