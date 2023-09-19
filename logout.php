<?php
// Start the session (if not already started)
session_start();

// Destroy all session data
session_destroy();

// Redirect the user to the login page or any other appropriate page
header("Location: registration_form.php"); // Change "login.php" to the desired destination page
exit();
?>
