<?php
include('../navmember/index.php');
if(isset($_POST['partid'])){  
$partid=trim($_POST['partid']);
$res=$object->Readworkid($partid);
if(count($res)>0){
echo'<option value="">คลิก</option>';
foreach($res as $row){
echo'<option value="'.$row['workid'].'">'.$row['workname'].'</option>';
}
}
}
?>