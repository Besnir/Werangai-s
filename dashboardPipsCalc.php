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
    <link rel="stylesheet" href="styles/pipsCalulator.css">

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
                    <li><a href="dashboardFreeCourse.php">Free&nbsp;Classes</a></li>
                    <li><a href="dashboardMentorship.php">Mentorship&nbsp;Classes</a></li>
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
                    <a href="dashboardCharts.php"><li>Charts</li></a>
                    <a href="#"><li class="current">Pips&nbsp;Calculator</li></a>
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
              <p class="dashTitle">Pips&nbsp;Calculator</p>
            </div>
            <i class="fa-solid fa-circle-plus"></i>
          </div>
          <!--CALCULATOR-->
          <section>
            <div class="calculatorLayout">
              <h1>
                Accurate&nbsp;<span>Be.Trades</span><br>Position Sizing Calculator
              </h1>
              <div class="app">
                <div class="mode-toggle">
                  <label for="mode">Mode&nbsp;:</label>
                  <select id="mode">
                    <option value="pips">Pips Calculator</option>
                    <option value="normal">Normal Calculator</option>
                  </select> 
                </div>
        
                <div class="calculator" id="normalCalculator">
                  <div class="display">
                    <div class="content">
                      <div class="input">
                      </div>
                      <div class="output">
                      </div>
                    </div>
                  </div>
        
                  <div class="keys">
                    <div data-key="clear" class="key action">
                      <span>AC</span>
                    </div>
        
                    <div data-key="brackets" class="key action">
                      <span>( )</span>
                    </div>
        
                    <div data-key="%" class="key action">
                      <span>%</span>
                    </div>
        
                    <div data-key="/" class="key operator">
                      <span>÷</span>
                    </div>
        
                    <div data-key="7" class="key">
                      <span>7</span>
                    </div>
        
                    <div data-key="8" class="key">
                      <span>8</span>
                    </div>
        
                    <div data-key="9" class="key">
                      <span>9</span>
                    </div>
        
                    <div data-key="*" class="key operator">
                      <span>x</span>
                    </div>
        
                    <div data-key="4" class="key">
                      <span>4</span>
                    </div>
        
                    <div data-key="5" class="key">
                      <span>5</span>
                    </div>
        
                    <div data-key="6" class="key">
                      <span>6</span>
                    </div>
        
                    <div data-key="-" class="key operator">
                      <span>-</span>
                    </div>
        
                    <div data-key="1" class="key">
                      <span>1</span>
                    </div>
        
                    <div data-key="2" class="key">
                      <span>2</span>
                    </div>
        
                    <div data-key="3" class="key">
                      <span>3</span>
                    </div>
        
                    <div data-key="+" class="key operator">
                      <span>+</span>
                    </div>
        
                    <div data-key="backspace" class="key action">
                      <span>Del</span>
                    </div>
        
                    <div data-key="0" class="key">
                      <span>0</span>
                    </div>
        
                    <div data-key="." class="key">
                      <span>.</span>
                    </div>
        
                    <div data-key="=" class="key operator">
                      <span>=</span>
                    </div>
                  </div>
                </div>
        
                <div class="calculator1" id="pipsCalculator">
                  <div class="display1">
                    <div class="content">
                      <div class="categoryDisplay">
                        <Label>Category :</Label>
                        <select name="" id="category">
                          <option value="Forex">Forex</option>
                          <option value="Commodities">Commodities</option>
                          <option value="Deriv">Deriv</option>
                        </select>
                      </div>
                      <div class="items__asset">
                        <div class="categoryDisplay currency">
                          <Label>Currency Pair :</Label>
                          <select name="" id="currencyPair">
                            <option value="AUDJPY">AUDJPY</option>
                            <option value="AUDUSD">AUDUSD</option>
                            <option value="AUDCAD">AUDCAD</option>
                            <option value="AUDCHF">AUDCHF</option>
                            <option value="AUDNZD">AUDNZD</option>
                            <option value="AUDSGD">AUDSGD</option>
                            <option value="CHFJPY">CHFJPY</option>
                            <option value="CHFSGD">CHFSGD</option>
                            <option value="CADJPY">CADJPY</option>
                            <option value="CADCHF">CADCHF</option>
                            <option value="EURCAD">EURCAD</option>
                            <option value="EURCHF">EURCHF</option>
                            <option value="EURGBP">EURGBP</option>
                            <option value="EURJPY">EURJPY</option>
                            <option value="EURAUD">EURAUD</option>
                            <option value="EURUSD" selected>EURUSD</option>
                            <option value="EURCZK">EURCZK</option>
                            <option value="EURZAR">EURZAR</option>
                            <option value="EURHUF">EURHUF</option>
                            <option value="EURTRY">EURTRY</option>
                            <option value="EURSGD">EURSGD</option>
                            <option value="EURSEK">EURSEK</option>
                            <option value="EURMXN">EURMXN</option>
                            <option value="EURPLN">EURPLN</option>
                            <option value="GBPUSD">GBPUSD</option>
                            <option value="GBPAUD">GBPAUD</option>
                            <option value="GBPJPY">GBPJPY</option>
                            <option value="GBPCHF">GBPCHF</option>
                            <option value="GBPCAD">GBPCAD</option>
                            <option value="GBPNOK">GBPNOK</option>
                            <option value="GBPMXN">GBPMXN</option>
                            <option value="GBPNZD">GBPNZD</option>
                            <option value="GBPSEK">GBPSEK</option>
                            <option value="GBPSGD">GBPSGD</option>
                            <option value="GBPTRY">GBPTRY</option>
                            <option value="NOKJPY">NOKJPY</option>
                            <option value="NOKSEK">NOKSEK</option>
                            <option value="NZDJPY">NZDJPY</option>
                            <option value="NZDUSD">NZDUSD</option>
                            <option value="NZDJPY">NZDJPY</option>
                            <option value="NZDCAD">NZDCAD</option>
                            <option value="NZDCHF">NZDCHF</option>
                            <option value="SGDJPY">SGDJPY</option>
                            <option value="SEKJPY">SEKJPY</option>
                            <option value="USDJPY">USDJPY</option>
                            <option value="USDCHF">USDCHF</option>
                            <option value="USDHUF">USDHUF</option>
                            <option value="USDCAD">USDCAD</option>
                            <option value="USDZAR">USDZAR</option>
                            <option value="USDTRY">USDTRY</option>
                            <option value="USDTBH">USDTBH</option>
                            <option value="USDCZK">USDCZK</option>
                            <option value="USDRUB">USDRUB</option>
                            <option value="USDPLN">USDPLN</option>
                            <option value="USDSGD">USDSGD</option>
                            <option value="USDMXN">USDMXN</option>
                            <option value="USDCNH">USDCNH</option>
                            <option value="ZARJPY">ZARJPY</option>
                          </select>
                        </div>
                        
                        <div class="categoryDisplay asset">
                          <Label>Commodity :</Label>
                          <select name="" id="asset">
                            <option value="XAGUSD">XAGUSD</option>
                            <option value="XAUJPY">XAUJPY</option>
                            <option value="XAUEUR">XAUEUR</option>
                            <option value="XAUGBP">XAUGBP</option>
                            <option value="XAUCHF">XAUCHF</option>
                            <option value="XAUAUD">XAUAUD</option>
                            <option value="XAUUSD" selected>XAUUSD</option>
                            <option value="XAGAUD">XAGAUD</option>
                            <option value="XAGEUR">XAGEUR</option>
                            <option value="XTDUSD">XTDUSD</option>
                            <option value="XPTUSD">XPTUSD</option>
                            <option value="NAS100">NAS100</option>
                            <option value="US30">US30</option>
                            <option value="US30">GER30</option>
                          </select>
                        </div>
                        
                        <div class="categoryDisplay index--basket">
                          <Label>Index/basket :</Label>
                          <select name="" id="indexOrBasket">
                            <option>Volatility 10</option>
                            <option selected>Volatility 10 1s</option>
                            <option>Volatility 25</option>
                            <option>Volatility 25 1s</option>
                            <option>Volatility 50</option>
                            <option>Volatility 50 1s</option>
                            <option>Volatility 75</option>
                            <option>Volatility 75 1s</option>
                            <option>Volatility 100</option>
                            <option>Volatility 100 1s</option>
                            <option>Volatility 150 1s</option>
                            <option>Volatility 250 1s</option>
                            <option>BEAR MARKET INDEX</option>
                            <option>BULL MARKET INDEX</option>
                            <option>AUD basket</option>
                            <option>EUR basket</option>
                            <option>GBP basket</option>
                            <option>USD basket</option>
                            <option>Gold basket</option>
                            <option>Boom 300 Index</option>
                            <option>Boom 500 Index</option>
                            <option>Boom 1000 Index</option>
                            <option>Crash 300 Index</option>
                            <option>Crash 500 Index</option>
                            <option>Crash 1000 Index</option>
                            <option>Jump 10 Index</option>
                            <option>Jump 25 Index</option>
                            <option>Jump 50 Index</option>
                            <option>Jump 75 Index</option>
                            <option>Jump 100 Index</option>
                          </select>
                        </div>
                      </div>
        
                      <div id="account_currency" class="accountCurrency">
                        <Label>Account Currency :</Label>
                        <select name="" id="accont_currency">
                          <option value="AUD">AUD</option>
                          <option value="GBP">GBP</option>
                          <option value="EUR">EUR</option>
                          <option value="CAD">CAD</option>
                          <option value="CHF">CHF</option>
                          <option value="USD" selected>USD</option>
                          <option value="NZD">NZD</option>
                          <option value="NGN">NGN</option>
                          <option value="ZAR">ZAR</option>
                          <option value="KES">KES</option>
                        </select>
                      </div>
        
                      <div class="requiredInputs">
                        <div class="theInput">
                          <span>Stop&nbsp;Loss&nbsp;Pips&nbsp;:</span>
                          <div class="input2 pipsInput">
                            <p>Dial&nbsp;stoploss&nbsp;pips</p>
                          </div>
                          <p onclick="promptAccountBalance()" class="doneBtn">Next</p>
                        </div>
                        <div class="theInput">
                          <span>Account&nbsp;Balance&nbsp;:</span>
                          <div id="input1" class="input1 input2 Balance">
                            <p>Dial&nbsp;a/c&nbsp;balance</p>
                          </div>
                          <p onclick="promptRisk()" class="doneBtn1">Next</p>
                        </div>
                        <div class="theInput">
                          <span class="percentage">Percentage&nbsp;Risk&nbsp;(%)&nbsp;:</span>
                          <div class="input2 percentageInput">
                            <p>Dial&nbsp;%&nbsp;risk</p>
                          </div>
                          <span class="money">Risk&nbsp;Amount&nbsp;:</span>
                          <div class="input2 moneyInput">
                          </div>
                        </div>
                        <div class="switch-risk">
                          <p onclick="toggleRisk()" class="switch">Switch to Money</p>
                        </div>
                      </div>
                      <div class="output1">
                      </div>
                    </div>
                  </div>

                  <div class="keys1">
                    <div data-key="9" class="key1">
                      <span>9</span>
                    </div>

                    <div data-key="8" class="key1">
                      <span>8</span>
                    </div>
        
                    <div data-key="7" class="key1">
                      <span>7</span>
                    </div>
        
                    <div data-key="0" class="key1">
                      <span>0</span>
                    </div>
        
                    <div data-key="6" class="key1">
                      <span>6</span>
                    </div>
        
                    <div data-key="5" class="key1">
                      <span>5</span>
                    </div>
        
                    <div data-key="4" class="key1">
                      <span>4</span>
                    </div>
        
                    <div data-key="." class="key1">
                      <span>.</span>
                    </div>
        
                    <div data-key="3" class="key1">
                      <span>3</span>
                    </div>
        
                    <div data-key="2" class="key1">
                      <span>2</span>
                    </div>
        
                    <div data-key="1" class="key1">
                      <span>1</span>
                    </div>
        
                    <div data-key="backspace" class="key1 action">
                      <span>Del</span>
                    </div>
                  </div>
        
                  <div class="keys2">
                    <div data-key="clear" class="key1 action">
                      <span class="res">Reset</span>
                    </div>
        
                    <div data-key="=" class="key1 operator">
                      <span class="cal">Calculate</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="calculatorDesc">
              <h1 class="calMessage">
              Welcome to our two-in-one Pips and Standard Calculator! Our Pips Calculator helps you assess potential profit or loss on forex trades. Simply input your trade details to calculate pips and manage risk. The standard calculator is available for everyday calculations. This tool is essential for informed trading decisions. Remember to trade responsibly and consider your individual risk tolerance. Happy trading and calculating!
              </h1>
            </div>
          </section>
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
    <script src="scripts/pipsCalculator.js"></script>
    <script src="scripts/styles.js"></script>
  </body>
</html>