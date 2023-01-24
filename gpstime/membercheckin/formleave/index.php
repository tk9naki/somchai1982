<?php
include('../nav/index.php');
?>
<body>
<div style="background:#FFFFFF;padding: 12px 12px 0px 12px;">
<div style="text-align: center;">
<h3><b>Checkin</b></h3>
<h4>แบบฟอร์มลางาน</h4>
</div>
<form action="../leave/" method="post">
<input type="hidden" name="dateinid" value="<?php echo $rowdateon['dateinid']; ?>">
<input type="hidden" name="dateinname" value="<?php echo $rowdateon['dateinname']; ?>">
<input type="hidden" name="mid" value="<?php echo $mid; ?>">
<input type="hidden" name="mname" value="<?php echo $mname; ?>">
	<div class="row">
		<div class="col-md-4"></div>
			<div class="col-md-4">
			<div class="row">
				<div class="col-md-12">
				<div class="form-group">
				<label><b>ระบุเหตุผล :</b></label>
				<textarea name="cause" class="form-control" required></textarea>
				</div>
				</div>
				</div>
			</div>
		<div class="col-md-4"></div>
			<p style="text-align: center;padding: 12px 0px 12px 0px;">
			<button type="submit" name="submit" id="submit" class="btn btn-outline-success">
			<img src="../../images/accept.png" width="24"> ยืนยัน</button>
			<a href="../home/" class="btn btn-warning"><img src="../../images/can.png" width="24"> ยกเลิก</a>
			</p>
	</div>
</form>
</div>
<?
include('../f.html');
?>