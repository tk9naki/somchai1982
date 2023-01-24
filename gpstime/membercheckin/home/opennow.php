<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">

<div style="padding: 6px 12px 12px 12px;">
<div class="row row-cols-1 row-cols-md-3 g-1">
<div class="col">
<div class="card h-40">
<div class="card bg-success">
<div class="card-body text-center">
<p class="card-text"><h5 class="card-title" style="color: white;"><b>ลงเวลาทำงาน</b></h5></p>
<p class="card-text"><img src="../../images/checkin.png" height="35"><h5></h5></p>
<p><a href="../formcheckin/" class="btn btn-outline-light" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
</div>
</div>
</div>
</div>

<div class="col">
<div class="card h-40">
<div class="card bg-warning">
<div class="card-body text-center">
<p class="card-text"><h5 class="card-title" style="color: white;"><b>ลาป่วย-ลากิจ</b></h5></p>
<p class="card-text"><img src="../../images/hms.png" height="35"><h5></h5></p>
<p><a href="../formleave/" class="btn btn-outline-light" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
</div>
</div>
</div>
</div>

<div class="col">
<div class="card h-40">
<div class="card bg-primary">
<div class="card-body text-center">
<p class="card-text"><h5 class="card-title" style="color: white;"><b>ลงเวลาเลิกงาน</b></h5></p>
<p class="card-text"><img src="../../images/checkin.png" height="35"><h5></h5></p>
<p><a href="../formcheckout/" class="btn btn-outline-light" style="padding: 6px 50px 6px 50px;"> คลิกที่นี่ </a></p>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="col-md-1"></div>
</div>

<div class="row" style="padding: 6px 6px 6px 6px;">
<div class="col-md-1"></div>
<div class="col-md-10">
<div style="text-align: center;padding: 12px 0px 6px 0px;">  
<h5>ทะเบียนลงเวลาปฏิบัติงาน</h5>
<h5><?php echo $mname;?></h5>
</div>
<div class="table">
<table id="example" class="table table-striped table-bordered" style="width:100%;background:#ffffff;">
<thead>
<tr>
<th style="text-align: center;">วันที่</th>
<th style="text-align: center;">เข้างาน</th>
<th style="text-align: center;">สถานนะ</th>
<th style="text-align: center;">เลิกงาน</th>
<!--<th style="text-align: center;">Info</th>-->
</tr>
</thead>
<tbody>
<?php
if(count($resultcheckinmid)>0){
$i=1;
foreach ($resultcheckinmid as $rowcheckinmid)
{
  $latitude=$rowcheckinmid['latitude'];
  $longitude=$rowcheckinmid['longitude'];
  $latout=$rowcheckinmid['latout'];
  $lonout=$rowcheckinmid['lonout'];
?>
<tr>
<td style="text-align: center;"><?php echo substr($rowcheckinmid['dateinname'],8,2)?> <?php echo $thaimonth[(substr($rowcheckinmid['dateinname'],5,2)-1)]?> <?php echo (substr($rowcheckinmid['dateinname'],2,2)+43)?></td>
<td style="text-align: center;"><?php echo substr($rowcheckinmid['timein'],11,8)?></td>
<td style="text-align: center;">
<?php
$tck=substr($rowcheckinmid['timein'],11,8);
$t1=substr($tck,0,2);
$t2=substr($tck,3,2);
$t3=substr($tck,6,2);
$ts=$t1.$t2.$t3;
$tss=$ts+100000;
if($tss==100000)
{
echo "ลา";  
}
elseif($tss>($rowsetup['h2'].$rowsetup['m2'].$rowsetup['s2'])+100000)
{
echo "สาย";
}
else
{
echo "ปกติ";
}
?>
</td>
<td style="text-align: center;"><?php echo substr($rowcheckinmid['timeout'],11,9)?></td>
<!--<td style="text-align: center;">รอทำ</td>-->
</tr>
<?php $i++; } ?>
</tbody>
<?php } ?>
</table>
</div>
<div class="col-md-1"></div>
</div>
</div>

      <p style="text-align: center;display: block;margin: auto;padding: 12px 12px;">
      <a href="../logout/" style="padding: 6px 24px;" class="btn btn-danger"><img src="../../images/close.png" width="24"> ออกจากระบบ</a>
      </p>

<!--DATATBLE-->
<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable( {
  "pageLength": 10,
  "order": [[ 0, "asc" ]]
} )
} );
</script>

<?php
include ('../f.html');
?>