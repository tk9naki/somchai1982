<?php
include('../navreport/index.php');

$ds=$_POST['dates'];
$df=$_POST['datef'];


$dss=substr($ds,-10);
$dff=substr($df,-10);

$dates=$dss.' '.'00:00:00';
$datef=$dff.' '.'23:59:59';
$res=$object->Numleave($dates,$datef);
if(count($res)>0)
{
include 'show.php';
}
else
{
include 'shownone.php';
}
?>