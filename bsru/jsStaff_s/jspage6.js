$(".btnsub").submit(function () {
  if ($(".q28:checked").length == "") {
    alert("28. โดยรวมแล้วเพื่อนบ้านมีความสัมพันธ์ที่ดีต่อท่านหรือไม่");
    $("#checkq28-1").focus();
    return false;
  }

  if ($(".q29:checked").length == "") {
    alert("29.โดยรวมแล้วท่านปฏิบัติตามกฎระเบียบ/ ข้อบังคับของสังคม หรือไม่");
    $("#checkq29-1").focus();
    return false;
  }
  if ($(".q30:checked").length == "") {
    alert("30.โดยรวมแล้วท่านรู้สึกปลอดภัยในชีวิตและทรัพย์สิน หรือไม่ ");
    $("#checkq30-1").focus();
    return false;
  }
  if ($(".q31:checked").length == "") {
    alert(
      "31. โดยรวมแล้วเมื่อท่านมีปัญหา ท่านสามารถขอความช่วยเหลือจากคนในชุมชน ได้หรือไม่"
    );
    $("#checkq31-1").focus();
    return false;
  }
  if ($(".q32:checked").length == "") {
    alert("32. โดยรวมแล้วท่านรู้สึกว่า สังคมไทยทุกวันนี้ มีความสงบสุข หรือไม่");
    $("#checkq32-1").focus();
    return false;
  }
  if ($(".q33:checked").length == "") {
    alert("33.โดยรวมแล้วทุกวันนี้ท่านใช้ชีวิตในสังคมอย่างมีความสุข หรือไม่");
    $("#checkq33-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
