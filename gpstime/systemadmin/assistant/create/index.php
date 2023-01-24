<?php
include('../navassistant/index.php');
	$cls=2;
	$apname=trim($_POST['apname']);
	$afname=trim($_POST['afname']);
	$alname=trim($_POST['alname']);
	$user=trim($_POST['user']);
	$pass=trim($_POST['pass']);
	$chk=0;
	$assistantrecord=date("Y-m-d H:i:s");
		//
		$resultuser=$object->Checkuser($user);
		if(count($resultuser)>0)
		{
		echo"<script>
		swal({
		title: 'ชื่อผู้ใช้งานนี้มีแล้วในระบบแล้ว',
		text: 'ตรวจสอบ',
		icon: 'warning'
		}).then(function() {
		// Redirect the user
		history.back();
		console.log('The Ok Button was clicked.');
		});
		</script>";
		exit();
		}
		//
	$object->Registerassistant($cls,$apname,$afname,$alname,$user,$pass,$chk,$assistantrecord);
	echo"<script>window.location='../';</script>";
include('../f.html');
?>