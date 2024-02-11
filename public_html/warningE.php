<?php
require 'connection.php';
$rid = $_GET['id'];
$eid = $_GET['eid'];

$del = "Delete from employees where emp_id=" . $rid . ";";
$delc = "Delete from credentials where emp_id=" . $rid . ";";
mysqli_query($conn, $del);
mysqli_query($conn, $delc);
header("location:employees.html?eid=$eid");
?>