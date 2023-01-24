<?php
session_start();
require '../../db/member.php';
$object = new CRUD();
$mid=$_SESSION['mid'];
$mname=$_SESSION['mname'];
$dateon=date("Y-m-d");
$datetimeon=date("Y-m-d H:i:s");
if(empty($_SESSION['mid']))
{
echo "<script>window.location='../../'</script>";
}
$rdateon=$object->Rdateonime($dateon);
if(count($rdateon)>0){
foreach($rdateon as $row);
}

$rdst=$object->Rdsetup();
if(count($rdst)>0){
foreach($rdst as $row1);
}

$rdck=$object->Rdckin($mid);

$rdch=$object->Rdchkin($dateon,$mid);
if(count($rdch)>0){
foreach($rdch as $row3);
}




include('../h.hdatetimeonl');
?>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6" style="text-align: center;display: block;margin: auto;padding: 6px 0px 6px 0px;">
<img style="display: block;margin: auto;" src="../../images/<?php echo $row1['img'];?>" height="100">
<div style="text-align: center;">  
<h5>ระบบลงเวลาทำงานออนไลน์<br><?php echo $row1['nametl'];?></h5>
<h6><b>ชื่อ : <?php echo $mname;?></b></h6>
</div>
</div>
<div class="col-md-3"></div>
</div>