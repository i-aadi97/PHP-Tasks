<?php
// Start a session (if not already started)
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_name"])) {
    header("Location: registration_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["user_name"]; ?>!</h2>
    <p>Your email: <?php echo $_SESSION["user_email"]; ?></p>
    
    <!-- Logout button -->
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
