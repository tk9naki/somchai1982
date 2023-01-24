<?php
include('../navwork/index.php');
	if(isset($_POST['submit'])){
		$workid=trim($_POST['workid']);
		$object->Deletework($workid);
		echo"<script>window.location.href = '../';</script>";
	}
include('../f.html');
?>