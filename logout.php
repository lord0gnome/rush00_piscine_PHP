<?php
session_start();
$_SESSION[logged_in] = NULL;
header('Location: http://localhost:8080/rush00/index.php');
?>
