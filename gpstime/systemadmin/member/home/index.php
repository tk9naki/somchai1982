<?php
include('../navmember/index.php');
?>
<div class="row" style="padding: 0px 15px 0px 15px;">
<div class="col-md-12" style="text-align: center;">
<h4><b>สมาชิก</b></h4>
<a style="padding: 6px 24px 6px 24px;" href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalcreate" data-id=""><img src="../../../images/register.png" width="24"> เพิ่มสมาชิก</a>
<?php
include('../modalcreate/index.php');
?>
</div>
</div>

<div class="row">
	<div class="container" style="padding:36px 36px;">
	<div class="col-md-12">
	<div class="table">
	<table id="example" class="table table-bordered" style="width:100%">
	<thead>
	<tr>
	<th style="text-align: center;">ลำดับ</th>
	<th style="text-align: center;">ชื่อ - นามสกุล</th>
	<th style="text-align: center;">ตำแหน่ง</th>
	<th style="text-align: center;">ฝ่าย/แผนก/ด้าน</th>
	<th style="text-align: center;">งาน</th>
	<th style="text-align: center;">อีเมล์</th>
	<th style="text-align: center;">รหัสพนักงาน</th>
	<th style="text-align: center;">รหัสผ่าน</th>
	<th style="text-align: center;">เงินเดือน</th>
	<th style="text-align: center;">ดำเนินการ</th>
	</tr> 
	</thead>
	<tbody>
	<?php
	if(count($resultmember)>0)
	{
	$i=1;
	foreach($resultmember as $row)
	{
	?>
	<tr>
	<td style="text-align:center;"><?php echo $i;?></td>
	<td style="text-align: justify-all;"><?php echo $row['pname'];?><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
	<td style="text-align: center;"><?php echo $row['classname'];?></td>
	<td style="text-align: center;"><?php echo $row['partname'];?></td>
	<td style="text-align: center;"><?php echo $row['workname'];?></td>
	<td style="text-align: justify-all;"><?php echo $row['email'];?></td>
	<td style="text-align: center;"><?php echo $row['tel'];?></td>
	<td style="text-align: center;"><?php echo $row['password'];?></td>
	<td style="text-align: center;"><?php echo $row['salary'];?></td>
	<td style="text-align: center;">
	<a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalreset<?php echo $row['mid']; ?>" data-id=""><img src="../../../images/close.png" width="24"> Reset</a>
	<a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalupdate<?php echo $row['mid']; ?>" data-id=""><img src="../../../images/upd.png" width="24"> Edit</a>
	<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modaldelete<?php echo $row['mid'];?>" data-id=""><img src="../../../images/del.png" width="24"> Delete</a>
	<!--<a class="btn btn-danger" id="<?php echo $row['mid'];?>"><img src="../../../images/del.png" width="24"> Delete</a>-->
	<?php
	include('../modalreset/index.php');
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