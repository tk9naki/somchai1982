<?php
include('../navmember/index.php');
if(isset($_POST['partidd'])){  
$partidd=trim($_POST['partidd']);
$res=$object->Readworkidd($partidd);
if(count($res)>0){
echo'<option value="">คลิก</option>';
foreach($res as $row){
echo'<option value="'.$row['workid'].'">'.$row['workname'].'</option>';
}
}
}
?>