<?php
include 'dashboardConnect.php';

// Check if the user is logged in
if (!isset($_SESSION['affiliate_user_id'])) {
    // If not, redirect to the login page
    header("Location: affiliateLogin.php");
    exit();
}
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
    <link rel="stylesheet" href="styles/yourEarnings.css">

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
          <span class="affiliateName">Be&nbsp;<span>MULA</span></span>
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
                    <a href="dashboardAffiliateprograme.php"><li>Dashboard</li></a>
                    <a href="#"><li class="current">Your&nbsp;Earnings</li></a>
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
              <p class="topHeader">Affiliate</p>
              <p class="dashTitle">Your&nbsp;Earnings</p>
            </div>
            <i class="fa-solid fa-people-group"></i>
          </div>

          <div class="tableContainer">
            <main class="table1">
              <section class="tableHeader">
                <h1 class="main--title">Level 1</h1>
              </section>
              <section class="tableBody">
                <table>
                  <thead>
                    <tr>
                      <th> Id. </th>
                      <th> Name </th>
                      <th> Date </th>
                      <th> Phone </th>
                      <th> Status </th>
                      <th> Earning </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 2. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 3. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 4. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 5. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 6. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 7. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 8. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 9. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 10. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 11. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 12. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="
                      background: #898888;"><strong>Total: Ksh.1800</strong></td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </main>
          </div>
          <div class="tableContainer">
            <main class="table1">
              <section class="tableHeader level2">
                <h1 class="main--title">Level 2</h1>
              </section>
              <section class="tableBody">
                <table>
                  <thead>
                    <tr>
                      <th> Id. </th>
                      <th> Name </th>
                      <th> Date </th>
                      <th> Phone </th>
                      <th> Status </th>
                      <th> Earning </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 2. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 3. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 4. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 5. </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 6 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 7 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 8 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 9 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 10 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 11 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 12 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="
                      background: #898888;"><strong>Total: Ksh.1800</strong></td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </main>
          </div>

          <div class="tableContainer">
            <main class="table1">
              <section class="tableHeader level3">
                <h1 class="main--title">Level 3</h1>
              </section>
              <section class="tableBody">
                <table>
                  <thead>
                    <tr>
                      <th> Id </th>
                      <th> Name </th>
                      <th> Date </th>
                      <th> Phone </th>
                      <th> Status </th>
                      <th> Earning </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 2 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 3 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 4 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 5 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 6 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 7 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 8 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 9 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 10 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 11 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td> 12 </td>
                      <td> Blessed Emmanuel </td>
                      <td> 17.01.2024 </td>
                      <td> 0759578630 </td>
                      <td> <p class="status active">Active</p> </td>
                      <td> <strong>Ksh.150</strong> </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td style="
                      background: #898888;"><strong>Total: Ksh.1800</strong></td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </main>
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