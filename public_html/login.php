<?php

if (isset($_POST['login'])) {
  session_start();
  require 'connection.php';
  $username = $_POST['uname'];
  $password = $_POST['pass'];
  $_SESSION['success'] = "";
  //to prevent from sql injection
  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);


  $sql = "select emp_id, username, password, job from credentials where username = '$username' and password = '$password' limit 1";
  $get_data = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($get_data);

  if (mysqli_num_rows($get_data) == 1) {

    if (isset($_POST['remember'])) {
      //set up cookie
      setcookie("user", $row['username'], time() + (86400 * 1)); // 86400 = 1 day
      setcookie("pass", $row['password'], time() + (86400 * 1));
    }
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    if ($row['job'] == 'pharmacist') {
      header('Location: homeP.html?eid=' . $row['emp_id'] . '');
    } else {
      header('Location: homeM.html?eid=' . $row['emp_id'] . '');
    }
  } else {
    echo "<script>
        alert('Wrong Credentials!!!');
        window.location.href= 'index.html';
        </script>";
  }
}