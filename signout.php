<?php
require 'databaseConnection.php';
include 'header.php';

session_destroy();
echo 'You are being signed out. <a href="index.php">Return to the home page.</a>.';
 
include 'footer.php';
?>