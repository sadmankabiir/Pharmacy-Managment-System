<?php
         require 'connection.php';
        $eid =$_GET['eid'];
        $mid =$_GET['mid'];
        $stock = $_POST['stock'];
        $stock_minimum = $_POST['stockM'];
        $shelf_no = $_POST['shelf'];
        $expiry = $_POST['expiry'];
        $rprice = $_POST['rprice'];
        $pprice = $_POST['pprice'];

        $sql = "UPDATE medicines SET stock = '$stock' , stock_minimum= '$stock_minimum', shelf_no = '$shelf_no', expiry_date = '$expiry', retail_price = '$rprice', purchase_price = '$pprice' WHERE medicine_id = '$mid'";

        $get_data = mysqli_query($conn, $sql);
        header("Location: updateM.html?mid= $mid &eid=$eid");

?>