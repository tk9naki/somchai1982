<?php
include('../navmember/index.php');
	$pname=trim($_POST['pname']);
	$fname=trim($_POST['fname']);
	$lname=trim($_POST['lname']);
	$classid=trim($_POST['classid']);
	$partid=trim($_POST['partid']);
	$workid=trim($_POST['workid']);
	$email=trim($_POST['email']);
	$tel=trim($_POST['tel']);
	$salary=trim($_POST['salary']);
	$chk=0;
	$ran=(mt_rand());
	$password=substr($ran,0,6);
	$ip=$_SERVER["REMOTE_ADDR"];
	$memberdate=date("Y-m-d H:i:s");
		$resultemail=$object->Checkemail($email);
		if(count($resultemail)>0)
		{
		echo"<script>
		swal({
		title: 'อีเมล์นี้มีแล้วในระบบแล้ว',
		text: 'ตรวจสอบอีเมล์ที่ใช้ลงทะเบียน',
		icon: 'warning'
		}).then(function() {
		// Redirect the user
		history.back();
		console.log('The Ok Button was clicked.');
		});
		</script>";
		exit();
		}
			$resulttel=$object->Checktel($tel);
			if(count($resulttel)>0)
			{
			echo"<script>
			swal({
			title: 'เบอร์โทรนี้มีแล้วในระบบแล้ว',
			text: 'ตรวจสอบเบอร์โทรที่ใช้ลงทะเบียน',
			icon: 'warning'
			}).then(function() {
			// Redirect the user
			history.back();
			console.log('The Ok Button was clicked.');
			});
			</script>";
			exit();
			}
	$object->Registermember($pname,$fname,$lname,$classid,$partid,$workid,$email,$tel,$chk,$password,$ip,$memberdate,$salary);
	echo"<script>window.location='../';</script>";
include('../f.html');
?>