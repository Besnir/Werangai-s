<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us~be.trades</title>
  <link rel="website icon" type="image/png" href="images/betradeslogo.png">

  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/general.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/contact-us.css">

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
            <img src="images/betradeslogo.png" alt="Be.Trades Logo">
          </div>
          <div class="company-name">
            <h1>BE<br>TRADES</h1>
          </div>
        </div>

        <span id="rootMain" class="menu">
          <div class="sidebar-title1">
            <div class="sidebar-brand1">
              <div class="company-logo1">
                <img src="images/betradeslogo.png" alt="Be.Trades Logo">
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
          <li><a class="active" href="#">Contact&nbsp;Us</a></li>

          <div class="dashboard-details2">
            <a href="sign-up.php" class="signup2">SIGN&nbsp;UP</a>
            <a href="login.php" class="login2">LOGIN</a>
          </div>
        </span>

        <div class="cart-logo" onclick="toggleCarttSidebar()">
          <div class="cart-icon">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>
          </div>
          <div id="cartCount" class="cart-badge">0</div>
          <div class="cart-tip">
            Click&nbsp;to&nbsp;view
          </div>
        </div>

        <div class="dashboard-details">
          <a href="sign-up.php" class="signup">SIGN&nbsp;UP</a>
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

  <div class="main">
    <div class="contact-us-text">
      <h1><span>GET</span> IN&nbsp;TOUCH</h1>
      <p>Our supportive team is set and would like to hear from you!</p>
    </div>

    <div class="container">
      <form onsubmit="sendEmail(); reset(); return false;" class="helpcenter">
        <h2>HOW&nbsp;CAN&nbsp;I&nbsp;HELP?</h2>

        <div class="formfill">
          <div class="mainfill">
            <div class="inputbox">
              <input type="text" id="firstname" required>
              <span>First Name</span>
            </div>

            <div class="inputbox">
              <input type="text" id="email" required>
              <span>Email</span>
            </div>
          </div>

          <div class="mainfill">
            <div class="inputbox">
              <input type="text" id="lastname" required>
              <span>Last Name</span>
            </div>

            <div class="inputbox">
              <input type="text" id="phonenumber" required>
              <span>Phone</span>
            </div>
          </div>
        </div>

        <div class="textAreaMain">
          <textarea id="message" required></textarea>
          <span>Type your message</span>
        </div>

        <div class="send-btn">
          <input type="submit" value="Send">
        </div>
      </form>

      <div class="contactInfo">
        <div class="infobox">
          <div class="box">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>
          <div class="info">
            <h3>Address</h3>
            <p>Nairobi, KENYA</p>
          </div>
        </div>

        <div class="infobox">
          <div class="box">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="info">
            <h3>Email</h3>
            <p>betrades23@gmail.com</p>
          </div>
        </div>

        <div class="infobox">
          <div class="box">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </div>
          <div class="info">
            <h3>Phone</h3>
            <p>+254773029440 / +254773029440</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--footer section-->
  <footer>
    <div class="platform">
      <div class="platform-ih">
        <img src="images/betradeslogo.png" alt="Be.Trades Logo">
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
      <li><a class="active" href="#">Contact&nbsp;Us</a></li>
    </ul>

    <p>Copyright &copy; 2024 <span>Be.Trades </span>&#8226; All rights reserved. Site built by <a href="https://www.instagram.com/blessedemmanuel254">Emmanuel's Developers</a>.</p>
  </footer>

  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script src="scripts/styles.js"></script>
</body>
</html>