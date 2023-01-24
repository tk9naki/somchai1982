<?php
include('../navassistant/index.php');
//if(isset($_POST['submit'])){
$assistantid=trim($_POST['assistantid']);
$object->Deleteassistant($assistantid);
echo"<script>window.location.href = '../';</script>";
//}
include('../f.html');
?>