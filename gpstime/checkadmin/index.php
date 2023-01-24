<?php
session_start();
require("../db/login.php");
$object=new CRUD();

$user=trim($_POST['user']);
$pass=trim($_POST['pass']);

$res=$object->Loginadmin($user,$pass);
if(count($res)>0){
foreach($res as $row){
if($row['cls']==1)
{
$_SESSION['aid']=$row['aid'];
$_SESSION['cls']=$row['cls'];
$_SESSION['aname']=$row['apname'].$row['afname'].' '.$row['alname'];
echo "<script type='text/javascript'>";
echo "window.location='../systemadmin/';";
echo "</script>";
}
}
}
{
include('../h.html');
echo"<script>
swal({
title: 'ไม่พบข้อมูล',
text: 'ตรวจสอบชื่อผู้ใช้งานและรหัสผ่าน',
icon: 'warning'
}).then(function() {
// Redirect the user
history.back();
console.log('The Ok Button was clicked.');
});
</script>";
include('../f.html');
}
?>