<?php
session_start();
$_SESSION['logged'] = false;
$_SESSION['username'] = "";
header("location: ../../");
?>
