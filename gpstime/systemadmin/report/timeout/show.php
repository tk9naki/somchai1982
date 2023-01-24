<?php
$ds=$_POST['dates'];
$df=$_POST['datef'];

$dss=substr($ds,-10);
$dff=substr($df,-10);

$dates=$dss.' '.'00:00:00';
$datef=$dff.' '.'23:59:59';

$result=$object->Listcheckout($dates,$datef);
?>
<hr>
<div class="row" style="padding: 12px 12px 12px 12px;text-align: center;">
<div class="col-md-12">
<h4>รายงาน ลงเวลาออก</h4>
<h5>ระหว่างวันที่ <?php echo substr($dates,8,2)?> <?php echo $thmonth[(substr($dates,5,2)-1)]?> <?php echo (substr($dates,0,4)+543-(2500))?> ถึง วันที่ <?php echo substr($datef,8,2)?> <?php echo $thmonth[(substr($datef,5,2)-1)]?> <?php echo (substr($datef,0,4)+543-(2500))?></h5>
</div>
</div>
    <div class="row" style="padding: 6px 6px 6px 6px;">
	<div class="col-md-12">
	<table id="example" class="table table-striped" style="width:100%">
	<thead>
	<tr>
	<th style="text-align: center;">ลำดับ</th>
	<th style="text-align: center;">วันที่</th>
	<th style="text-align: center;">ชื่อ - นามสกุล</th>
	<th style="text-align: center;">ลงเวลาออก</th>
	<th style="text-align: center;">latitude</th>
	<th style="text-align: center;">lontitude</th>
	<th style="text-align: center;">พิกัด</th>
	</tr> 
	</thead>
	<tbody>
	<?php
	if(count($result)>0)
	{
	$i=1;
	foreach($result as $row)
	{
	$latout=$row['latout'];
	$lonout=$row['lonout'];
	?>
	<tr>
	<td style="text-align: center;"><?php echo $i;?></td>
	<td style="text-align: center;"><?php echo $row['dateinname'];?></td>
	<td style="text-align: center;"><?php echo $row['mname'];?></td>
	<td style="text-align: center;"><?php echo substr($row['timein'],11,8);?></td>
	<td style="text-align: center;">
		<?php
		if($row['latout']==''){
		echo '-';
		}else
		echo number_format($row['latout'],4);
		?>
	</td>
	<td style="text-align: center;">
		<?php
		if($row['lonout']==''){
		echo '-';
		}else
		echo number_format($row['lonout'],4);
		?>
	</td>
		<?php
		if($row['latout']==''){
		echo '<td style="text-align:center;h">-</a></td>';
		}else{
		echo '<td style="text-align:center;h"><a href="https://www.google.com/maps?q='.$latout.','.$lonout.'"target="_blank">คลิก</a></td>';
		}
		?>
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