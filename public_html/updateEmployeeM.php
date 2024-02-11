<!DOCTYPE html>
<html>

<head>
    <title>Update Employees</title>
    <link rel="stylesheet" type="text/css" href="updateEmployeeM.css">
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
    $sql1 = "SELECT * from employees where emp_id = '$mid'";
    $get_data1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($get_data1);
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $phone_number = $row['phone_number'];
    $dob = $row['dob'];
    $salary = $row['salary'];
    $job = $row['job'];
    $join_date = $row['join_date'];
    $email = $row['email'];
    $address = $row['address'];

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
        <h1>Update Employees Information</h1>
    </div>
    <div class="main">
        <form action="employeeUpdateM.php?mid=<?= $mid; ?>&eid=<?= $eid; ?>" method="POST">
            <div id="name">
                <h2 class="name">First Name</h2>
                <h2 class="medicinename">
                    <?= $first_name; ?>
                </h2>
                <h2 class="name">Last Name</h2>
                <h2 class="genericname">
                    <?= $last_name; ?>
                </h2>


            </div>
            <h2 class="name">Phone Number</h2>
            <input type="text" class="phone" name="phone" value="<?= $phone_number; ?>" required>

            <h2 class="name">Date Of birth</h2>
            <h2 class="job">
                <?= $dob; ?>
            </h2>



            <h2 class="name">Salary</h2>
            <input type="number" class="salary" name="salary" value="<?= $salary; ?>" required>

            <h2 class="name">Job</h2>
            <h2 class="job">
                <?= $job; ?>
            </h2>


            <h2 class="name">Join Date</h2>
            <h2 class="job">
                <?= $join_date; ?>
            </h2>


            <h2 class="name">Email</h2>
            <input type="text" class="email" name="email" value="<?= $email; ?>" required>

            <h2 class="name">Address</h2>
            <input type="text" class="address" name="address" value="<?= $address; ?>" required>
            <br>
            <button type="submit">Update</button>
        </form>
        <div id="MyClockDisplay" class="datetime" onload="showTime()"></div>
        <script type="text/javascript" src="time.js"></script>
        <script type="text/javascript" src="nav.js"></script>
</body>

</html>