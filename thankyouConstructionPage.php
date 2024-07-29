<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page under processing</title>
  <link rel="stylesheet" href="styles/general.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="website icon" type="png" 
  href="images/betradeslogo.png">
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

          <li><a class="active" href="#">Home</a></li>
          <li><a href="mentorship.php">Mentorship&nbsp;Plan</a></li>
          <li><a href="pipsCalculator.php">Pips&nbsp;Calculator</a></li>
          <li><a href="faqs.php">Faqs</a></li>
          <li><a href="contact-us.php">Contact&nbsp;Us</a></li>

          <div class="dashboard-details2">
            <a href="sign-up.php" class="signup2">SIGN&nbsp;UP</a></button>
            <a href="login.php" class="login2">LOGIN</a></button>
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
          <a href="sign-up.php" class="signup">SIGN&nbsp;UP</a></button>
          <a href="login.php" class="login">LOGIN</a></button>
        </div>

        <span onclick="toggleMainMenu()" class="material-icons-outlined icon1">menu</span>
      </ul>
    </nav>
  </header>
  <div style="
  display: flex;
  flex-direction: column;
  min-height: 80vh;
  justify-content: center;
  align-items: center;
  ">
    <h1 style="
      font-size: clamp(25px, 1.9vw, 1.9vw);
    ">Thank you!</h1>
    <p style="
    font-size: clamp(12px, 1.1vw, 1.1vw);
    ">
      Page under construction.
    </p>   
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
      <li><a class="active" href="#">Home</a></li>
      <li><a href="mentorship.php">Mentorship&nbsp;Plan</a></li>
      <li><a href="pipsCalculator.php">Pips&nbsp;Calculator</a></li>
      <li><a href="faqs.php">Faqs</a></li>
      <li><a href="contact-us.php">Contact&nbsp;Us</a></li>
    </ul>

    <p>Copyright &copy; 2024 <span>Be.Trades </span>&#8226; All rights reserved. Site built by <a href="https://www.instagram.com/blessedemmanuel254">Emmanuel's Developers</a>.</p>
  </footer>
  <script src='scripts/styles.js'></script>
</body>
</html>