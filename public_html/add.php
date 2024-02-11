<?php
require 'connection.php';
$page = $_GET['id'];
$eid = $_GET['eid'];

switch ($page) {
    case 'addCompanyM':
        if (isset($_POST['company_name']) && isset($_POST['address']) && isset($_POST['phone_number']) && isset($_POST['email'])) {
            $company_name = $_POST['company_name'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];


            $sql = "INSERT INTO company (company_name, address, phone_number, email)
			        values('$company_name', '$address', '$phone_number', '$email')";

            $is_inserted = mysqli_query($conn, $sql);

            if ($is_inserted) {
                header('Location: ' . 'companyM.html?eid=' . $eid . '');
            } else {
                echo 'Opps error!';
            }
        }
        break;

    case 'addsuppliersM':

        if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone_number']) && isset($_POST['company_name'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $phone_number = $_POST['phone_number'];
            $company_name = $_POST['company_name'];


            $sql = "INSERT INTO representatives (first_name, last_name, phone_number, company_name)
			        values('$first_name', '$last_name', '$phone_number', '$company_name')";

            $is_inserted = mysqli_query($conn, $sql);

            if ($is_inserted) {
                header('Location: ' . 'suppliersM.html?eid=' . $eid . '');
            } else {
                echo 'Opps error!';
            }
        }

        break;

    case 'addMedicinesM':
        if (isset($_POST['medicine_name']) && isset($_POST['generic_name']) && isset($_POST['otc']) && isset($_POST['company_name']) && isset($_POST['category']) && isset($_POST['retail_price']) && isset($_POST['purchase_price']) && isset($_POST['stock']) && isset($_POST['stock_minimum']) && isset($_POST['shelf_no']) && isset($_POST['expiry_date'])) {

            $medicine_name = $_POST['medicine_name'];
            $generic_name = $_POST['generic_name'];
            $otc = $_POST['otc'];
            $company_name = $_POST['company_name'];
            $category = $_POST['category'];
            $retail_price = $_POST['retail_price'];
            $purchase_price = $_POST['purchase_price'];
            $stock = $_POST['stock'];
            $stock_minimum = $_POST['stock_minimum'];
            $shelf_no = $_POST['shelf_no'];
            $expiry_date = $_POST['expiry_date'];


            $sql = "INSERT INTO medicines(medicine_name, generic_name, otc, company_name, category, retail_price, purchase_price, stock, stock_minimum, shelf_no, expiry_date)
			        values('$medicine_name', '$generic_name', '$otc', '$company_name', '$category', '$retail_price', '$purchase_price', '$stock', '$stock_minimum', '$shelf_no', '$expiry_date' )";

            $is_inserted = mysqli_query($conn, $sql);

            if ($is_inserted) {
                header('Location: ' . 'medicinesSell.html?eid=' . $eid . '');
            } else {
                echo 'Opps error!';
            }
        }
        break;

    default:
        break;
}
?>