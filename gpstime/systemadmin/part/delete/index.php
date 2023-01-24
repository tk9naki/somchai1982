<?php
include('../navpart/index.php');
	if(isset($_POST['submit'])){
		$partid=trim($_POST['partid']);
		$object->Deletepart($partid);
		echo"<script>window.location.href = '../';</script>";
	}
include('../f.html');
?>