<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home~be.trades</title>
    <link rel="website icon" type="png" 
    href="images/betradeslogo.png">

    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/cartPage.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

            <li><a class="active" href="#">Home</a></li>
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
    
    <div class="main">
      <div class="intro">
        <div class="baseline">
          <h1>
            START YOUR TRADING JOURNEY&nbsp;TODAY
          </h1>
        </div>

        <div class="tradingview-widget-container">
          <div id="tradingview_widget"></div>
        </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async></script>
        <script type="text/javascript">
        new TradingView.widget({
            "symbols": [
                {
                    "proName": "FX:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "FX:GBPUSD",
                    "title": "GBP/USD"
                },
                {
                    "proName": "FX:USDJPY",
                    "title": "USD/JPY"
                }
            ],
            "colorTheme": "",  // Change this to "light" if you want a light theme
            "isTransparent": false,
            "displayMode": "regular",
            "locale": "en"
        });
        </script>

        <h1>LEARN <span>FOREX&nbsp;TRADING</span> </h1>
        
        <div class="p-img">
          <div class="desc">
            <h2>Hi there,</h2>
            <h3>Experience seamless growth with us, 
              step by step, ensuring your success at every stage.
              Your progress matters. Every step of your journey is our priority,
              ensuring your growth from one milestone to the next.
            </h3>
            <p>
              As Be.Trades, our platform is esteemed 
              for commencing your trading venture today!
            </p>
          </div>
          
          <div class="slideshow-container">
            <div class="slides">
              <div class="mySlides">
                <img src="images/homeimage.jpg">
            </div>
            <div class="mySlides">
                <img src="images/login.jpg">
            </div>
            <div class="mySlides">
                <img src="images/sign-up.jpg">
            </div>
            <div class="mySlides">
                <img src="images/homeimage.jpg">
            </div>
              <div class="mySlides">
                  <img src="images/homeimage.jpg">
              </div>
              <div class="mySlides">
                  <img src="images/login.jpg">
              </div>
              <div class="mySlides">
                  <img src="images/sign-up.jpg">
              </div>
              <div class="mySlides">
                  <img src="images/homeimage.jpg">
              </div>
            </div>

            <!-- Navigation buttons -->
            <a class="prev" onclick="plusSlides(-1)">◀</a>
            <a class="next" onclick="plusSlides(1)">▶</a>
          
          </div>
        </div>
        
      </div>

      <div class="start-menu">
        <a href="sign-up.php" class="button1">Start&nbsp;free&nbsp;class</a>
        <a href="Dashboard.php" class="button2">Enroll&nbsp;now</a>
      </div>

      <div class="emailBox">
        <p>Leave your Email to recieve our Newsletter.</p>
        <div class="newsletterEmail">
          <input class="email-input" type="email" placeholder="Enter your email">
          <input type="submit" value="Submit">
        </div>
      </div>
      
      <!--RESOURCES-->
      <div class="resources">
        <div class="heading-bar">
          <h1>Our&nbsp;available <span>Resources:</span> </h1>
          <p>
            Your trading ambitions demand a firm educational base, 
            rely on us to provide the support you need!
          </p>
        </div>

        <div class="resource-list">
          <div class="reso">
            <h1>Free&nbsp;basic&nbsp;Education</h1>
            <p>
              Unlock the potential of forex trading with our
               platform's free complimentary basic education resources! 
               Dive into the world of currency markets confidently 
               as we equip you with essential knowledge to navigate
               complexities and make informed decisions.
            </p>
            <a href="#" class="button">Start&nbsp;free&nbsp;class</a>
          </div>

          <div class="reso">
            <h1>Full&nbsp;Forex&nbsp;Course</h1>
            <p>
              Elevate your forex trading skills with our comprehensive
              full course! Gain in-depth knowledge, strategies, and 
              techniques to master the dynamic world of currency
              markets. From understanding market dynamics to advanced
              trading tactics, Our course provides everything you 
              need to succeed.
            </p>
            <a href="mentorship.php" class="button">Enroll&nbsp;now</a>
          </div>

          <div class="reso">
            <h1>Mothly&nbsp;trades&nbsp;recap</h1>
            <p>
              As part of our commitment to your trading success,
              we provide a monthly trades recap service on our
              forex trading platform. Stay informed and track
              your progress effortlessly with detailed
              summaries of your trades, including performance
              analysis and insights.
            </p>
            <a href="mentorship.php" class="button">Enroll&nbsp;now</a>
          </div>
        </div>
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

      <!--Testimonials-->
      <section class="testimonials">
        <h2>WHAT OUR STUDENTS HAVE TO SAY.</h2>
        <div class="testimonialRoot">
          <div class="testimonial">
            <div class="testimonial-author">
              <img src="images/jane-profile.jpg" alt="Author Image">
              <div class="testimonialTrader">
                <h4>Jane&nbsp;Smith</h4>
                <p>Forex Enthusiast</p>
              </div>
            </div>
            <div class="rating">
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
            </div>
            <div class="testimonial-content">
              <div class="testmonialsP">
                <p>Amazing platform! The instructors are very knowledgeable and supportive. I learned so much about forex trading and can now make informed trading decisions.</p>
              </div>
            </div>
          </div>
  
          <div class="testimonial">
            <div class="testimonial-author">
              <img src="images/profile-image.jpg" alt="Author Image">
              <div class="testimonialTrader">
                <h4>John&nbsp;Dior</h4>
                <p>Trader</p>
              </div>
            </div>
            <div class="rating">
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star">★</span>
            </div>
            <div class="testimonial-content">
              <div class="testmonialsP">
                <p>The forex trading lessons on betrades were comprehensive and easy to follow. The platform made learning enjoyable, and I feel much more confident now! Am so greatful.</p>
              </div>
            </div>
          </div>
  
          <div class="testimonial">
            <div class="testimonial-author">
              <img src="images/michael-profile.jpg" alt="Author Image">
              <div class="testimonialTrader">
                <h4>Michael&nbsp;Lee</h4>
                <p>Professional&nbsp;Trader</p>
              </div>
            </div>
            <div class="rating">
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
            </div>
            <div class="testimonial-content">
              <div class="testmonialsP">
                <p>Your platform has transformed my approach to forex trading. The detailed lessons and practical tips have been so valuable. I Highly recommend this platform to serious traders.</p>
              </div>
            </div>
          </div>
  
          <div class="testimonial">
            <div class="testimonial-author">
              <img src="images/susan-profile.webp" alt="Author Image">
              <div class="testimonialTrader">
                <h4>Susan&nbsp;Wanjiru</h4>
                <p>New&nbsp;Trader</p>
              </div>
            </div>
            <div class="rating">
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star">★</span>
            </div>
            <div class="testimonial-content">
              <div class="testmonialsP">
                <p>I was a beginner in forex trading, but this website made it easy to understand and start trading confidently. The community is also very supportive and helpful. Thanks alot.</p>
              </div>
            </div>
          </div>
  
          <div class="testimonial">
            <div class="testimonial-author">
              <img src="images/emily-profile.jpg" alt="Author Image">
              <div class="testimonialTrader">
                <h4>Emily&nbsp;Clark</h4>
                <p>Financial&nbsp;Analyst</p>
              </div>
            </div>
            <div class="rating">
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
              <span class="star filled">★</span>
            </div>
            <div class="testimonial-content">
              <div class="testmonialsP">
                <p>The interactive lessons and real-world examples on Betrades helped me understand trading in detail. I appreciate the effort you put into making this platform so effective.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Why Us-->
      <div class="preview">
        <div class="why-us">
          <h1>WHY&nbsp;US?</h1>
          <h3>A commitment to exceeding 
            your expectations every step of the way.
          </h3>
        </div>

        <div class="homegrid-position">
          <div class="home-grid">
            <div class="benefit">
              <div class="benefit-upper">
                <div class="benefit-logo">
                  <img src="images/free-icon.png">
                </div>
                <div class="benefit-heading">
                  <h2>&#8226;&nbsp;FREE&nbsp;BASIC&nbsp;COURSE</h2>
                </div>
              </div>
              <div class="benefit-lower">
                <p class="benefit-description">&#10003; Learn the fundamentals of forex trading for Free</p>
                <div class="direction">
                  <p>Click <a href="#"><span>here</span></a> to get started now</p>
                  <a href="dashboardFreeCourse.php" class="button">Start&nbsp;free&nbsp;class</a>
                </div>
              </div>
            </div>
  
            <div class="benefit">
              <div class="benefit-upper">
                <div class="benefit-logo">
                  <img src="images/24 7.png">
                </div>
                <div class="benefit-heading">
                  <h2>&#8226;&nbsp;24/7&nbsp;CUSTOMER&nbsp;SUPPORT</h2>
                </div>
              </div>
              <div class="benefit-lower">
                <p class="benefit-description">&#10003; Our friendly team is set and ready to respond to your issues on time</p>
                <div class="direction">
                  <p>Click <a href="contact-us.php"><span>here</span></a> to get started now</p>
                  <a href="contact-us.php" class="button">Start&nbsp;Chat</a>
                </div>
              </div>
            </div>
            
            <div class="benefit">
              <div class="benefit-upper">
                <div class="benefit-logo">
                  <img src="images/affordable-1.png">
                </div>
                <div class="benefit-heading">
                  <h2>&#8226;&nbsp;AFFORDABLE&nbsp;COURSE</h2>
                </div>
              </div>
              <div class="benefit-lower">
                <p class="benefit-description">&#10003; Get access to affordable advanced trading course</p>
                <div class="direction">
                  <p>Click <a href="mentorship.php"><span>here</span></a> to get started now</p>
                  <a href="mentorship.php" class="button">Enroll&nbsp;now</a>
                </div>
              </div>
            </div>
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

      <ul class="footer-menu">
        <li><a class="active" href="#">Home</a></li>
        <li><a href="mentorship.php">Mentorship&nbsp;Plan</a></li>
        <li><a href="pipsCalculator.php">Pips&nbsp;Calculator</a></li>
        <li><a href="faqs.php">Faqs</a></li>
        <li><a href="contact-us.php">Contact&nbsp;Us</a></li>
      </ul>

      <p>Copyright &copy; 2024 <span>Be.Trades </span>&#8226; All rights reserved. Site built by <a href="https://www.instagram.com/blessedemmanuel254">Emmanuel's Developers</a>.</p>
    </footer>
    
    <script src="scripts/styles.js"></script>
    </div>
  </body>
</html>