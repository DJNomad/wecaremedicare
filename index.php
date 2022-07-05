<!DOCTYPE html>
<html>
<head>
    <title>Get Quote Now | We Care Medicare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.6.96/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <!-- NAVIGATION BAR -->

    <header class="nav-bar" id="nav-bar">
        <div class="nav-title" id="nav-title" onclick="goHome('index.php')">
            <svg width="50" height="50">
                <g>
                    <path fill="none" stroke="white" stroke-width="3.5" d="M48 17 H34 V2 H17 V17 H2 V34 H17 V48 H34 V34 H41"></path>
                    <path fill="none" stroke="#b71c1c" stroke-width="3" d="M26 22 V30"></path>
                    <path fill="none" stroke="#b71c1c" stroke-width="3" d="M22 26 H30"></path>
                </g>  
            </svg>
            <h3><span>We Care<br>Medicare</span></h3>
        </div>
        <nav>
            <ul class="nav-tabs">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Get Quote</a></li>
                <li><a href="medicare101.php">Medicare 101</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
        <div class="nav-dropdown" id="nav-dropdown">
            <button class="dropbtn" onclick="dropbtn_onclick()">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </header>
    <div class="nav-dropdown-content" id="nav-dropdown-content">
        <a href="index.php">Home</a>
        <a href="#">Get Quote</a>
        <a href="medicare101.php">Medicare 101</a>
        <a href="#">About</a>
    </div>

    <!-- MAIN DIV -->

    <div class="main-div" id="main-div">
        <div class="parallax1"></div>
        <div class="cover">
            <h1>What's the best<br>Medicare plan for you?</h1>
            <h2>Get Your Free Quote</h2>
            <p>no obligation to enroll</p>
            <form name="zipcodeform" action="quote/getquote.php" method="post" onsubmit="return validateZipcode()">
                <div class="zipform">
                    <div class="tooltip">
                        <span class="tooltiptext bgtool" id="tooltip1">Please enter your ZIP code!</span>
                        <span class="tooltiptext bgtool" id="tooltip2">Invalid ZIP code!</span>
                        <input type="text" maxlength="5" name="zipcode" class="zipcode" placeholder="Enter ZIP code">
                    </div>
                    <input class="getstarted-btn" type="submit" value="Get Qoute Now">
                </div>
            </form>
            <div class="cover-subdiv">
                <h6>Learn How Medicare Works</h6>
                <ul>
                    <li><a href="#">Medicare 101</a></li>
                    <li><a href="#">Original Medicare Parts A & B</a></li>
                    <li><a href="#">Prescription Drug Plans</a></li>
                    <li><a href="#">Medicare Supplement / Medigap Plans</a></li>
                    <li><a href="#">Medicare Part C / Medicare Advantage / Medicare Advantage Prescription Drug Plans</a></li>
                    <li><a href="#">Special Needs Plans</a></li>
                    <li><a href="#">Medicaid & Medicare Savings Programs for Eligible Beneficiaries</a></li>
                </ul>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="section2">
            <div class="row">
                <div class="col xl4 l4 m12 s12">
                    <h3>Speak to a licensed agent</h3>
                    <h1>909-929-4708</h1>
                </div>
                <div class="col xl4 l4 m12 s12">Get a complimentary in depth analysis of your care needs from a licensed insurance broker who will counsel you with care, compassion and consideration for your unique situation.</div>
                <div class="col xl4 l4 m12 s12">Get an unbiased objective presentation of your benefit options. Motivated by giving you the best coverage possible. Focused on being of service to you and not ourselves. Let us educate you and empower you to make the right choice for you.</div>
            </div>
        </div>

        <!-- NEXT SECTION -->
        <div class="nextsession">
            <div class="nextsession-container">

                <!-- Section 3 -->
                <div class="section3">
                    <div class="row">
                        <div class="col xl6 l6 m12 s12 img-container img-cont1-alt">
                            <img class="img" src="media\image-set1\12.png">
                        </div>
                        <div class="col xl6 l6 m12 s12 center-text">
                            <h2 class="h4 font-poppins-extrabold">Compare and Save</h2>
                            <h3 class="h5 font-poppins-semibold">Maximize your benefits and limit your liabilities</h3>
                            <p class="font-montserrat">Examine the differences between various Medicare health insurance plans. Discover a plan that works with your care providers, lowers your prescription drug cost and gets you more from Medicare. Explore your options from various carriers like UnitedHealthcare, Aetna, Humana, Anthem Blue Cross, Blue Shield WellCare, and most major carriers available on the medicare marketplace!</p>
                            <a href="#">Get Quote</a>
                        </div>
                        <div class="col xl6 l6 m12 s12 img-container img-cont1">
                            <img src="media\image-set1\12.png">
                        </div>
                    </div>
                </div>

                <!-- Section 4 -->
                <div class="section4">
                    <div class="row">
                        <div class="col xl6 l6 m12 s12 img-container img-cont2">
                            <img class="img" src="media\image-set1\11.png">
                        </div>
                        <div class="col xl6 l6 m12 s12 center-text">
                            <h2 class="h4 font-poppins-extrabold">Medigap / Medicare Supplement Insurance Plans</h2>
                            <h3 class="h5 font-poppins-semibold">Fill in the gaps of Original Medicare</h3>
                            <p class="font-montserrat">Medicare Supplement or Medigap plans fill in the gaps of original medicare. Like the 20% copay and deductibles associated with Medicare parts A & B while retaining the flexibility to see any doctor that accepts original medicare. Compare quotes and find coverage that works with your budget and specific needs.</p>
                            <a href="#">Get Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Section 5 -->
                <div class="section5">
                    <div class="row">
                        <div class="col xl6 l6 m12 s12 img-container img-cont3-alt">
                            <img class="img" src="media\image-set1\4.png">
                        </div>
                        <div class="col xl6 l6 m12 s12 center-text">
                            <h2 class="h4 font-poppins-extrabold">Medicare Part C / Medicare Advantage Plans</h2>
                            <h3 class="h5 font-poppins-semibold">All in one care</h3>
                            <p class="font-montserrat">Get more from Medicare and receive the advantages of extra benefits beyond Original Medicare and enjoy cost savings plans. These plans often include benefits like Prescription drug, coverage, vision, dental and hearing. As well as possible additional perks like over the counter medication allowances, transportation, gym membership, acupuncture, chiropractic services.</p>
                            <a href="#">Get Quote</a>
                        </div>
                        <div class="col xl6 l6 m12 s12 img-container img-cont3">
                            <img src="media\image-set1\4.png">
                        </div>
                    </div>
                </div>

                <!-- Section 6 -->
                <div class="section6">
                    <div class="row">
                        <div class="col xl6 l6 m12 s12 img-container img-cont4">
                            <img class="img" src="media\image-set1\10.png">
                        </div>
                        <div class="col xl6 l6 m12 s12 center-text">
                            <h2 class="h4 font-poppins-extrabold">Medicare Advantage Special Needs Plans</h2>
                            <p class="font-montserrat">There are special needs for Medicare Beneficiaries with special qualifying conditions such as Cancer, heart disease, diabetes, Dementia and other qualifying health conditions. As well as special plans for people living in an assisted care facility or dual eligible individuals who are on Medicare and a Medicaid assistance program. Enrollment into one of these plans is generally open year round.</p>
                            <a href="#">Get Quote</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- LAST SECTION -->
        <div class="lastsection">
            <div class="lastsection-container">
                <h1 class="font-poppins-bold">Do You Need Live Support?</h1>
                <h2 class="font-montserrat">909-929-4708</h2>
                <div>
                    <p>Don't go through the complexities of Medicare alone.</p>
                    <p>We suggest that you consult a licensed insurance agent to answer your questions.</p>
                    <p>Assist you with enrollment, counsel and advocate for you throughout your healthcare journey.</p>
                </div>
                <div>All consultations are free and there is no obligation to enroll in a plan.</div>
            </div>
        </div>
        
        <!-- FOOTER -->
        <div class="footer" id="footer">
            <div class="footer-content row">
                <div class="footer-address col s12 m6 l4 xl4">
                    <h3 class="font-poppins-semibold">EXPLORE</h3>
                    <ul class="foot-ul1">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Get Quote</a></li>
                        <li><a href="#">Medicare 101</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
                <div class="footer-opening col s12 m6 l4 xl4">
                    <h3 class="font-poppins-semibold">GET QOUTE NOW</h3>
                    <p class="font-questrial">Get your Medicare insurance today!</p>
                    <a href="#">Get Quote</a>
                </div>
                <div class="footer-subscribe col s12 m12 l4 xl4">
                    <h3 class="font-poppins-semibold">SUBSCRIBE TO JOIN OUR MAILING LIST</h3>
                    <form action="">
                        <div class="row footer-subscribe-content">
                            <input class="email-input col s7" type="text" placeholder="Enter your email here">
                            <input class="email-submit col s4" type="submit" value="Subscribe Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>
<script src="js/script.js"></script>
</html>