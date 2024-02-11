<?php
require 'connection.php';

$ridp = $_GET['id'];
$eid = $_GET['eid'];
echo $eid;
$del = "Delete from representatives where rep_id=" . $ridp . ";";
$connection = mysqli_query($conn, $del);
if ($connection) {
    header('Location: suppliersM.html?eid=' . $eid . '');
} else {
    echo 'error';
}
?>