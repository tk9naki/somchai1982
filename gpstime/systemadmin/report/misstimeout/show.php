<?php
$dates=$_POST['dates'];
$result=$object->Listnotcheckout($dates);
?>
<hr>
<div class="row" style="padding: 12px 12px 12px 12px;text-align: center;">
<div class="col-md-12">
<h4>รายงาน ไม่ลงเวลาออกงาน</h4>
<h5>วันที่ <?php echo substr($dates,8,2)?> <?php echo $thmonth[(substr($dates,5,2)-1)]?> <?php echo (substr($dates,0,4)+543)?></h5>
</div>
</div>
    <div class="row" style="padding: 6px 6px 6px 6px;">
	<div class="col-md-12">
	<table id="example" class="table table-striped" style="width:100%">
	<thead>
	<tr>
	<th style="text-align: center;">ลำดับ</th>
	<th style="text-align: center;">ชื่อ - นามสกุล</th>
	</tr> 
	</thead>
	<tbody>
	<?php
	if(count($result)>0)
	{
	$i=1;
	foreach($result as $row)
	{
	?>
	<tr>
	<td style="text-align: center;"><?php echo $i;?></td>
	<td style="text-align: center;"><?php echo $row['pname'];?> <?php echo $row['fname'];?><?php echo $row['lname'];?></td>
	</tr>
	<?php $i++; } ?>
	</tbody>
	<?php } ?>
	</table>
	</div>
	</div>
		<p style="text-align: center;display: block;margin: auto;padding: 0px 36px 36px 36px;">
		<a href="../" class="btn btn-primary"><img src="../../../images/dtl.png" width="24"> หน้ารายงานหลัก </a>
		</p>

<script type="text/javascript">
$(document).ready(function() {
var table = $('#example').DataTable( {
"pageLength": 25,
lengthChange: false,
buttons: [ 'copy', 'excel' ]
} );
table.buttons().container()
.appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>