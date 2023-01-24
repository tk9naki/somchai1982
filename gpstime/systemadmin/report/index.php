<?php
include('../nav/index.php');
?>
<div class="row">
<h3 style="text-align:center;font-weight: bold;">Report</h3>
<div class="container" style="padding:0px 36px 24px 36px;">
<div class="col-md-12">
<div class="row row-cols-1 row-cols-md-3 g-1">
	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>เช็คลงเวลาเข้างาน</b></h5></p>
	<p><a href="timein/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>เช็คเข้างานสาย</b></h5></p>
	<p><a href="late/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>เช็คขาด/ไม่ลงเวลาเข้า</b></h5></p>
	<p><a href="misstimein/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>เช็คลาป่วย-ลากิจ-ลาหยุด</b></h5></p>
	<p><a href="leave/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>เช็คลงเวลาออก</b></h5></p>
	<p><a href="timeout/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>เช็คไม่ลงเวลาออก</b></h5></p>
	<p><a href="misstimeout/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิก </a></p>
	</div>
	</div>
	</div>
	</div>
</div>
</div>

	<p style="text-align: center;display: block;margin: auto;padding: 12px 12px;">
	<a href="../logout/" style="padding: 6px 24px;" class="btn btn-outline-danger"><img src="../../images/close.png" width="24"> ออกจากระบบ</a>
	</p>
<?php
include('../f.html');
?>