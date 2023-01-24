<?php
include('../navmember/index.php');
	$mid=trim($_POST['mid']);
	$ran=(mt_rand());
	$password=substr($ran,0,6);
		$object->Resetmember($mid,$password);
		echo"<script>window.location.href = '../';</script>";
?>