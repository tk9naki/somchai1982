<?php
session_start();
$aid=$_SESSION['aid'];
if(empty($_SESSION['aid']))
{
echo "<script>window.location='../../'</script>";
}
require '../../db/report.php';
$object = new CRUD();
include('../h.html');
?>