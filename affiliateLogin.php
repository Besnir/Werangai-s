<?php
// Include the database connection file
include 'connection.php';

// Initialize variables for error messages
$error = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $email = htmlspecialchars(trim($_POST['mail']));
    $password = htmlspecialchars(trim($_POST['pass']));

    // Validate inputs
    if (empty($email) || empty($password)) {
        $error = 'Email and password are required.';
    } else {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT id, password FROM AffUsers WHERE email = ?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            // Check if the user exists
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($user_id, $hashed_password);
                $stmt->fetch();

                // Verify the password
                if (password_verify($password, $hashed_password)) {
                    // Start session and set user session variables
                    session_start();
                    $_SESSION['affiliate_user_id'] = $user_id;
                    $_SESSION['email'] = $email;

                    // Redirect to a user dashboard or home page
                    header("Location: dashboardAffiliateprograme.php");
                    exit();
                } else {
                    $error = 'Incorrect password.';
                }
            } else {
                $error = 'No user found with this email.';
            }

            // Close the statement
            $stmt->close();
        } else {
            $error = 'Failed to prepare the SQL statement.';
        }
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeMula login</title>

  <link rel="stylesheet" href="styles/general.css">
  <link rel="stylesheet" href="styles/sing-up.css">
</head>
<body>
  <div class="sing-up-bar">
      <div class="loginWelcome">
          <h2 class="welcomeMessg">Sign in be<span>Mula.</span></h2>

          <div class="sign-up">
              <h1>Sign in to your account.</h1>
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <?php if (!empty($error)): ?>
                  <div class="error-message"><?php echo $error; ?></div>
              <?php endif; ?>
                  <div class="inp-box">
                    <input type="email" name="mail" required="required">
                    <span>Email</span>
                  </div>
                  <p class="forgoP"><a href="#">Forgot Password?</a></p>
                  <div class="inp-box">
                      <input id="password" type="password" name="pass" required="required">
                      <span>Password</span>
                      <i id="eye-icon" class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                  </div>
                  <input class="submit-btn" type="submit" value="Login">
                  <p>Don't have an account? <a href="affiliateSingUp.php">Register account.</a></p>
              </form>
          </div>
      </div>
  </div>
</body>
</html>