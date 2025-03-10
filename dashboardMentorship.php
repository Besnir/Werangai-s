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
    <link rel="stylesheet" href="styles/main.css">

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
        <div class="header-right-cart">
          <div class="cart-logo" onclick="toggleCarttSidebar()">
            <div class="cart-icon">
              <i class="fa fa-cart-plus" aria-hidden="true"></i>
            </div>
            <div id="cartCount" class="cart-badge">0</div>
            <div class="cart-tip">
              Click&nbsp;to&nbsp;view
            </div>
          </div>
          <div class="header-right">
            <?php echo $firstName[0]; echo $lastName[0]; ?>
          </div>
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
              <li class="active">
                <a class="question" onclick="toggleAnswer(this)" href="#">
                  <div class="sideIcon">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <p>Mentorship</p>
                    <span class="arrow">▼</span>
                  </div>

                  <ul class="answer">
                    <a href="dashboardFreeCourse.php"><li>Free&nbsp;Course</li></a>
                    <a href="#"><li class="current">Mentorship&nbsp;Course</li></a>
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

      <main class="main-container">
        <div class="allDashmianDiv">
          <div class="dashHeader">
            <div class="dashHD">
              <p class="topHeader">Mentorship</p>
              <p class="dashTitle">Mentorship&nbsp;Course</p>
            </div>
            <i class="fa-solid fa-graduation-cap"></i>
          </div>

          <!--Mentorship section-->
          <div class="plan">
            <div class="select">
              <h2><span><span>Pick</span></span>&nbsp;a&nbsp;plan</h2>
              <p>
                Mastering the art of forex trading made simple.
              </p>
            </div>

            <div class="mentorship-container">
              <div class="maincontainer">
                <div class="thecard">
                  <div class="thefront">
                    <div class="planfront">
                      <h1>1&nbsp;MONTH&nbsp;PLAN</h1>
                      <div class="hover-notify">
                        Hover&nbsp;to&nbsp;view
                      </div>
                    </div>
                  </div>
                  <div class="theback">
                    <a onclick="addItemToCart('item1')" href="#" class="add-to-cart">Add&nbsp;to&nbsp;cart</a>
                    <h2>1&nbsp;MONTH&nbsp;PLAN</h2>
                    <div class="thebackp">
                      <p>&check;&nbsp;Unlimited access to educational videos</p>
                      <p>&check;&nbsp;Previlege of free trading signals</p>
                      <p>&check;&nbsp;Collaborative market analysis sessions</p>
                      <p>&check;&nbsp;Exclusive access to our private community</p>
                      <p>&check;&nbsp;Beginner and advanced live classes included</p>
                    </div>
                    <h1>$40</h1>
                    <a href="thankyouConstructionPage.php" class="enroll-button">Enroll&nbsp;now</a>
                  </div>
                </div>
              </div>

              <div class="maincontainer">
                <div class="thecard">
                  <div class="thefront">
                    <div class="planfront">
                      <h1>3&nbsp;MONTHS&nbsp;PLAN</h1>
                      <div class="hover-notify">
                        Hover&nbsp;to&nbsp;view
                      </div>
                    </div>
                  
                  </div>
                  <div class="theback">
                    <a onclick="addItemToCart('item2')" href="#" class="add-to-cart">Add&nbsp;to&nbsp;cart
                    </a>
                    <h2>3&nbsp;MONTHS&nbsp;PLAN</h2>
                    <div class="thebackp">
                      <p>&check;&nbsp;Unlimited access to educational videos</p>
                      <p>&check;&nbsp;Full acces to the 1 months plan</p>
                      <p>&check;&nbsp;Collaborative market analysis sessions</p>
                      <p>&check;&nbsp;Exclusive access to our private community</p>
                      <p>&check;&nbsp;Beginner and advanced live classes included</p>
                    </div>
                    <h1>$71</h1>
                    <a href="thankyouConstructionPage.php" class="enroll-button">Enroll&nbsp;now</a>
                  </div>
                </div>
              </div>

              <div class="maincontainer">
                <div class="thecard">
                  <div class="thefront">
                    <div class="planfront">
                      <h1>6&nbsp;MONTHS&nbsp;PLAN</h1>
                      <div class="hover-notify">
                        Hover&nbsp;to&nbsp;view
                      </div>
                    </div>
                  </div>

                  <div class="theback">
                    <a onclick="addItemToCart('item3')" href="#" class="add-to-cart">Add&nbsp;to&nbsp;cart</a>
                    <h2>6&nbsp;MONTHS&nbsp;PLAN</h2>
                    <div class="thebackp">
                      <p>&check;&nbsp;Unlimited access to educational videos</p>
                      <p>&check;&nbsp;Full acces to the 3 months plan</p>
                      <p>&check;&nbsp;Collaborative market analysis sessions</p>
                      <p>&check;&nbsp;Exclusive access to our private community</p>
                      <p>&check;&nbsp;Beginner and advanced live classes included</p>
                    </div>
                    <h1>$148</h1>
                    <a href="thankyouConstructionPage.php" class="enroll-button">Enroll&nbsp;now</a>
                  </div>
                </div>
              </div>

              <div class="maincontainer">
                <div class="thecard">
                  <div class="thefront">
                    <div class="planfront">
                      <h1>1&nbsp;YEAR&nbsp;PLAN</h1>
                      <div class="hover-notify">
                        Hover&nbsp;to&nbsp;view
                      </div>
                    </div>
                  
                  </div>
                  <div class="theback">
                    <a onclick="addItemToCart('item4')" href="#" class="add-to-cart">Add&nbsp;to&nbsp;cart</a>
                    <h2>1&nbsp;YEAR&nbsp;PLAN</h2>
                    <div class="thebackp">
                      <p>&check;&nbsp;Unlimited access to educational videos</p>
                      <p>&check;&nbsp;Full acces to the 6 months plan</p>
                      <p>&check;&nbsp;Collaborative market analysis sessions</p>
                      <p>&check;&nbsp;Exclusive access to our private community</p>
                      <p>&check;&nbsp;Beginner and advanced live classes included</p>
                    </div>
                    <h1>$254</h1>
                    <a href="thankyouConstructionPage.php" class="enroll-button">Enroll&nbsp;now</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="betradesMainDescription">
              <img src="images/complete-guide-pic.jpg" alt="description">
              <p>
                We offer a comprehensive guide to forex trading. Our detailed lessons are designed for both beginners and experienced traders, providing clear explanations, practical insights, and expert tips. With our guidance, you'll gain the knowledge and confidence needed to navigate the forex market successfully. Join us to enhance your trading skills and achieve your financial goals with confidence.
              </p>
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