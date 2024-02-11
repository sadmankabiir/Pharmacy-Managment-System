<?php
require 'connection.php';
$rid = $_GET['id'];
$eid = $_GET['eid'];

$del = "Delete from company where company_id=" . $rid . ";";
mysqli_query($conn, $del);
header("location:companyM.html?eid=$eid")
    ?>