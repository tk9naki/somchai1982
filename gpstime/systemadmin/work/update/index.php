<?php
include('../navwork/index.php');
	if(isset($_POST['submit'])){
		$workid=trim($_POST['workid']);
		$partid=trim($_POST['partid']);
		$workname=trim($_POST['workname']);
		$object->Updatework($workid,$partid,$workname);
		echo"<script>window.location.href = '../';</script>";
	}
include('../f.html');