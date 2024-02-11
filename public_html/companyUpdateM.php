<?php
require 'connection.php';
$eid = $_GET['eid'];
$cid = $_GET['cid'];
$phone = $_POST['phone_number'];

$email = $_POST['email'];
$address = $_POST['address'];

$sql = "UPDATE company SET phone_number = '$phone' ,  email = '$email', address = '$address' WHERE company_id = '$cid'";

$get_data = mysqli_query($conn, $sql);
if ($get_data) {
    header("Location: companyM.html?eid=$eid");
} else {
    echo 'Opps error!';
}


?>