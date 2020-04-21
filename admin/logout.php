<?php
session_start();
unset($_SESSION['login_id']);
unset($_SESSION['login_username']);
unset($_SESSION['login_nama_pengguna']);
unset($_SESSION['login_email']);
header("location:login.php");
?>