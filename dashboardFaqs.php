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
    <link rel="stylesheet" href="styles/faqs.css">

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
              <li class="active">
                <a href="#">
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

          <div class="main">
            <div class="faqsheader">
              <h1>QUESTION <span>&</span> ANSWER</h1>
            </div>

            <div class="faq-container">
              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  What is this website about?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  Our website provides comprehensive training and mentoring services for both new and experienced traders. We offer educational resources, trading tools, and personalized guidance to help you succeed in the trading world.
                </div>
              </div>

              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  What training programs do you offer?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  We offer a variety of training programs, including free beginner course, advanced trading strategies (mentorship course), live webinars, and one-on-one mentoring sessions.
                </div>
              </div>
              
              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  Do I need any experience in trading to join your courses?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  No prior trading experience is required. Our courses are suitable for individuals with varying levels of experience, from complete beginners to seasoned traders looking to refine their skills.
                </div>
              </div>
                
              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  How can your forex education platform help me as a beginner?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  0ur platform provides comprehensive resources and tutorials designed specifically for beginners(besides the advanced courses). You'll learn the basics of forex trading ,risk management strategies and more to kickstart your trading journey with confidence.
                </div>
              </div>
              
              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  Who can benefit from your services?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  Our services are designed for anyone interested in trading, whether you are a complete beginner looking to learn the basics or an experienced trader seeking advanced strategies and mentorship.
                </div>
              </div>

              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  Is the training suitable for beginners?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  Yes, we have tailored training programs specifically for beginners, covering fundamental concepts, trading strategies, and risk management.
                </div>
              </div>
              
              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  What are the payment methods available?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  <p>We accept various payment methods, including credit/debit cards, PayPal, and mobile money (such as M-Pesa in Kenya).</p>
                </div>
              </div>

              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  Do you provide investment advice?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  While we provide educational resources and mentoring, we do not offer specific investment advice. All trading decisions are ultimately your own responsibility.
                </div>
              </div>

              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  Is my personal information secure?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  Yes, we take your privacy and security very seriously. Our website uses advanced encryption and security measures to protect your personal information.
                </div>
              </div>
              
              <div class="faq-item">
                <div class="question" onclick="toggleAnswer(this)">
                  What sets your platform apart from other forex education providers?<span class="arrow">▼</span>
                </div>
                <div class="answer">
                  <p>Our platform offers a unique blend of educational content, interactive learning tools, and personalized support from experienced traders. Additionally, our affiliate program provides opportunities for our members to earn passive income by referring others to our platform.</p>
                </div>
              </div>
            </div>
          </div>

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