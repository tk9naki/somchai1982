<?php
include('../h.php');
session_start();
$mid=$_SESSION['mid'];
$mname=$_SESSION['mname'];
$dateon=date("Y-m-d");
$datetimeon=date("Y-m-d H:i:s");
if(empty($_SESSION['mid']))
	{
	echo "<script>window.location='../logout/'</script>";
	}
		$resultdateon=$object->Readdateon($dateon);
		if(count($resultdateon)>0){
		foreach($resultdateon as $rowdateon);
		}
		
		$resultcheckinmid=$object->Readcheckinmid($mid);
		
		$resultcheckindate=$object->Readcheckindate($dateon,$mid);
		if(count($resultcheckindate)>0){
		foreach($resultcheckindate as $rowcheckindate);
		}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-primary"><img src="../../images/<?php echo $rowsetup['img'];?>" height="50">
<a class="navbar-brand" href="#" style="color: white;padding: 0px 6px 0px 12px;"><b>DashBoard<br>พนักงาน : <?php echo $_SESSION['mname'] ?></b></a>
 
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto topnav">
<li class="nav-item active">
<a class="nav-link" href="../home/" style="text-align: center;color: white;">หน้าหลัก </a>
</li>

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="../logout/" style="color: white;">ออกจากระบบ </a>
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