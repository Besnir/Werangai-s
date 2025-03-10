<?php
include 'connection.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, username, finalPassword FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $username, $finalPassword);
    $stmt->fetch();

    if ($stmt->num_rows == 1 && password_verify($password, $finalPassword)) {
        // Start a session and store user information
        session_start();
        $_SESSION['main_user_id'] = $id;
        $_SESSION['username'] = $username;
        header("Location: Dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login~be.trades</title>
    <link rel="website icon" type="png" href="images/betradeslogo.png">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/sing-up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <div class="loader"></div>
    <!--header section-->
    <header>
        <nav>
            <ul class="nav-bar">
                <div class="icon">
                    <div class="company-logo">
                        <img src="images/betradeslogo.png" alt="logo">
                    </div>
                    <div class="company-name">
                        <h1>BE<br>TRADES</h1>
                    </div>
                </div>

                <span id="rootMain" class="menu">
                    <div class="sidebar-title1">
                        <div class="sidebar-brand1">
                            <div class="company-logo1">
                                <img src="images/betradeslogo.png">
                            </div>
                            <div class="company-name1">
                                <p>BE<br>TRADES</p>
                            </div>
                            <span class="material-icons-outlined" onclick="toggleMainMenu()">close</span>
                        </div>
                    </div>

                    <li><a href="index.php">Home</a></li>
                    <li><a href="mentorship.php">Mentorship&nbsp;Plan</a></li>
                    <li><a href="pipsCalculator.php">Pips&nbsp;Calculator</a></li>
                    <li><a href="faqs.php">Faqs</a></li>
                    <li><a href="contact-us.php">Contact&nbsp;Us</a></li>

                    <div class="dashboard-details2">
                        <a href="sign-up.php" class="signup2">SIGN&nbsp;UP</a>
                        <a href="#" class="login2">LOGIN</a>
                    </div>
                </span>

                <div class="cart-logo" onclick="toggleCarttSidebar()">
                    <div class="cart-icon">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </div>
                    <div id="cartCount" class="cart-badge">0</div>
                    <div class="cart-tip">Click&nbsp;to&nbsp;view</div>
                </div>

                <div class="dashboard-details">
                    <a href="sign-up.php" class="signup">SIGN&nbsp;UP</a>
                    <a href="#" class="login">LOGIN</a>
                </div>

                <span onclick="toggleMainMenu()" class="material-icons-outlined icon1">menu</span>
            </ul>
        </nav>
    </header>
    <!--body section-->
    <main class="main1" id="cartRoot">
        <div class="cartHead">
            <span class="material-icons-outlined" onclick="toggleCarttSidebar()">close</span>
            <h1>My Cart</h1>
        </div>
        <p id="js-emptyCart" class="js-itemsP">Your cart is Empty !</p>
        <div id="cartItem"></div>
        <div class="foot">
            <p>Total :</p>
            <p id="total"><strong>$0</strong></p>
        </div>
        <a href="customerOder.php" class="cartPlaceOrder">Place&nbsp;Order</a>
    </main>

    <div class="sing-up-bar">
        <div class="loginWelcome">
            <h2 class="welcomeMessg">Welcome <span>back,</span></h2>

            <div class="sign-up">
                <h1>Login</h1>
                <form method="POST">
                <?php if (!empty($error)): ?>
                    <div class="error-message">
                        <?php echo $error; ?>
                    </div>
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
                    <p>Don't have an account? <a href="sign-up.php">Sign Up.</a></p>
                </form>
            </div>
        </div>
        <div class="loginDescription">
            <img src="images/login.jpg" alt="Login_Image">
            <p>Welcome back! We're thrilled to see you here again. Your continued support means the world to us. Let's make today even better together!</p>
        </div>
    </div>
    <!--footer section-->
    <footer>
        <div class="platform">
            <div class="platform-ih">
                <img src="images/betradeslogo.png" alt="">
                <h1>BE.TRADES</h1>
            </div>
            <ul class="social-handles">
                <li><a class="Instagram" href="https://www.instagram.com/_be.trades" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a class="YouTube" href="https://www.youtube.com/@blessedemmanuel254" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a class="Email" href="mailto:betrades23@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                <li><a class="Telegram" href="https://t.me/+254773029440" target="_blank"><i class="fa-brands fa-telegram"></i></a></li>
                <li><a class="WhatsAapp" href="https://wa.me/254773029440" target="_blank"><i class="fa-brands fa-whatsapp fa-2x"></i></a></li>
            </ul>
            <div class="desc">
                <p>
                    Discover unparalleled possibilities on our trading platform! Seamlessly designed for traders of all backgrounds, we offer a comprehensive suite of tools and resources to elevate your trading experience. Gain access to real-time market data, advanced analysis tools, and a vibrant community of fellow traders. Whether you're a novice seeking guidance or a seasoned professional looking for new opportunities, our platform is your gateway to success. Join us today and unlock your potential in the world of trading!
                </p>
            </div>
        </div>
        <ul class="footer-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="mentorship.php">Mentorship&nbsp;Plan</a></li>
            <li><a href="pipsCalculator.php">Pips&nbsp;Calculator</a></li>
            <li><a href="faqs.php">Faqs</a></li>
            <li><a href="contact-us.php">Contact&nbsp;Us</a></li>
        </ul>
        <p>Copyright &copy; 2024 <span>Be.Trades </span>&#8226; All rights reserved. Site built by <a href="https://www.instagram.com/blessedemmanuel254">Emmanuel's Developers</a>.</p>
    </footer>
    <script src="scripts/styles.js"></script>
</body>
</html>