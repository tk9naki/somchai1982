<?php
include('../navclass/index.php');
	if(isset($_POST['submit'])){
		$classid=trim($_POST['classid']);
		$object->Deleteclass($classid);
		echo"<script>window.location.href = '../';</script>";
	}
include('../f.html');
?>