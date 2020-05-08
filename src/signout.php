<?php
session_start();
require_once('../includes/auth_functions.php');
signout('signin.php','signout.php','user/email');
?>