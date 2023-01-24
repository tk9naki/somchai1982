<?php
include('../nav/index.php');
if(isset($_POST['submit'])){
    if($_POST['latitude']=='')
    {
    echo"<script>
    swal({
    title: 'เปิด GPS Location',
    text: 'กรุณาเปิดตำแหน่ง GPS Location หรืออนุญาตให้เข้าถึง Location ของอุปกรณ์ที่ท่านใช้งานอยู่',
    icon: 'warning'
    }).then(function() {
    // Redirect the user
    history.back();
    console.log('The Ok Button was clicked.');
    });
    </script>";
    exit();
    }

    if($_POST['longitude']=='')
    {
    echo"<script>
    swal({
    title: 'เปิด GPS Location',
    text: 'กรุณาเปิดตำแหน่ง GPS Location หรืออนุญาตให้เข้าถึง Location ของอุปกรณ์ที่ท่านใช้งานอยู่',
    icon: 'warning'
    }).then(function() {
    // Redirect the user
    history.back();
    console.log('The Ok Button was clicked.');
    });
    </script>";
    exit();
    }

    $resultsetup=$object->Readsetup();
    if(count($resultsetup)>0){
    foreach ($resultsetup as $rowsetup){
    $lat=$rowsetup['lat'];
    $lon=$rowsetup['lon'];
    $dis=$rowsetup['distance'];
    $h2=$rowsetup['h2'];
    $m2=$rowsetup['m2'];
    $s2=$rowsetup['s2'];
    }
    }
    $latitude=trim($_POST['latitude']);
    $longitude=trim($_POST['longitude']);
    function distance($lat1, $lon1, $lat2, $lon2, $unit) {
      if (($lat1 == $lat2) && ($lon1 == $lon2)) {
        return 0;
      }
      else {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K")
        {
          return ($miles * 1.609344);
        }
        else if ($unit == "T")
        {
          return ($miles * 1609.344);
        }
        else if ($unit == "N")
        {
          return ($miles * 0.8684);
        }
        else
        {
          return $miles;
        }
      }
    }
$b=number_format( distance($lat, $lon, $latitude, $longitude, "T"), 2, '.', '');
    if(($b)>=$dis){
    echo"<script>
    swal({
    title: 'ลงเวลาไม่ได้',
    text: 'ท่านอยู่ห่างจุด Check In $b เมตร',
    icon: 'warning'
    }).then(function() {
    // Redirect the user
    window.location.href = '../';
    console.log('The Ok Button was clicked.');
    });
    </script>";
    exit();
    }
$dateinid=trim($_POST['dateinid']);
$mid=trim($_POST['mid']);
$mname=trim($_POST['mname']);
$dateinname=trim($_POST['dateinname']);
$timein=date("Y-m-d H:i:s");
$timenow=date("Y-m-d H:i:s");
  $datetimenow=substr($timenow,11,8);
  $tt1=substr($datetimenow,0,2);
  $tt2=substr($datetimenow,3,2);
  $tt3=substr($datetimenow,6,2);
  $tt=$tt1.$tt2.$tt3;
  $datetimecheck=$tt;
  if($datetimecheck<=($h2.$m2.$s2)){
  $chk=1;
  }
  else
  {
  $chk=2;
  }
$cause='';
$timeout='';
$latitude=trim($_POST['latitude']);
$longitude=trim($_POST['longitude']);
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
title: 'ลงเวลาเรียบร้อย',
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