<?php
require 'connection.php';
$eid = $_GET['eid'];
$rid = $_GET['rid'];
$phone = $_POST['phone'];

$sql = "UPDATE representatives SET phone_number = '$phone' WHERE rep_id = '$rid'";

$get_data = mysqli_query($conn, $sql);
if ($get_data) {
    header("Location: suppliersM.html?eid=$eid");
} else {
    echo 'Opps error!';
}


?>