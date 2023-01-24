<?php
include('../nav/index.php');
?>
<body onload="getLocation();">
<div style="background:#FFFFFF;padding: 12px 12px 0px 12px;">
<div style="text-align: center;">
<h3><b>CHECK-IN</b></h3>
<h4>ลงเวลาเข้างาน</h4>
</div>
<form class="myForm" action="../checkin/" method="post">
<input type="hidden" name="dateinid" value="<?php echo $rowdateon['dateinid']; ?>">
<input type="hidden" name="dateinname" value="<?php echo $rowdateon['dateinname']; ?>">
<input type="hidden" name="mid" value="<?php echo $mid; ?>">
<input type="hidden" name="mname" value="<?php echo $mname; ?>">
	<div class="row">
		<div class="col-md-4"></div>
			<div class="col-md-4">
			<img style="display:block;margin: auto;" src="../../images/checkin.png" height="100">
			<h6 style="text-align: justify-all;padding: 12px 0px 12px 0px;"><b>คำชี้แจง</b> : ระบบให้กดยืนยันลงเวลาเข้างานได้เพียงครั้งเดียวในแต่ละวัน หลังจากกดยืนยันแล้วระบบจะแสดงรายงานการลงเวลาเข้าทำงานในวันที่ปัจจุบันและย้อนหลังไปอีก 9 วัน ทั้งนี้ก่อนกดยืนยันต้องแน่ใจว่ามือถือที่ใช้ลงเวลาเปิด GPS Location เพื่อให้ระบบเข้าถึงตำแหน่งที่อยู่ปัจจุบัน</h6>
			</div>

			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
			<div class="input-group">
			<input type="hidden" name="latitude" class="form-control" value="">
			</div>
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
			<div class="input-group">
			<input type="hidden" name="longitude" class="form-control" value="">
			</div>
			</div>
			</div>
			</div>
		<div class="col-md-4"></div>
			<p style="text-align: center;padding: 6px 0px 12px 0px;">
			<button type="submit" name="submit" id="submit" class="btn btn-outline-success">
			<img src="../../images/accept.png" width="24"> ยืนยัน</button>
			<a href="../home/" class="btn btn-warning"><img src="../../images/can.png" width="24"> ยกเลิก</a>
			</p>
	</div>
</form>
</div>
<script type="text/javascript">
  function getLocation() {
    if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(showPosition);

    }
  }
  function showPosition(position){
    document.querySelector('.myForm input[name="latitude"]').value=position.coords.latitude;
    document.querySelector('.myForm input[name="longitude"]').value=position.coords.longitude;
  }
/*  function showError(error){
    switch(error.code){
      case error.PERMISSION_DENIED:
      alert("OPEN LOCATION");
      location.reload();
      break;
    }

  }*/
</script>
<?
include('../f.html');
?>