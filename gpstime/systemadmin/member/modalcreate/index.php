<div class="modal fade" id="modalcreate" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel"><b>เพิ่มสมาชิก</b></h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
	<div class="modal-body">
				<form action="../create/" method="post">
				<div class="row" style="padding:12px 12px 6px 12px;">
				<div class="col-md-12">
				<h5 style="text-align:center;">แบบฟอร์มบันทึกข้อมูล</h5>
				
				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">คำนำหน้า</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<select name="pname" class="form-select" required>
				<option selected disabled value="">คลิก</option>
				<option value="นาย">นาย</option>
				<option value="นาง">นาง</option>
				<option value="นางสาว">นางสาว</option>
				</select>
				</div>
				</div>
				</div>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">ชื่อ</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text"  name="fname" class="form-control" placeholder="" required>
				</div>
				</div>
				</div>
				</div>
				</div>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">นามสกุล</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text"  name="lname" class="form-control" placeholder="" required>
				</div>
				</div>
				</div>
				</div>
				</div>
				
				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">รหัสพนักงาน</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text" name="tel" class="form-control" placeholder="" maxlength="10" required>
				</div>
				</div>
				</div>
				</div>
				</div>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">ตำแหน่ง</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<select name="classid" class="form-select" required>
				<option selected disabled value="">คลิก</option>
				<?php
				$resultclass=$object->Readclass();
				if(count($resultclass)>0){
				foreach($resultclass as $rowclass){
				?>
				<option value="<?php echo $rowclass['classid'] ?>"><?php echo $rowclass['classname'] ?></option>
				<?php } ?>
				<?php } ?>
				</select>
				</div>
				</div>
				</div>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">ฝ่าย/แผนก/ด้าน</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<select name="partid" id="partid" class="form-select" required>
				<option selected disabled value="">คลิก</option>
				<?php
				$resultpart=$object->Readpart();
				if(count($resultpart)>0){
				foreach($resultpart as $rowpart){
				?>
				<option value="<?php echo $rowpart['partid'] ?>"><?php echo $rowpart['partname'] ?></option>
				<?php } ?>
				<?php } ?>
				</select>
				</div>
				</div>
				</div>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">งาน</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<select name="workid" id="workid" class="form-select" required>
				<option selected disabled value="">คลิก</option>
				<?php
				$resultwork=$object->Readwork();
				if(count($resultwork)>0){
				foreach($resultwork as $rowwork){
				?>
				<option value="<?php echo $rowwork['workid'] ?>"><?php echo $rowwork['workname'] ?></option>
				<?php } ?>
				<?php } ?>
				</select>
				</div>
				</div>
				</div>

				<script type="text/javascript">
				$('#partid').change(function(){
				var partid=$(this).val();

				$.ajax({
				type: "POST",
				url: "work.php",
				data: {partid:partid},
				success: function(data){
				$('#workid').html(data);
				}
				});
				});
				</script>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">อีเมล์</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text" name="email" class="form-control" placeholder="" required>
				</div>
				</div>
				</div>
				</div>
				</div>
				

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">เงินเดือน</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text" name="salary" class="form-control" placeholder="" maxlength="10" required>
				</div>
				</div>
				</div>
				</div>
				</div>

				

				</div>
				</div>
					<div class="text-center">
					<button type="submit" class="btn btn-outline-primary"><img src="../../../images/accept.png" width="24"> บันทึก</button>
					</div>
				</form>
	</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-light" data-bs-dismiss="modal"><img src="../../../images/close.png" width="24"> ปิด</button>
			</div>
	</div>
	</div>
</div>
<!--ปิด Modal Create-->