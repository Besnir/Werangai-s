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
    <link rel="website icon" type="png" 
    href="images/betradeslogo.png">

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/Dashboard.css">
    <link rel="stylesheet" href="styles/Mentorship.css">

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
              <li>
                <a href="Dashboard.php">
                  <div class="sideIcon">
                    <i class="fa-solid fa-house"></i>
                    <p>Dashboard</p>
                  </div>
               </a>
              </li>
              <li  class="active">
                <a class="question" onclick="toggleAnswer(this)" href="#">
                  <div class="sideIcon">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <p>Mentorship</p>
                    <span class="arrow">▼</span>
                  </div>

                  <ul class="answer">
                    <a href="#"><li class="current">Free&nbsp;Course</li></a>
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
                    <a href="dashboardPipsCalc.php"><li>Pips&nbsp;Calculator</li></a>
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
              <p class="topHeader">Mentorship</p>
              <p class="dashTitle">Free&nbsp;Course</p>
            </div>
            <i class="fa-solid fa-graduation-cap"></i>
          </div>

          <div class="video-grid">
            <div class="vgHeader">
              <h1>COMPLETE FOREX&nbsp;COURSE</h1>
              <p>This course is worth dollars elsewhere. Waste no time and start learning now!</p>
            </div>

            <div class="tProfile">
              <h4>Turtor and Developer</h4>
              <div class="details">
                <img src="images/my-profile.JPG" alt="Turtor Profile">
                <div class="namesDiv">
                  <p>EMMANUEL WERANGAI</p>
                  <p><span>a.k.a</span> Blessed Emmanuel</p>
                </div>
              </div>
              <ul class="social-handles">
                <li><a class="WhatsAapp" href="https://wa.me/254725880569" target="_blank"><i class="fa-brands fa-whatsapp fa-2x"></i></a></li>
                <li><a class="Instagram" href="https://www.instagram.com/_be.trades" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a class="Telegram" href="https://t.me/+254773029440" target="_blank"><i class="fa-brands fa-telegram"></i></a></li>
                <li><a class="Email" href="mailto:betrades23@gmail.com"><i class="fa-solid fa-envelope emmanuel"></i></a></li>
              </ul>
            </div>
            <div class="main-video-grid">
              <div class="video-and-titles">
                <div class="video-container">
                  <iframe width="560" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY?" frameborder="0" allowfullscreen></iframe>
                </div>

                <table>
                  <thead>
                    <th>Id.</th>
                    <th>Video Title</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Forex Introduction</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Basic Terms</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Bid, Ask(prices) and spread</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Pips & pip-value</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Understanding Leverage</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Forex Market Hours</td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>Types of Forex orders</td>
                    </tr>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>Market Analysis</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="video-and-titles">
                <p>
                  We are excited to offer you a free comprehensive forex trading course! This course covers everything you need to ensure you gain a thorough understanding of the forex market. It is perfect for both beginners and those looking to enhance their trading skills. Join us to boost your trading knowledge and confidence!
                </p>
                <div class="progressCircle">
                  <p>Progress</p>
                  <div class="percentageDiv">25%</div>
                </div>
              </div>
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