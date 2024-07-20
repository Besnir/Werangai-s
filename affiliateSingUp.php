<?php
// Include the database connection file
include 'connection.php';

// Initialize variables for error messages and form data
$error = '';
$affUsername = '';
$email = '';
$phone = '';
$stmt = null; // Initialize $stmt

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $affUsername = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['mail']));
    $phone = htmlspecialchars(trim($_POST['number']));
    $password = htmlspecialchars(trim($_POST['pass']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_pass']));

    // Validate inputs
    if (empty($affUsername) || empty($phone) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email format.';
    } elseif ($password !== $confirm_password) {
        $error = 'Passwords do not match.';
    } else {
        // Check if username or email already exists
        $stmt = $conn->prepare("SELECT id FROM AffUsers WHERE username = ? OR email = ?");
        if ($stmt) {
            $stmt->bind_param("ss", $affUsername, $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $error = 'Username or email already exists.';
            } else {
                // Hash the password
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                // Prepare SQL statement to prevent SQL injection
                $stmt = $conn->prepare("INSERT INTO AffUsers (username, phone, email, password) VALUES (?, ?, ?, ?)");
                if ($stmt) {
                    $stmt->bind_param("ssss", $affUsername, $phone, $email, $hashed_password);

                    // Execute the statement
                    if ($stmt->execute()) {
                        // Redirect to a success page or show a success message
                        header("Location: affiliateLogin.php");
                        exit();
                    } else {
                        $error = 'An error occurred while registering. Please try again.';
                    }
                } else {
                    $error = 'Failed to prepare the SQL statement.';
                }
            }

            // Close the statement
            $stmt->close();
        } else {
            $error = 'Failed to prepare the SQL statement.';
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeMula sign-up</title>

  <link rel="stylesheet" href="styles/sing-up.css">
  <link rel="stylesheet" href="styles/general.css">
</head>
<body>
  <div class="sing-up-bar">
      <div class="signupWelcome">
          <h2 class="welcomeMessg">Register&nbsp;be<span>Mula</span>&nbsp;account.</h2>

          <div class="sign-up">
              <h1>BeMula&nbsp;registration</h1>
              <h4>Trade forex as well as earn with our affiliate programe.</h4>
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                  <?php if (!empty($error)): ?>
                      <div class="error-message"><?php echo $error; ?></div>
                  <?php endif; ?>
                  <div class="inp-box">
                    <input type="text" name="username" value="<?php echo htmlspecialchars($affUsername); ?>" required="required">
                    <span>Username</span>
                  </div>
                  <div class="inp-box">
                    <input type="text" name="number" value="<?php echo htmlspecialchars($phone); ?>" required="required">
                    <span>Phone</span>
                  </div>
                  <div class="inp-box">
                    <input type="email" name="mail" value="<?php echo htmlspecialchars($email); ?>" required="required">
                    <span>Email</span>
                  </div>
                  <div class="inp-box">
                    <input id="password" type="password" name="pass" required="required">
                    <span>Password</span>
                    <i id="eye-icon" class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                  </div>
                  <div class="inp-box">
                    <input id="password2" type="password" name="confirm_pass" required="required">
                    <span>Confirm Password</span>
                    <i id="eye-icon2" class="toggle-password fas fa-eye" onclick="togglePasswordVisibility2()"></i>
                  </div>
                <input class="submit-btn" type="submit" value="Register&nbsp;account">
                <p>Already have an account? <a href="affiliateLogin.php">Sign in.</a></p>
              </form>
          </div>
      </div>
  </div>

  <script src="scripts/styles.js"></script>
</body>
</html>
