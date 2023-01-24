<?php
include('../navclass/index.php');
	if(isset($_POST['submit'])){
		$classid=trim($_POST['classid']);
		$classname=trim($_POST['classname']);
		$object->Updateclass($classid,$classname);
		echo"<script>window.location.href = '../';</script>";
	}
include('../f.html');