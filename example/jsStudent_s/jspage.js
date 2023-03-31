$(document).ready(function () {
  $("#q2-4t").prop("disabled", true);
  $("#checkq2-4-10").click(function () {
    $("#q2-4t").prop("disabled", false);
    $("#q2-4t").focus();
  });
  $(".q2-4").click(function () {
    if ($("#q2-4t:checked").length == "" && $(".q2-4:checked").length != "") {
      $("#q2-4t").prop("disabled", true);
      $("#q2-4t").val("");
    }
  });
});

$(".btnsub").submit(function () {
  if ($(".sex:checked").length == "") {
    alert("2.1 เพศ");
    $("#checksex-1").focus();
    return false;
  }

  var age = $(".age").val();

  if (age == "") {
    alert("2.2 อายุ");
    $("#age").focus();
    return false;
  }
  if (age.match(/[^0-9]/g)) {
    alert("1.ระบุเป็นตัวเลขเท่านั้น");
    $("#age").focus();
    return false;
  }

  if ($(".q2-3:checked").length == "") {
    alert(
      "2.3 มหาวิทยาลัยที่ท่านศึกษาอยู่ในปัจจุบันเป็นจังหวัดเดียวกับภูมิลำเนาของท่านหรือไม่"
    );
    $("#checkq2-3-1").focus();
    return false;
  }
  if ($(".q2-4:checked").length == "") {
    alert(
      "2.4 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)"
    );
    $("#checkq2-4-1").focus();
    return false;
  }
  if ($(".q2-5:checked").length == "") {
    alert("2.5 ท่านกำลังเรียนอยู่ชั้นปีใด");
    $("#checkq2-5-1").focus();
    return false;
  }

  var status = confirm("กรุณายืนยันการบันทึกข้อมูลอีกครั้ง");
  if (status == false) {
    return false;
  } else {
    return true;
  }
});
