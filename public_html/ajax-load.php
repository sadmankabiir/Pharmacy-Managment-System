<?php
require 'connection.php';

$query = '';
if (!empty($_POST['search'])) {
    $query = $_POST['search'];
}
echo
    '<tr>
    <th width="100px">Medicine</th>
    <th width="400px">Generic</th>
    <th width="400px">Company</th>
    <th width="60px">OTC</th>
    <th width="100px">Price</th>
    <th width="100px">Stock</th>
    <th width="100px">Shelf No.</th>
</tr>';
$sql = "SELECT * FROM medicines WHERE `medicine_name` LIKE '%" . $query . "%'";
$get_data = mysqli_query($conn, $sql);
if (mysqli_num_rows($get_data) > 0) {
    while ($row = mysqli_fetch_assoc($get_data)) {
        echo '<tr>
                  <td>' . $row['medicine_name'] . '</td>
                  <td>' . $row['generic_name'] . '</td>
                  <td>' . $row['company_name'] . '</td>
                  <td>' . $row['otc'] . '</td>
                  <td>' . $row['retail_price'] . '</td>
                  <td>' . $row['stock'] . '</td>
                  <td>' . $row['shelf_no'] . '</td>
               </tr>';
    }
}
echo "</table>";