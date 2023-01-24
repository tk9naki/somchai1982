<?php
session_start();
require("../db/login.php");
$object=new CRUD();

$tel=trim($_POST['tel']);
$password=trim($_POST['password']);

$res=$object->Loginmember($tel,$password);
if(count($res)>0){
foreach($res as $row){
$_SESSION['mid']=$row['mid'];
$_SESSION['mname']=$row['pname'].$row['fname'].' '.$row['lname'];
echo "<script type='text/javascript'>";
echo "window.location='../membercheckin/';";
echo "</script>";
}
}
else
{
include('../h.html');
echo"<script>
swal({
title: 'ไม่พบข้อมูล',
text: 'โปรดตรวจสอบหมายเลขพนักงานหรือรหัสผ่าน',
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