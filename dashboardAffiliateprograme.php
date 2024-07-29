<?php
include 'dashboardConnect.php';

// Check if the user is logged in
if (!isset($_SESSION['affiliate_user_id']) || empty($_SESSION['affiliate_user_id'])) {
    header("Location: affiliateLogin.php");
    exit();
}

$user_id = $_SESSION['affiliate_user_id'];

// Fetch direct referrals count (assuming you have a referrer_id column)
$stmt = $conn->prepare("SELECT COUNT(*) FROM affiliate_users WHERE referrer_id = ?");
if ($stmt) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($direct_referrals);
    $stmt->fetch();
    $stmt->close();
}

// Fetch referral earnings
$stmt = $conn->prepare("SELECT SUM(referral_earnings) FROM affiliate_users WHERE referrer_id = ?");
if ($stmt) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($referral_earnings);
    $stmt->fetch();
    $stmt->close();
}

// Generate referral link
$referral_link = "https://www.bemula.ke/signup.php?referral_code=" . urlencode($user_id);

//$referral_link = "http://localhost/werangai's/affiliateSingUp.php?referral_code=" . urlencode($user_id);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="view-transition" content="same-origin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dashboard~be.trades</title>
    <link rel="website icon" type="png" 
    href="images/betradeslogo.png">

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/Dashboard.css">
    <link rel="stylesheet" href="styles/dashMain.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  </head>
  <body>
    <div class="loader"></div>
    <div class="grid-container">
      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>

        <div class="header-left">
          <span class="affiliateName">Be <span>MULA</span></span>
        </div>

        <div class="header-right">
          <?php echo $firstName[0]; echo $lastName[0]; ?>
        </div>
      </header> 
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <div class="company-logo">
              <img src="images/betradeslogo.png">
            </div>
            <div class="company-name">
              <p>BE<br>TRADES</p>
            </div>
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <div class="ulContainer">
            <div class="ulMainlists">
              <li>
                <a href="Dashboard.php">
                  <div class="sideIcon">
                    <i class="fa-solid fa-house"></i>
                    <p>Dashboard</p>
                  </div>
               </a>
              </li>
              <li>
                <a class="question" onclick="toggleAnswer(this)" href="#">
                  <div class="sideIcon">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <p>Mentorship</p>
                    <span class="arrow">▼</span>
                  </div>

                  <ul class="answer">
                    <a href="dashboardFreeCourse.php"><li>Free&nbsp;Course</li></a>
                    <a href="dashboardMentorship.php"><li>Mentorship&nbsp;Classes</li></a>
                  </ul>
                </a>
              </li>
              <li>
                <a class="question" onclick="toggleAnswer(this)" href="#">
                  <div class="sideIcon">
                    <i class="fa-solid fa-circle-plus"></i>
                    <p>Forex</p>
                    <span class="arrow">▼</span>
                  </div>

                  <ul class="answer">
                    <a href="dashboardCharts.php"><li>Charts</li></a>
                    <a href="dashboardPipsCalc.php"><li>Pips&nbsp;Calculator</li></a>
                  </ul>
                </a>
              </li>
              <li class="active">
                <a class="question" onclick="toggleAnswer(this)" href="#">
                  <div class="sideIcon">
                    <i class="fa-solid fa-people-group"></i>
                    <p>Affiliate</p>
                    <span class="arrow">▼</span>
                  </div>

                  <ul class="answer">
                    <a href="#"><li class="current">Dashboard</li></a>
                    <a href="yourEarningsLevels.php"><li>Your&nbsp;Earnings</li></a>
                    <a href="dashboardWithdraw.php"><li>Withdraw</li></a>
                  </ul>
                </a>
              </li>
              <li>
                <a href="dashboardContactUs.php">
                  <div class="sideIcon">
                    <i class="fa-regular fa-address-book"></i>
                    <p>Contact&nbsp;Us</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="dashboardFaqs.php">
                  <div class="sideIcon">
                    <i class="fa-solid fa-hand"></i>
                    <p>FAQs</p>
                  </div>
                </a>
              </li>
            </div>
            <li>
              <a href="logout.php">
                <div class="sideIcon">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  <p>Logout</p>
                </div> 
              </a>
            </li>
          </div>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="dashHeader">
          <div class="dashHD">
            <p class="topHeader">Affiliate</p>
            <p class="dashTitle">Dashboard</p>
          </div>
          <i class="fa-solid fa-people-group"></i>
        </div>

        <h1> Welcome Back: <span><?php echo htmlspecialchars($affUsername); ?></span></h1>

        <div class="affiliate-layout">
          <div class="card">
            <div class="affidesc">
              <h3>DIRECT&nbsp;REFERRALS</h3>
              <p>Your team</p>
              <h2><?php echo $direct_referrals; ?></h2>
            </div>

            <i class="fa-solid fa-people-group fa-2x"></i>
          </div>

          <div class="card">
            <div class="affidesc">
              <h3>BALANCE</h3>
              <p>Available balance</p>
              <h2>$. <?php echo number_format($referral_earnings, 2); ?></h2>
            </div>

            <i class="fa-solid fa-money-check-dollar fa-2x"></i>
          </div>

          <div class="card">
            <div class="affidesc">
              <h3>WITHDRAWN</h3>
              <p>Money out</p>
              <h2>$. 0</h2>
            </div>

            <i class="fa-regular fa-money-bill-1 fa-2x"></i>
          </div>

          <div class="card">
            <div class="affidesc">
              <h3>PROCESSING</h3>
              <p>Pending request...</p>
              <h2>$. 0</h2>
            </div>

            <i class="fa-solid fa-recycle fa-2x"></i>
          </div>

          <div class="card">
            <div class="affidesc">
              <h3>BONUS</h3>
              <p>Bonus</p>
              <h2>$. 0</h2>
            </div>

            <i class="fa-solid fa-gift fa-2x"></i>
          </div>
        </div>
        <div class="loweraffiliate">
          <h4>YOUR&nbsp;REFFERAL&nbsp;LINK:</h4>
          <p class="loweraffiliateLink"><?php echo htmlspecialchars($referral_link); ?></p>
          <div id="linkbtn" class="linkbtn">
            <button class="copy-btn" onclick="copyLink()">Copy&nbsp;Link</button>
            <button class="sharebtn" onclick="shareLink()">Share</button>
          </div>
          <h3>
            HOORAY🥳! YOU'VE REACHED THE MINIMUM WITHDRAW AMOUNT! YOU CAN NOW PROCEED WITH YOUR WITHDRAWAL. SIMPLY CLICK ON THE WITHDRAWAL BUTTON BELOW TO ACCESS YOUR FUNDS. THANK YOU FOR CHOOSING OUR SERVICES!.
          </h3>

          <a class="withDrawButton" href="dashboardWithdraw.php">WITHDRAW</a>

          <div class="emailBox">
            <p>Leave your Email to recieve our Newsletter.</p>
            <div class="newsletterEmail">
              <input class="email-input" type="email" placeholder="Enter your email">
              <input type="submit" value="Submit">
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

            <p>Copyright &copy; 2024 <span>Be.Trades </span>&#8226; All rights reserved. Site built by <a href="https://www.instagram.com/blessedemmanuel254">Emmanuel's Developers</a>.</p>
          </footer>
        </div>
      </main>
    </div>

    <!-- Custom JS -->
    <script src="scripts/Dashboard.js"></script>
    <script src="scripts/styles.js"></script>
  </body>
</html>