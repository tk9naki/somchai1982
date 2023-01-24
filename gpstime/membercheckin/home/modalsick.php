<!-- Bootstrap Modals -->

<!-- Modal - SICK -->
<div class="modal fade" id="modal_sick" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">

<div style="text-align: center;padding: 24px 0px 6px 0px;background-color: yellow;color: #000000;">
<h4><b>ยืนยันลาป่วย-ลากิจ วันที่ <?php echo substr($row['day'],8,2)?> <?php echo $thmonth[(substr($row['day'],5,2)-1)]?> <?php echo (substr($row['day'],0,4)+543)?></b></h4>
</div>
<!-- เปลี่ยนเป็นระบบแบบ Form -->
<form id="form" action="../sick/" method="post">
<input type="hidden" name="tmid" value="<?php echo $row['tmid']; ?>">
<input type="hidden" name="day" value="<?php echo $row['day']; ?>">
<input type="hidden" name="mid" value="<?php echo $mid; ?>">
<input type="hidden" name="mname" value="<?php echo $mname; ?>">

<div class="row" style="padding: 12px 50px 12px 50px;">
<div class="col-md-12">

<div class="modal-body">
				<div class="row">
				<div class="col-md-12">
				<div class="form-group">
				<label><b>ระบุเหตุผล :</b></label>
				<textarea name="cause" class="form-control" required></textarea>
				</div>
				</div>
				</div>
</div>
</div>
</div>
<hr>
<p style="text-align: center;padding: 12px 0px 12px 0px;">
<button style="padding:8px 12px;" type="submit" name="submit" id="submit" class="btn btn-warning">
<img src="../../images/accept.png" width="24"> ยืนยันข้อมูล</button>
<button style="padding:8px 12px;" type="button" class="btn btn-danger" data-bs-dismiss="modal"><img src="../../images/close.png" width="24"> ปิด</button>
</p>

</form>
                           
</div>
</div>
</div>
<!--CLOSE Modal-SICK-->