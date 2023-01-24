<?php
include('../navsetupdata/index.php');
?>
<p style="text-align: center;display: block;margin: auto;padding: 6px 0px 12px 0px;">
<a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_img<?php echo $rowsetup['sdid']; ?>" data-id=""><img src="../../../images/chpng.png" width="24"> เปลี่ยนรูปโลโก้</a>
</p>

<br>

<div style="text-align: center;">
<h4><b>ตั้งค่าข้อมูลพื้นฐาน</b></h4>
</div>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="table">

<table id="" class="table table-striped table-bordered" style="width:100%;background:#FFFFFF;">

	<tr>
	<td>ชื่อหน่วยงาน</td>
	<td><?php echo $rowsetup['office'];?></td>
	</tr>

	<tr>
	<td>ชื่อระบบ</td>
	<td><?php echo $rowsetup['system'];?></td>
	</tr>

	<tr>
	<td>Token Line Admin</td>
	<td><?php echo $rowsetup['admin'];?></td>
	</tr>

	<tr>
	<td>อีเมล์ระบบ</td>
	<td><?php echo $rowsetup['rootmail'];?></td>
	</tr>

	<tr>
	<td>password อีเมล์ระบบ</td>
	<td><?php echo $rowsetup['rootpass'];?></td>
	</tr>

	<tr>
	<td>Host อีเมล์ระบบ</td>
	<td><?php echo $rowsetup['hostmail'];?></td>
	</tr>

	<tr>
	<td>คำลงท้ายอีเมล์ 1</td>
	<td><?php echo $rowsetup['footer1'];?></td>
	</tr>

	<tr>
	<td>คำลงท้านอีเมล์ 2</td>
	<td><?php echo $rowsetup['footer2'];?></td>
	</tr>

	<tr>
	<td>เปิดระบบ</td>
	<td><?php echo $rowsetup['h1'];?>:<?php echo $rowsetup['m1'];?>:<?php echo $rowsetup['s1'];?></td>
	</tr>

	<tr>
	<td>กำหนดเวลาสาย</td>
	<td><?php echo $rowsetup['h2'];?>:<?php echo $rowsetup['m2'];?>:<?php echo $rowsetup['s2'];?></td>
	</tr>

	<tr>
	<td>กำหนดเวลาเลิกงาน</td>
	<td><?php echo $rowsetup['h3'];?>:<?php echo $rowsetup['m3'];?>:<?php echo $rowsetup['s3'];?></td>
	</tr>

	<tr>
	<td>ปิดระบบ</td>
	<td><?php echo $rowsetup['h4'];?>:<?php echo $rowsetup['m4'];?>:<?php echo $rowsetup['s4'];?></td>
	</tr>

	<tr>
	<td>Latitude</td>
	<td><?php echo $rowsetup['lat'];?></td>
	</tr>
	
	<tr>
	<td>Longtitude</td>
	<td><?php echo $rowsetup['lon'];?></td>
	</tr>
	
	<tr>
	<td>รัศมี Check In</td>
	<td><?php echo $rowsetup['distance'];?> เมตร</td>
	</tr>

</table>

</div>
</div>
<div class="col-md-3"></div>
</div>
<div style="text-align:center;"><b><font color="red">สำคัญมาก!</font></b>
<h6>หมายเหตุจากบักนากิใส่ไว้กันลืม : อีเมล์ระบบควรสร้างจาก Hosting Domain ที่ใช้งานระบบจริง</h6>
<h6>ไม่แนะนำให้ใช้ Gmail ในการส่งเมล์ออกจากระบบ</h6>
<h6>-ชื่อระบบ คือ profile ของเว็ปไซต์ ประกอบไปด้วยโปรไฟล์ชื่อ และ สังเขป ตามด้วยข้อมูล-</h6>
<h6>-ไม่แนะนำให้ใช้ Gmail ในการส่งเมล์ออกจากระบบ-</h6>
<h6>-Token line = ระบบการแจ้งเตือนให้สร้าง Genarete token ขึ้นมาแล้วนำมาใส่ที่นี่-</h6>
<h6>-อีเมล์ของระบบคือ Email และ user ของ Admin สร้างมาใช้ร่วมกับโดเมนได้หากต้องการต่ออายุไปเรื่อยๆแบบ Unlimited-</h6>
<h6>-Host ส่งออกอีเมล์ สามารถใช้แบบเดียวกันกับ email ของระบบได้แต่ควรสร้างแยกออกมาเพื่อความชัดเจนของระบบ-</h6>
<h6>-Domain URL สามารถหาซื้อได้จากเว็บไซต์ต่างๆ *คำเตือน* หากไม่ต่ออายุสัญญา Domain ต่อภายในระยะเวลาที่กำหนดของ เว็บไซต์โดเมน ข้อมูลจะถูกลบทันที-</6h>
</div>

<p style="text-align: center;display: block;margin: auto;padding: 12px 0px 12px 0px;">
<a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalupdate<?php echo $rowsetup['sdid']; ?>" data-id=""><img src="../../../images/upd.png" width="24"> อัปเดทข้อมูล</a> 
<a href="../../" class="btn btn-primary"><img src="../../../images/mainmenu.png" width="24"> กลับหน้าหลัก</a>
</p>


<?php
include('../modalupdate/index.php');
include('../f.html');
?>