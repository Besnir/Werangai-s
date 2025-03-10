<?php
session_start(); // Ensure the session is started

include 'dashboardConnect.php';

$user_id = $_SESSION['user_id']; // Assuming you have the user_id stored in session
$chart_symbol = 'FX:EURUSD';
$interval = '240';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("INSERT INTO chart_activity1 (user_id, chart_symbol, t_interval) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $user_id, $chart_symbol, $interval);

    if ($stmt->execute()) {
        echo "Activity logged successfully.";
    } else {
        echo "Error logging activity: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="grid-container chartsGrid">
        <!-- Header -->
        <header class="header">
            <div class="menu-icon chartsSidebar" onclick="openSidebar()">
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
        <aside id="sidebar" class="chartsSidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <div class="company-logo">
                        <img src="images/betradeslogo.png">
                    </div>
                    <div class="company-name">
                        <p>BE<br>TRADES</p>
                    </div>
                </div>
                <span class="material-icons-outlined chartsSidebar" onclick="closeSidebar()">close</span>
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
                                    <a href="dashboardMentorship.php"><li>Mentorship&nbsp;Course</li></a>
                                </ul>
                            </a>
                        </li>
                        <li class="active">
                            <a class="question" onclick="toggleAnswer(this)" href="#">
                                <div class="sideIcon">
                                    <i class="fa-solid fa-circle-plus"></i>
                                    <p>Forex</p>
                                    <span class="arrow">▼</span>
                                </div>

                                <ul class="answer">
                                    <a href="#"><li class="current">Charts</li></a>
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
                        <p class="topHeader">Forex</p>
                        <p class="dashTitle">Charts</p>
                    </div>
                    <i class="fa-solid fa-circle-plus"></i>
                </div>

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_a93d0"></div>
                    <div class="tradingview-widget-copyright">
                        <a href="https://www.tradingview.com/symbols/EURUSD/" rel="noopener" target="_blank">
                            <span class="blue-text"></span>
                        </a>
                    </div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "autosize": true,
                            "symbol": "FX:EURUSD",
                            "interval": "240",
                            "timezone": "Africa/Nairobi",
                            "theme": "light",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": true,
                            "withdateranges": true,
                            "range": "YTD",
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "details": true,
                            "hotlist": true,
                            "calendar": true,
                            "popup_width": "1000",
                            "popup_height": "650",
                            "container_id": "tradingview_a93d0"
                        });

                        function logChartActivity() {
                          var xhr = new XMLHttpRequest();
                          xhr.open("POST", "log_chart_activity.php", true);
                          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                          xhr.onreadystatechange = function () {
                              if (xhr.readyState === 4 && xhr.status === 200) {
                                  console.log(xhr.responseText);
                              }
                          };
                          xhr.send("chart_symbol=FX:EURUSD&interval=240");
                        }

                        document.addEventListener("DOMContentLoaded", function() {
                          logChartActivity();
                        });
                      </script>
                </div>
                <!-- TradingView Widget END -->

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