<?php
include('../nav/index.php');
if(isset($_POST['submit'])){
  if($_POST['latout']=='')
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

  if($_POST['lonout']=='')
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
  $timeout=date("Y-m-d H:i:s");
  $latout=$_POST['latout'];
  $lonout=$_POST['lonout'];
  $dateinname=date("Y-m-d");
  $resultsetup=$object->Readsetup();
  if(count($resultsetup)>0){
  foreach ($resultsetup as $rowsetup){
  $lat=$rowsetup['lat'];
  $lon=$rowsetup['lon'];
  $dis=$rowsetup['distance'];
  $h3=$rowsetup['h3'];
  $m3=$rowsetup['m3'];
  $s3=$rowsetup['s3'];
  }
  }
  $latout=trim($_POST['latout']);
  $lonout=trim($_POST['lonout']);
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
$b=number_format( distance($lat, $lon, $latout, $lonout, "T"), 2, '.', '');
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
  $ck=$object->Checktimeout($mid,$dateinname);
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
  $timenow=date("Y-m-d H:i:s");
  $datetimenow=substr($timenow,11,8);
  $tt1=substr($datetimenow,0,2);
  $tt2=substr($datetimenow,3,2);
  $tt3=substr($datetimenow,6,2);
  $tt=$tt1.$tt2.$tt3;
  $datetimecheck=$tt;
  if($datetimecheck<=($h3.$m3.$s3)){
  echo"<script>
  swal({
  title: 'ลงเวลาไม่ได้!',
  text: 'ยังไม่ถึงเวลาเลิกงานตามที่กำหนดไว้',
  icon: 'warning'
  }).then(function() {
  // Redirect the user
  window.location.href = '../';
  console.log('The Ok Button was clicked.');
  });
  </script>";
  exit();
  }
$object->Updatecheckout($mid,$dateinname,$timeout,$latout,$lonout);
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
include('../../f.html');
?>