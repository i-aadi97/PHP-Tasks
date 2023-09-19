<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Registration Form</title>
    
</head>

<body>
    <section class="registration-form-container">
        <div class="form-wrapper">
            <form action="process_registration.php" method="post" class="registration-form">
                <div class="full-name-block">
                    <label for="name" class="full-name">Full Name</label>
                    <input type="text" name="name" class="full-name-input">
                    <?php
                    session_start();
                    if (isset($_SESSION["validation_errors"]["name"])) {
                        echo '<p class="error-message">' . $_SESSION["validation_errors"]["name"] . '</p>';
                    }
                    ?>
                </div>
                <div class="email-block">
                    <label for="email" class="email">Email:</label>
                    <input type="email" name="email" class="email-block">
                    <?php
                    if (isset($_SESSION["validation_errors"]["email"])) {
                        echo '<p class="error-message">' . $_SESSION["validation_errors"]["email"] . '</p>';
                    }
                    ?>
                </div>
                <div class="password-block">
                    <label for="password" class="password">Password:</label>
                    <input type="password" name="password" class="password-input">
                    <?php
                    if (isset($_SESSION["validation_errors"]["password"])) {
                        echo '<p class="error-message">' . $_SESSION["validation_errors"]["password"] . '</p>';
                    }
                    ?>
                </div>
                <div class="confirm-password-block">
                    <label for="confirm_password" class="confirm-password">Confirm Password:</label>
                    <input type="password" name="confirm_password" class="confirm-password-input">
                    <?php
                    if (isset($_SESSION["validation_errors"]["confirm_password"])) {
                        echo '<p class="error-message">' . $_SESSION["validation_errors"]["confirm_password"] . '</p>';
                    }
                    ?>
                </div>
                <div class="submit-btn-block">
                    <input type="submit" value="Register" class="submit-btn">
                </div>
            </form>
        </div>
    </section>
    
</body>

</html>