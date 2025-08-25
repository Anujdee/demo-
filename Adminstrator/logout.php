<?php
session_start();  // Start the session

// Destroy all session variables
session_unset();  // Removes all session variables
session_destroy();  // Destroys the session

// Redirect the user to the login page (index.php)
header("Location: index.php");
exit();  // Ensure no further code is executed
?>
