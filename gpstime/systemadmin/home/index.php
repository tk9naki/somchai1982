<?php
include('../nav/index.php');
?>
<div class="row">
<div class="container" style="padding:0px 36px 24px 36px;">
<div class="col-md-12">
<div class="row row-cols-1 row-cols-md-3 g-1">

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>สมาชิก</b></h5></p>
	<p class="card-text"><img src="../../images/member.png" height="40"><h5>จำนวน <?php echo count($resultmember);?> คน</h5></p>
	<p><a href="../member/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>ตำแหน่ง</b></h5></p>
	<p class="card-text"><img src="../../images/add.png" height="40"><h5>จำนวน <?php echo count($resultclass);?> รายการ</h5></p>
	<p><a href="../class/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>ฝ่าย/แผนก/ด้าน</b></h5></p>
	<p class="card-text"><img src="../../images/group.png" height="40"><h5>จำนวน <?php echo count($resultpart);?> รายการ</h5></p>
	<p><a href="../part/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>งาน</b></h5></p>
	<p class="card-text"><img src="../../images/detail.png" height="40"><h5>จำนวน <?php echo count($resultwork);?> รายการ</h5></p>
	<p><a href="../work/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>ผู้ช่วยผู้ดูแลระบบ</b></h5></p>
	<p class="card-text"><img src="../../images/admin.png" height="40"><h5>จำนวน <?php echo count($resultassistant);?> รายการ</h5></p>
	<p><a href="../assistant/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
	</div>
	</div>
	</div>
	</div>

	<div class="col">
	<div class="card h-50">
	<div class="card bg-light">
	<div class="card-body text-center">
	<p class="card-text"><h5 class="card-title"><b>ตั้งค่าระบบ</b></h5></p>
	<p class="card-text"><img src="../../images/setup.png" height="40"><h5>จำนวน 15 รายการ</h5></p>
	<p><a href="../setupdata/" class="btn btn-outline-primary" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
	</div>
	</div>
	</div>
	</div>
</div>
</div>
</div>
</div>
	<p style="text-align: center;display: block;margin: auto;padding: 0px 36px 36px 36px;">
	<a href="../logout/" style="padding: 6px 24px;" class="btn btn-outline-danger"><img src="../../images/close.png" width="24"> ออกจากระบบ</a>
	</p>
<?php
include('../f.html');
?>