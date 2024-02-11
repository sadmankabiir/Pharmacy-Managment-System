<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    require 'connection.php';

    $errors = array();


    if (isset($_POST['uname']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pnum']) && isset($_POST['bdate']) && isset($_POST['addr']) && isset($_POST['pass']) && isset($_POST['job']) && isset($_POST['salary'])) {
        $username = $_POST['uname'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $pnum = $_POST['pnum'];
        $bdate = $_POST['bdate'];
        $salary = $_POST['salary'];
        $joindate = $_POST['joindate'];
        $address = $_POST['addr'];
        $password = $_POST['pass'];
        $confirmpass = $_POST['confpass'];
        $choose = $_POST['job'];

        if ($password != $confirmpass) {
            array_push($errors, "Passwords do not match");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "invalid email format");
        }

        $sql1 = "SELECT * FROM credentials WHERE username = '$username' LIMIT 1";
        $get_data = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($get_data);

        if ($row) {
            if ($row['username'] === $username) {
                array_push($errors, "Username already exists");
            }
        }

        $sql2 = "SELECT * FROM employees WHERE email = '$email' LIMIT 1";
        $get_data = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_assoc($get_data);

        if ($row) {
            if ($row['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        if (count($errors) == 0) {
            $query = "INSERT INTO employees (first_name, last_name, phone_number, dob, salary, job, join_date, email, address) 
         VALUES ('$fname','$lname','$pnum','$bdate','$salary','$choose','$joindate','$email','$address')";
            $result = mysqli_query($conn, $query);

            $query2 = "INSERT INTO credentials ( username, password) 
         VALUES ('$username','$password')";
            $result = mysqli_query($conn, $query2);
            if (!$result) {
                die('Could not enter data: ');
            } else {
                echo ("We inserted the informations");
            }
            header('Location: index.html');
        }
    }
    ?>
    <div class="container">
        <form method="post">
            <?php include('errors.php'); ?>
            <div class="title">Register</div>
            <div class="input-box underline">
                <input type="text" placeholder="Username" name="uname" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <div class="input-box underline">
                <input type="text" placeholder="First Name" name="firstname" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <div class="input-box underline">
                <input type="text" placeholder="Last Name" name="lastname" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <div class="input-box underline">
                <input type="text" placeholder="Email Address" name="email" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <div class="input-box underline">
                <input type="number" placeholder="Phone Number" name="pnum" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <div class="input-box underline">
                <input type="text" placeholder="Date Of Birth (year-month-day)" name="bdate" autocomplete="off"
                    required>
                <div class="underline"></div>
            </div>
            <div class="input-box underline">
                <input type="number" placeholder="Salary" name="salary" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <div class="input-box underline">
                <input type="text" placeholder="Join Date (year-month-day)" name="joindate" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <div class="input-box underline">
                <input type="text" placeholder="Home Address" name="addr" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter Your Desired Password" name="pass" autocomplete="off"
                    required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" name="confpass" autocomplete="off" required>
                <div class="underline"></div>
            </div>
            <label for="job">Job: </label>
            <select class="searchby" name="job" required>
                <option value="pharmacist" name="pharmacist">Pharmacist</option>
                <option value="manager" name="manager">Manager</option>
            </select>
            <div class="input-box button">
                <input type="submit" name="" value="Register">
            </div>
            <h3>Already a Manager? <a href="index.html">Login</a></h3>
        </form>
    </div>
</body>

</html>