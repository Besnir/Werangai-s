<?php
include 'connection.php';

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $username = $_POST['username'];
        $countrySelect = $_POST['country'];
        $email = $_POST['mail'];
        $firstPassword = $_POST['pass'];
        $finalPassword = $_POST['confirm_pass'];

        if ($firstPassword !== $finalPassword) {
            $error = "Passwords do not match!";
        } else {
            // Check if username or email already exists
            $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $error = "Username or Email already exists!";
            }else {
            // Hash the password
            $firstPassword = password_hash($firstPassword, PASSWORD_BCRYPT);

            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, username, countrySelect, email, finalPassword) VALUES ( ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $firstName, $lastName, $username, $countrySelect, $email, $firstPassword);

            if ($stmt->execute()) {
                header("Location: login.php");
                exit();
            } else {
                $error = "Error: " . $stmt->error;
            }
        }
    }
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up~be.trades</title>
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
                        <a href="#" class="signup2">SIGN&nbsp;UP</a>
                        <a href="login.php" class="login2">LOGIN</a>
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
                    <a href="#" class="signup">SIGN&nbsp;UP</a>
                    <a href="login.php" class="login">LOGIN</a>
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
        <div class="signupWelcome">
            <h2 class="welcomeMessg">Begin your journey with <span>BE.TRADES</span> Today</h2>

            <div class="sign-up">
                <h1>Sign&nbsp;Up</h1>
                <h4>It's free and it'll take merely a minute.</h4>
                <form method="POST">
                    <?php if (!empty($error)): ?>
                        <div class="error-message">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    <div class="inp-box">
                        <input type="text" name="fname" required>
                        <span>First Name</span>
                    </div>
                    <div class="inp-box">
                        <input type="text" name="lname" required>
                        <span>Last Name</span>
                    </div>
                    <div class="inp-box">
                        <input type="text" name="username" required>
                        <span>Username</span>
                    </div>
                    <div class="inp-box">
                    <select id="countrySelect" name="country" required>
                    <option value="">--Select your country--</option>
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Antigua & Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Benin</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia & Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burundi</option>
                    <option>Cabo Verde</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Central African Republic</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo, DRC</option>
                    <option>Costa Rica</option>
                    <option>Cote d'Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Eswatini</option>
                    <option>Ethiopia</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>Gabon</option>
                    <option>Gambia</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Greece</option>
                    <option>Grenada</option>
                    <option>Guatemala</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>Korea, North</option>
                    <option>Korea, South</option>
                    <option>Kosovo</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mexico</option>
                    <option>Micronesia</option>
                    <option>Moldova</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montenegro</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Myanmar (Burma)</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>North Macedonia</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Qatar</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Saint Kitts & N.</option>
                    <option>Saint Lucia</option>
                    <option>Saint Vincent & the G.</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome & P.</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>South Sudan</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>Sudan</option>
                    <option>Suriname</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad & Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom (UK)</option>
                    <option>United States (USA)</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Vatican City</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                    <!-- Add more options as needed -->
                </select>
                    </div>
                    <div class="inp-box">
                        <input type="email" name="mail" required>
                        <span>Email</span>
                    </div>
                    <div class="inp-box">
                        <input id="password" type="password" name="pass" required>
                        <span>Password</span>
                        <i id="eye-icon" class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                    </div>
                    <div class="inp-box">
                        <input id="password2" type="password" name="confirm_pass" required>
                        <span>Confirm Password</span>
                        <i id="eye-icon2" class="toggle-password fas fa-eye" onclick="togglePasswordVisibility2()"></i>
                    </div>
                    <input class="submit-btn" type="submit" value="Sign&nbsp;Up">
                    <p>By clicking the Sign Up button you agree to our <a href="#">Terms & Privacy Policy.</a></p>
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </form>
            </div>
        </div>
        <div class="signupDescription">
            <img src="images/sign-up.jpg" alt="sign up description">
            <p>Welcome to our trading community! We're delighted to have you join us on this journey. Your presence adds value, and we're excited to learn and grow together.</p>
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