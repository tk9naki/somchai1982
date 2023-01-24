<?php
$ds=$_POST['dates'];
$df=$_POST['datef'];

$dss=substr($ds,-10);
$dff=substr($df,-10);

$dates=$dss.' '.'00:00:00';
$datef=$dff.' '.'23:59:59';

$result=$object->Listlate($dates,$datef);
?>
<hr>
<div class="row" style="padding: 12px 12px 12px 12px;text-align: center;">
<div class="col-md-12">
<h4>รายงาน สาย</h4>
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
	<th style="text-align: center;">ลงเวลาเข้า</th>
	<th style="text-align: center;">ตรวจ</th>
	<th style="text-align: center;">Latitude</th>
	<th style="text-align: center;">Longitude</th>
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
	$latitude=$row['latitude'];
	$longitude=$row['longitude'];
	?>
	<tr>
	<td style="text-align: center;"><?php echo $i;?></td>
	<td style="text-align: center;"><?php echo $row['dateinname'];?></td>
	<td style="text-align: center;"><?php echo $row['mname'];?></td>
	<td style="text-align: center;"><?php echo substr($row['timein'],11,8);?></td>
	<td style="text-align: center;">
		<?php
		$tck=substr($row['timein'],11,8);
		$t1=substr($tck,0,2);
		$t2=substr($tck,3,2);
		$t3=substr($tck,6,2);
		$ts=$t1.$t2.$t3;
		$tss=$ts+100000;
		if($tss==100000)
		{
		echo "-";  
		}
		elseif($tss>($rowsetup['h2'].$rowsetup['m2'].$rowsetup['s2'])+100000)
		{
		echo '<h6 style="color:red;text-align: center;">สาย</h6>';
		}
		else
		{
		echo '<h6 style="color:blue;text-align: center;">ปกติ</h6>';
		}
		?>
	</td>
	<td style="text-align: center;"><?php echo number_format($row['latitude'],4);?></td>
	<td style="text-align: center;"><?php echo number_format($row['longitude'],4);?></td>
		<?php
		if($row['latitude']==''){
		echo '<td style="text-align:center;h"><a href="#"target="_blank"></a></td>';
		}else{
		echo '<td style="text-align:center;h"><a href="https://www.google.com/maps?q='.$latitude.','.$longitude.'"target="_blank">คลิก</a></td>';
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