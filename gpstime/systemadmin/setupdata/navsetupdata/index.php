<?php
include('../h.php');
$aid=$_SESSION['aid'];
$aname=$_SESSION['aname'];
  if($_SESSION['aid']=='')
  {
  echo "<script>window.location='../../logout/'</script>";
  }
    //$resultclass=$object->Readclass();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
<a class="navbar-brand" href="#" style="font-size: 16px;padding: 0px 6px 0px 12px;color: white;"><b>DashBoard<br>admin : <?php echo $_SESSION['aname'] ?></b></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto topnav">
    <li class="nav-item">
  <a style="color:white;" class="nav-link active" aria-current="page" href="../../home/"> หน้าหลัก</a>
  </li>
    <li class="nav-item">
  <a style="color: white;" class="nav-link active" aria-current="page" href="../../logout/"> ออกจากระบบ</a>
  </li>
</ul>
</div>
</nav>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6" style="text-align: center;display: block;margin: auto;padding: 0px 0px 0px 0px;">
<img style="display: block;margin: auto;" src="../../../images/<?php echo $rowsetup['img'];?>" height="100">
</div>
<div class="col-md-3"></div>
</div>

<div style="text-align: center;padding: 0px 0px 0px 0px;">  
<h3><b><?php echo $rowsetup['office'];?></b></h3>
<h4><?php echo $rowsetup['system'];?></h4>
</div>