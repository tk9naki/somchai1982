<?php
include('../navmember/index.php');
//if(isset($_POST['submit'])){
$mid=trim($_POST['mid']);
$object->Deletemember($mid);
echo"<script>window.location.href = '../';</script>";
//}
include('../f.html');
?>