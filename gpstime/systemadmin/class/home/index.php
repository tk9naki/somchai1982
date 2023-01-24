<?php
include('../navclass/index.php');
?>
<div class="row" style="padding: 0px 12px 0px 12px;">
<div class="col-md-12" style="text-align: center;">
<h4><b>ตำแหน่ง</b></h4>
<a style="padding: 6px 24px 6px 24px;" href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalcreate" data-id=""><img src="../../../images/add.png" width="24"> เพิ่มตำแหน่ง</a>
<?php
include('../modalcreate/index.php');
?>
</div>
</div>

<div class="row">
	<div class="container" style="padding:36px 36px;">
	<div class="col-md-12">
	<div class="table">
	<table id="example" class="table table-striped" style="width:100%">
	<thead>
	<tr>
	<th style="text-align: center;">ลำดับ</th>
	<th style="text-align: center;">ตำแหน่ง</th>
	<th style="text-align: center;">ดำเนินการ</th>
	</tr> 
	</thead>
	<tbody>
	<?php
	if(count($resultclass)>0)
	{
	$i=1;
	foreach($resultclass as $row)
	{
	?>
	<tr>
	<td style="text-align:center;"><?php echo $i;?></td>
	<td style="text-align: justify-all;"><?php echo $row['classname'];?></td>
	<td style="text-align: center;">
	<a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalupdate<?php echo $row['classid']; ?>" data-id=""><img src="../../../images/upd.png" width="24"> แก้ไข</a>
	<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaldelete<?php echo $row['classid'];?>" data-id=""><img src="../../../images/del.png" width="24"> ลบ</a>
	<!--<a class="btn btn-danger" id="<?php echo $row['classid'];?>"><img src="../../../images/del.png" width="24"> Delete</a>-->
	<?php
	include('../modalupdate/index.php');
	include('../modaldelete/index.php');
	?>
	</td>
	
	</tr>
	<?php $i++; } ?>
	</tbody>
	<?php } ?>
	</table>
	</div>
	</div>
	</div>
	}
</div>
	<p style="text-align: center;display: block;margin: auto;padding: 0px 36px 36px 36px;">
	<a href="../../" class="btn btn-primary"><img src="../../../images/mainmenu.png" width="24"> กลับหน้าหลัก</a>
	</p>
<?php
include('../f.html');
?>