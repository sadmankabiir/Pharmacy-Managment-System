<?php
session_start();
session_destroy();

if (isset($_COOKIE["user"]) and isset($_COOKIE["pass"])) {
    setcookie("user", '', time() - (3600)); // set the expiration date to one hour ago
    setcookie("pass", '', time() - (3600));
}

header('location:index.html');