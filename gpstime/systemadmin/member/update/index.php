<?php
include('../navmember/index.php');
	$mid=trim($_POST['mid']);
	$pname=trim($_POST['pname']);
	$fname=trim($_POST['fname']);
	$lname=trim($_POST['lname']);
	$classid=trim($_POST['classid']);
	$partid=trim($_POST['partidd']);
	$workid=trim($_POST['workidd']);
	$password=trim($_POST['password']);
	$salary=trim($_POST['salary']);
$object->Updatemember($mid,$pname,$fname,$lname,$classid,$partid,$workid,$password,$salary);
echo"<script>window.location.href = '../';</script>";
?>