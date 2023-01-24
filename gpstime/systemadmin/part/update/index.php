<?php
include('../navpart/index.php');
	if(isset($_POST['submit'])){
		$partid=trim($_POST['partid']);
		$partname=trim($_POST['partname']);
		$object->Updatepart($partid,$partname);
		echo"<script>window.location.href = '../';</script>";
	}
include('../f.html');