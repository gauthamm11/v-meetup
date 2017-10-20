// <?php
// session_start();
// session_destroy();
// unset($_SESSION['uname']);
// header("Location: login.php");
// ?>

<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>