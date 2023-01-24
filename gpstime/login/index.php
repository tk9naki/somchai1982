<?php
session_start();
require '../db/member.php';
$object = new CRUD();
$rdst=$object->Readsetup();
if(count($rdst)>0){
foreach($rdst as $row1);
}
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- SWEET ALERT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Noto Sans Thai|Chonburi|Mitr|Prompt" rel="stylesheet">

<link rel="shortcut icon" href="images/logo.png"/>

<title>Somchaiapp</title>

</head>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6" style="text-align: center;display: block;margin: auto;padding: 6px 0px 6px 0px;">
<img style="display: block;margin: auto;" src="../images/<?php echo $row1['img'];?>" height="100">
<div style="text-align: center;">  
<h3><?php echo $row1['office'];?></h3>
<h5><?php echo $row1['system'];?></h5>
</div>
</div>
<div class="col-md-3"></div>
</div>

<h4 style="text-align: center;padding: 12px 0px 12px 0px"><b>เข้าสู่ระบบ</b></h4>

<form action="../checkmember/" method="post">
<div class="row" style="text-align: center;padding: 0px 6px 6px 6px">
<div class="col-md-4"></div>
<div class="col-md-4">
				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">รหัสพนักงาน</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="text" autocapitalize="off" name="tel" class="form-control" placeholder="กรุณาระบุเบอร์โทรศัพท์" maxlength="10" required>
				</div>
				</div>
				</div>
				</div>
				</div>

				<div class="mb-3">
				<div class="row">
				<div class="col-md-4" style="padding:0px 0px;"><span class="input-group-text" style="display:block;margin: auto;">รหัสผ่าน</span></div>
				<div class="col-md-8" style="padding:0px 0px;">
				<div class="form-group">
				<div class="input-group">
				<input type="password" autocapitalize="off" name="password" class="form-control" placeholder="กรอกรหัสผ่าน 6 หลัก" maxlength="6" required>
				</div>
				</div>
				</div>
				</div>
				</div>
<div class="col-md-4"></div>
</div>
                          
<div style="text-align: center;display: block;margin: auto;padding: 24px 0px 36px 0px;">
<button style="padding: 6px 36px 6px 36px;color: black;" type="submit" class="btn btn-outline-primary"><img src="../images/accept.png" height="24"> ลงชื่อเข้าสู่ระบบ</button>
</div>
</form>
	
	<div class="col-md-4"></div>
</div>
</div>
</div>
<center aria-atomic="false">
<table width="200" border="1">
  <tr>
    <td><img src="../images/giphy.gif" width="480" height="360"></td>
  </tr>
</table>
</center>

	<div style="text-align: center;display: block;margin: auto;padding:150px 0px 12px 0px;">
	<a style="text-align: center;padding: 6px 12px;" href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#adminlogin" data-id=""><img src="../images/login.png" width="24"> ADMIN LOGIN.</a>
	</div>

<!-- Modal - Login -->
<div class="modal fade" id="adminlogin" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog modal-xs" role="document">
<div class="modal-content">

	<div style="text-align: center;padding: 24px 0px 6px 0px;background-color:green;color:white;">
	<h3><b>ADMIN LOGIN PAGE.</b></h3>
	</div>

<form action="../checkadmin/" method="post">
	<div class="row" style="padding:12px 12px 12px 12px;" >
	<div style="text-align: center;padding:12px 0px 12px 0px;">
	<h5><b>เมนูเข้าสู่ระบบของแอดมินเท่านั้น!!!</b></h5>
	</div>
	<div class="col-md-12">
	<div class="input-group mb-3">
	<span class="input-group-text">Username : </span>
	<input type="text" autocapitalize="off" name="user" class="form-control" placeholder="" required>
	</div>

	<div class="input-group mb-3">
	<span class="input-group-text">Password :&nbsp;</span>
	<input type="password" autocapitalize="off" name="pass" class="form-control" placeholder="" required>
	</div>
	</div>
	</div>
               
	<div style="text-align: center;display: block;margin: auto;padding:6px 0px 36px 0px;">
	<button style="padding: 6px 36px 6px 36px;color: black;" type="submit" class="btn btn-outline-primary"><img src="../images/accept.png" height="24"> ลงชื่อเข้าสู่ระบบ</button>
	<button type="button" class="btn btn-danger" data-bs-dismiss="modal"><img src="../images/close.png" width="24"> ยกเลิก</button>
	</div>

</form>
</div>
                           
</div>
</div>

<style type="text/css">
body{
font-family:Noto Sans Thai,Prompt,sans-serif;
background:#FFFFFF;
}
.col-md-4 a:link {
color: black;
}
/* visited link */
.col-md-4 a:visited {
color: black;
}
/* mouse over link */
.col-md-4 a:hover {
color: blue;
}
/* selected link */
.col-md-4 a:active {
color: red;
}
</style>

<!-- JS, Popper.js, and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>