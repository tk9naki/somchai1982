<?php
include('../nav/index.php');
$datetimenow=substr($datetimeon, 11,8);
$tt1=substr($datetimenow,0,2);
$tt2=substr($datetimenow,3,2);
$tt3=substr($datetimenow,6,2);
$tt=$tt1.$tt2.$tt3;
$datetimecheck=$tt+100000;
if((count($resultdateon)>0) AND $datetimecheck <= ($rowsetup['h1'].$rowsetup['m1'].$rowsetup['s1'])+100000)
{
include('close.php');
}
elseif((count($resultdateon)>0) AND $datetimecheck <= ($rowsetup['h4'].$rowsetup['m4'].$rowsetup['s4'])+100000)
{
include('opennow.php');
}
else
{
include('close.php');
}
?>
