<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oder fill~betrades</title>

  <link rel="website icon" type="png" 
  href="images/betradeslogo.png">

  <link rel="stylesheet" href="styles/general.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/order.css">
  <link rel="stylesheet" href="styles/footer.css">
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
  <div class="orderDetailsContainer">
    <h1>Fill the details to complete your order!</h1>
    <h2>Order Details:</h2>
    <div class="orderDetails">
      <table>
        <tr>
          <th>Order type:</th>
          <td>Mentorship</td>
        </tr>
        <tr>
          <th>Plan period:</th>
          <td>1 Month plan</td>
        </tr>
        <tr>
          <th>Price:</th>
          <td>$ 40/=</td>
        </tr>
        </tr>
        <tr>
          <th>Total price:</th>
          <td>$ 40/=</td>
        </tr>
      </table>
      <div class="imgDiv">
        <img src="images/weekly-icon.png" alt="Order Image">
      </div>
    </div>
    <h2>Enter your details:</h2>
    <form class="customerDetails">
      <div class="inp-box">
        <input type="text" name="cname" required="required">
        <span>Enter your name</span>
      </div>
      <div class="inp-box">
        <input type="tel" name="cphone" required="required">
        <span>Enter your phone</span>
      </div>
      <div class="inp-box">
        <input type="email" name="cmail" required="required">
        <span>Enter your email</span>
      </div>
      <a href="personalPaymentGateway.php" class="btn" type="submit">Click to pay $ 40/=</a>
    </form>
  </div>

  <footer>
    <p>Copyright &copy; 2024 <span>Be.Trades </span>&#8226; All rights reserved. Site built by <a href="https://www.instagram.com/blessedemmanuel254">Emmanuel's Developers</a>.</p>
  </footer>
  <script src="scripts/styles.js"></script>
</body>
</html>