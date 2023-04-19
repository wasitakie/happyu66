$(".btnsub").submit(function () {
  if ($(".q48:checked").length == "") {
    alert("48.ปัจจุบันท่านมีรายได้จากการทำงาน/ทำงานพิเศษ มากน้อยเพียงใด");
    $("#checkq48-1").focus();
    return false;
  }

  if ($(".q49:checked").length == "") {
    alert(
      "49.ท่านสามารถบริหารจัดการเรื่องเงินตามแผนการเงินที่ตั้งไว้ทุกครั้ง มากน้อยเพียงใด"
    );
    $("#checkq49-1").focus();
    return false;
  }
  if ($(".q50:checked").length == "") {
    alert("50. โดยรวมแล้วท่านมีเงินเก็บออมในแต่ละเดือน มากน้อยเพียงใด");
    $("#checkq50-1").focus();
    return false;
  }
  if ($(".q51:checked").length == "") {
    alert(
      "51. โดยรวมแล้วรายรับที่ท่านได้รับทั้งหมดในแต่ละเดือนเป็นอย่างไรเมื่อเปรียบเทียบกับรายจ่ายทั้งหมดในแต่ละเดือน"
    );
    $("#checkq51-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
