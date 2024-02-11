<!DOCTYPE html>
<html>

<head>
    <title>Update Companies</title>

    <link rel="stylesheet" type="text/css" href="medicinesM.css">
    <link rel="stylesheet" type="text/css" href="index.css">
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
    $cid = $_GET['cid'];
    $sql1 = "SELECT * from company where company_id = '$cid'";
    $get_data1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($get_data1);
    $name = $row['company_name'];
    $address = $row['address'];
    $phone_number = $row['phone_number'];
    $email = $row['email'];

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
    <?php $page = "addCompanyM";
    $eid = $_GET['eid']; ?>
    <div class="container">
        <div class="form">
            <form action="companyUpdateM.php?cid=<?= $cid; ?>&eid=<?= $eid; ?>" method="POST">
                <div class="title">Update Company</div>
                <div class="input-box underline">
                    <input type="text" placeholder="Company Name" name="company_name" autocomplete="off" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box underline">
                    <input type="text" placeholder="Address" name="address" autocomplete="off" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box underline">
                    <input type="text" placeholder="Phone Number" name="phone_number" autocomplete="off" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box underline">
                    <input type="text" placeholder="Email" name="email" autocomplete="off" required>
                    <div class="underline"></div>
                </div>
                <div class="input-box button">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <div id="MyClockDisplay" class="datetime" onload="showTime()"></div>
    <script type="text/javascript" src="time.js"></script>
    <script type="text/javascript" src="nav.js"></script>
</body>

</html>