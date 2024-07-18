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
          <h2 class="welcomeMessg">Sing in be<span>Mula.</span></h2>

          <div class="sign-up">
              <h1>Sign in to your account.</h1>
              <form method="POST" action="<?php echo ($_SERVER["php_SELF"]); ?>">
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