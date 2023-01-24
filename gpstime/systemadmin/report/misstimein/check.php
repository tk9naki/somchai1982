<?php
include('../navreport/index.php');

$dates=$_POST['dates'];
$res=$object->Numnotcheckin($dates);
if(count($res)>0)
{
include 'show.php';
}
else
{
include 'shownone.php';
}
?>