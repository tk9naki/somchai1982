<?php
$dateinname=date("Y-m-d");
require ('db/autodate.php');
$object=new CRUD();
$resultautodate=$object->Readautodate($dateinname);
if(count($resultautodate)>0) {
	echo"<script>window.location='login/';</script>";
}
else{
$object->Adddate($dateinname);
	echo"<script>window.location='login/';</script>";
}

?>