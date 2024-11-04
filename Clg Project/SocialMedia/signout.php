<?php
// Start a session
session_start();
echo 'Log Out, Please Wailt...';
// Destroy the session
session_destroy();
// Redirect the user to the login page or any other desired page
 header('location:home.php');
exit;
?>
