<div class="modal fade" id="modalcreate" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel"><b>เพิ่มฝ่าย/แผนก/ด้าน</b></h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
	<div class="modal-body">
				<form action="../create/" method="post">
				<div class="row" style="padding:12px 12px 6px 12px;">
				<div class="col-md-12">
				<h5 style="text-align:center;">แบบฟอร์มบันทึกข้อมูล</h5>
				
				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">ฝ่าย/แผนก/ด้าน</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text"  name="partname" class="form-control" placeholder="" required>
				</div>
				</div>
				</div>
				</div>
				</div>

				</div>
				</div>
					<div class="text-center">
					<button type="submit" name="submit" class="btn btn-outline-primary"><img src="../../../images/accept.png" width="24"> บันทึก</button>
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