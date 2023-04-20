$(".btnsub").submit(function () {
  if ($(".q33:checked").length == "") {
    alert(
      "33. โดยรวมแล้วท่านรู้สึกว่ามีเวลาอยู่กับครอบครัวเพียงพอ มากน้อยเพียงใด"
    );
    $("#checkq33-1").focus();
    return false;
  }

  if ($(".q34:checked").length == "") {
    alert(
      "34. โดยรวมแล้วท่านทำกิจกรรม (เช่น ออกกำลังกาย ทำบุญ ซื้อของ รับประทานอาหาร ท่องเที่ยว ฯลฯ)"
    );
    $("#checkq34-1").focus();
    return false;
  }
  if ($(".q35:checked").length == "") {
    alert("35. โดยรวมแล้วท่านรู้สึกว่ามีความสุขกับครอบครัวของท่านเพียงใด ");
    $("#checkq35-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
