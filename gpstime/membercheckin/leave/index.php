<?php
include('../nav/index.php');
if(isset($_POST['submit'])){
$dateinid=trim($_POST['dateinid']);
$mid=trim($_POST['mid']);
$mname=trim($_POST['mname']);
$dateinname=trim($_POST['dateinname']);
$timein='';
$cause=trim($_POST['cause']);
$timeout='';
$chk=3;
$latitude='';
$longitude='';
$latout='';
$lonout='';
$ip=$_SERVER["REMOTE_ADDR"];
$checkinrecord=date("Y-m-d H:i:s");
    $ck=$object->Ckhkin($mid,$dateinname);
    if(count($ck)>0){
    echo"<script>
    swal({
    title: 'ท่านทำรายการไปแล้ว!',
    text: '',
    icon: 'warning'
    }).then(function() {
    // Redirect the user
    window.location.href = '../';
    console.log('The Ok Button was clicked.');
    });
    </script>";
    exit();
    }
$object->Registimein($dateinid,$mid,$mname,$dateinname,$timein,$cause,$timeout,$chk,$latitude,$longitude,$latout,$lonout,$ip,$checkinrecord);
echo"<script>
swal({
title: 'บันทึกลาสำเร็จ',
text: '',
icon: 'success'
}).then(function() {
// Redirect the user
window.location.href = '../';
console.log('The Ok Button was clicked.');
});
</script>";
exit();
}
include('../f.html');
?>