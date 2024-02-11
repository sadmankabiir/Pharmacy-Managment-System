<?php
  require 'connection.php';
$rid = $_GET['id'];
$eid =$_GET['eid'];

$del = "Delete from medicines where medicine_id=".$rid.";";
mysqli_query($conn,$del);
header("location:updateM.html?eid=$eid")
   ?>