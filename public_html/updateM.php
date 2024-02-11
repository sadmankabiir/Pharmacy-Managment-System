<!DOCTYPE html>
<html>

<head>
    <title>Pharmacist - Update Stock</title>
    <link rel="stylesheet" type="text/css" href="updatePage.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    require 'connection.php';
    $eid = $_GET['eid'];
    $sql = "SELECT first_name, last_name from employees where emp_id ='$eid'";
    $get_data = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($get_data);
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $full_name = ' ' . $first_name . ' ' . $last_name;
    ?>


    <?php
    require 'connection.php';
    $eid = $_GET['eid'];

    $mid = $_GET['mid'];

    $sql1 = "SELECT * from medicines where medicine_id = '$mid'";
    $get_data1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($get_data1);
    $medicine_name = $row['medicine_name'];
    $generic_name = $row['generic_name'];
    $company_name = $row['company_name'];
    $purchase_price = $row['purchase_price'];
    $retail_price = $row['retail_price'];
    $stock = $row['stock'];
    $stock_minimum = $row['stock_minimum'];
    $category = $row['category'];
    $shelf_no = $row['shelf_no'];
    $expiry = $row['expiry_date'];

    ?>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-capsule icon'></i>
            <div class="logo_name">PMS</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="homeM.html?eid=<?= $eid; ?>">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="medicinesM.html?eid=<?= $eid; ?>">
                    <i class='bx bxl-medium-old'></i>
                    <span class="links_name">Medicines live Search</span>
                </a>
                <span class="tooltip">Medicines live Search</span>
            </li>
            <li>
                <a href="shortageM.html?eid=<?= $eid; ?>">
                    <i class='bx bx-line-chart-down'></i>
                    <span class="links_name">Shortage</span>
                </a>
                <span class="tooltip">Shortage</span>
            </li>
            <li>
                <a href="updateM.html?eid=<?= $eid; ?>">
                    <i class='bx bxs-cog'></i>
                    <span class="links_name">Update</span>
                </a>
                <span class="tooltip">Update</span>
            </li>
            <li>
                <a href="employees.html?eid=<?= $eid; ?>">
                    <i class='bx bx-male-female'></i>
                    <span class="links_name">Employees</span>
                </a>
                <span class="tooltip">Employees</span>
            </li>
            <li>
                <a href="companyM.html?eid=<?= $eid; ?>">
                    <i class='bx bx-buildings'></i>
                    <span class="links_name">Companies</span>
                </a>
                <span class="tooltip">Companies</span>
            </li>
            <li>
                <a href="suppliersM.html?eid=<?= $eid; ?>">
                    <i class='bx bx-male-female'></i>
                    <span class="links_name">Suppliers</span>
                </a>
                <span class="tooltip">Suppliers</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <div class="name_job">
                        <div class="name">
                            <?= $full_name ?>
                        </div>
                        <div class="job">Manager</div>
                    </div>
                </div>
                <i class='bx bx-log-out' onclick="window.location.href= 'logout.php'" id="log_out"></i>
                <span class="tooltip">Log out</span>
            </li>
        </ul>
    </div>
    <div class="update">
        <h1>Update Medicines Info and Stock</h1>
    </div>
    <div class="main">
        <form action="medicineUpdateM.php?mid=<?= $mid; ?>& eid=<?= $eid; ?>" method="POST">
            <div id="name">
                <h2 class="name">Medicine Name</h2>
                <h2 class="medicinename">
                    <?= $medicine_name; ?>
                </h2>
                <h2 class="name">Generic Name</h2>
                <h2 class="genericname">
                    <?= $generic_name; ?>
                </h2>


            </div>
            <h2 class="name">Company</h2>
            <h2 class="company">
                <?= $company_name; ?>
            </h2>

            <h2 class="name">Purchase Price</h2>
            <input type="number" class="pprice" name="pprice" value="<?= $purchase_price; ?>" required>


            <h2 class="name">Retail Price</h2>
            <input type="number" class="rprice" name="rprice" value="<?= $retail_price; ?>" required>

            <h2 class="name">Stock</h2>
            <input type="number" class="stock" name="stock" value="<?= $stock; ?>" required>


            <h2 class="name">Stock Minimum</h2>
            <input type="number" class="stockM" name="stockM" value="<?= $stock_minimum; ?>" required>


            <h2 class="name">Category</h2>
            <h2 class="category">
                <?= $category; ?>
            </h2>

            <h2 class="name">Shelf No</h2>
            <input type="text" class="shelf" name="shelf" value="<?= $shelf_no; ?>" required>

            <h2 class="name">Expiry Date</h2>
            <input type="date" class="expiry" name="expiry" value="<?= $expiry; ?>" required>
            <br>
            <button type="submit">Update</button>


        </form>


    </div>
    <div id="MyClockDisplay" class="datetime" onload="showTime()"></div>
    <script type="text/javascript" src="time.js"></script>
    <script type="text/javascript" src="nav.js"></script>
</body>

</html>