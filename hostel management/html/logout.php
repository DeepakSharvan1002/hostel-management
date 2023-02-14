<?php

session_start();
session_destroy();
echo '<script>alert("logout sucessfully")</script>';
header('location: login.php');

?>