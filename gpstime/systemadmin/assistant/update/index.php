<?php
include('../navassistant/index.php');
$assistantid=trim($_POST['assistantid']);
$apname=trim($_POST['apname']);
$afname=trim($_POST['afname']);
$alname=trim($_POST['alname']);
$pass=trim($_POST['pass']);
	$object->Updateassistant($assistantid,$apname,$afname,$alname,$pass);
	echo"<script>window.location.href = '../';</script>";
?>