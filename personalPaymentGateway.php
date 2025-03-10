<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment~be.trades</title>
  <link rel="website icon" type="png" 
  href="images/betradeslogo.png">

  <link rel="stylesheet" href="styles/general.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/personalPaymentGateway.css">
  <link rel="stylesheet" href="styles/footer.css">

  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

  <div class="payContainer">
    <div class="kushoto">
      <p>Payment&nbsp;Methods</p>
      <hr>
      <div class="methods">
        <div onclick="doFun()" id="tColorA" class="active"><i class="fa-solid fa-credit-card" style="color: #ff8c00"></i>Payment&nbsp;by&nbsp;Card</div>
        <div onclick="doFunA()" id="tColorB"><i class="fa-solid fa-building-columns"></i>Internet Banks</div>
        <div onclick="doFunB()" id="tColorC"><i class="fa-solid fa-wallet"></i>Apple/Google Pay</div>
      </div>
      <hr>
    </div>
    <div class="katikati">
      <a href="https://www.shift4shop.com/credit-card-logos.html" ><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/></a>
      <hr>

      <div class="card-details">
        <form action="process_payment.php" method="POST">
          <p>Card number</p>
          <div class="c-number" id="c-number">
            <input id="number" class="cc-number" name="cnumber" placeholder="Card number" maxlength="19" required>
            <i class="fa-solid fa-credit-card"></i> 
          </div>

          <div class="c-details">
            <div>
              <p>Expiry date</p>
              <input id="e-date" class="cc-exp" name="cexpiry" placeholder="MM/YY" required maxlength="5" required>
            </div>
            <div>
              <p>CVV</p>
              <div id="cvv-box" class="cvv-box">
                <input id="cvv" class="cc-cvv" name="ccvc" placeholder="CVV" required maxlength="3" required>
                <i class="fa-solid fa-circle-question" title="3 digits on the back of the card"></i>
              </div>
            </div>
          </div>
          <button>PAY $40</button>
        </form>
      </div>
    </div>

    <div class="kulia">
      <p>Order Information</p>
      <hr>
      <div class="details">
        <div class="orderDesc">Order&nbsp;description</div>
        <div>Test payment</div>
      </div>
      <hr>
      <a href="https://www.shift4shop.com/credit-card-logos.html" ><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/></a>
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
  <script src="scripts/personalPaymentGateway.js"></script>
</body>
</html>