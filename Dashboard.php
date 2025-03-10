<?php 
include 'dashboardConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="view-transition" content="same-origin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dashboard~be.trades</title>
    <link rel="website icon" type="png" href="images/betradeslogo.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/Dashboard.css">
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
          <p class="affiliateName">Trader's Space</p>
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
              <li class="active">
                <a href="#">
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
                    <a href="dashboardMentorship.php"><li>Mentorship&nbsp;Course</li></a>
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
                    <a href="dashboardPipsCalc.php"><li> Pips Calculator</li></a>
                  </ul> 
                </a>
              </li>
              <li>
                <a class="question" onclick="toggleAnswer(this)" href="#">
                  <div class="sideIcon">
                    <i class="fa-solid fa-people-group"></i>
                    <p>Affiliate</p>
                    <span class="arrow">▼</span>
                  </div>

                  <ul class="answer">
                    <a href="dashboardAffiliateprograme.php"><li>Dashboard</li></a>
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
        <div class="allDashmainDiv">
          <div class="dashHeader">
            <div class="dashHD">
              <p class="topHeader">Home</p>
              <p class="dashTitle">Dashboard</p>
            </div>
            <i class="fa-solid fa-house"></i>
          </div>
              
          <div class="dashBrivian">
            <div class="accounth3AndDetails">
              <h3>Hi <?php echo $firstName;?> <?php echo $lastName; ?>, <br>It's nice seeing you! Welcome to Dash! Explore powerful tools for trading insights and financial data analysis.</h3>
              <div class="accountStatusDiv">
                <div class="head">
                  <h2>Account Details</h2>
                  <i class="far fa-id-card"></i>
                </div>
                <div class="body">
                  <p>Account status</p>
                  <div class="statusDiv">
                    <p>Active</p>
                    <div  class="active"></div>
                  </div>
                </div>
                <div class="body">
                  <p>Affiliate account status</p>
                  <div class="statusDiv">
                    <p>Inactive</p>
                    <div class="inactive"></div>
                  </div>
                </div>
                <div class="body">
                  <p>Mentorship</p>
                  <p>Not enrolled</p>
                </div>
                <div class="body">
                  <p>Country</p>
                  <p><?php echo $countrySelect; ?></p>
                </div>
                <div class="body">
                  <p>Registration date</p>
                  <p><?php echo $formattedDate; ?></p>
                </div>
              </div>

              <h1> Blessed Emmanuel wishes you a happy exploring and successful trading ahead!</h1>
            </div>
            
            <div class="accountAnalytics">
              <h1>Analytics</h1>
              <div class="analyticsChild">
                <div class="childDetails">
                  <i class="fa-solid fa-comment-medical" style="color: #ff8c00bb"></i>
                  <p>Free Course Progress</p>
                  <h4>STILL</h4>
                  <p>Not yet started</p>
                </div>
                <div class="progressInSection">
                  0%
                </div>
              </div>
              <div class="analyticsChild">
                <div class="childDetails">
                  <i class="fa-solid fa-circle-dollar-to-slot" style="color: green"></i>
                  <p>Mentorship Course Progress</p>
                  <h4>STILL</h4>
                  <p>Not yet started</p>
                </div>
                <div class="progressInSection">
                  0%
                </div>
              </div>
              <div class="analyticsChild affiliate">
                <div class="head">
                  <h4>Affiliate&nbsp;Progress</h4>
                  <i class="fa-solid fa-people-group"></i>
                </div>
                <div class="body">
                  <p style="color: red;">Expenses</p>
                  <p>O KES</p>
                </div>
                <div class="body">
                  <p style="color: green;">Profit</p>
                  <p>0%</p>
                </div>
              </div>
            </div>
          </div>

          <div class="emailBox">
            <p>Leave your Email to receive our Newsletter.</p>
            <div class="newsletterEmail">
              <input class="email-input" type="email" placeholder="Enter your email">
              <input type="submit" value="Submit">
            </div>
          </div>
          
          <!--footer section-->
          <footer>
            <div class="platform">
              <div class="platform-ih">
                <img src="images/betradeslogo.png" alt="logo">

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