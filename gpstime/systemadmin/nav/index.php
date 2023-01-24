<?php
include('../h.php');
session_start();
$aid=$_SESSION['aid'];
if(empty($_SESSION['aid']))
{
echo "<script>window.location='../../'</script>";
}
	$resultmember=$object->Readmember();
	$resultclass=$object->Readclass();
	$resultpart=$object->Readpart();
	$resultwork=$object->Readwork();
	$resultassistant=$object->Readassistant();
	//$resultdate=$object->Readdate();
	//$resultcheckdate=$object->Readcheckdate();
	//$rdms=$object->Rdmemsort();
	//$resultadmin=$object->Readadmin();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-primary"><img src="../../images/<?php echo $rowsetup['img'];?>" height="50">
<a class="navbar-brand" href="#" style="color: white;padding: 0px 6px 0px 12px;"><b>DASHBOARD<br>STATUS : <?php echo $_SESSION['aname'] ?></b></a>
 
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto topnav">

  <li class="nav-item">
  <a style="color: white;" class="nav-link active" aria-current="page" href="../report/"> รายงานประจำวัน/สัปดาห์/เดือน</a>
  </li>
  <li class="nav-item">
  <a style="color: white;" class="nav-link active" aria-current="page" href="../logout/"> ออกจากระบบ</a>
  </li>
</ul>

</ul>
</div>
</nav>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6" style="text-align: center;display: block;margin: auto;padding: 6px 0px 6px 0px;">
<img style="display: block;margin: auto;" src="../../images/<?php echo $rowsetup['img'];?>" height="100">
<div style="text-align: center;">  
<h5><?php echo $rowsetup['office'];?></h5>
<h5><?php echo $rowsetup['system'];?></h5>
</div>
</div>
<div class="col-md-3"></div>
</div>

<style type="text/css">
body{
	background: #FFFFFF;
}
.topnav a:hover {
border-bottom: 3px solid red;
}
</style>