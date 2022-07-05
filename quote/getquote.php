<?php
    $zipcode = $_POST['zipcode'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quote Form | We Care Medicare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="../css/layout.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/getquote.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.6.96/css/materialdesignicons.css" />
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
    
    <!-- NAVIGATION BAR -->
    <header class="nav-bar" id="nav-bar">
        <div class="nav-title" id="nav-title" onclick="goHome('../index.php')">
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Get Quote</a></li>
                <li><a href="../medicare101.php">Medicare 101</a></li>
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
        <a href="../index.php">Home</a>
        <a href="#">Get Quote</a>
        <a href="../medicare101.php">Medicare 101</a>
        <a href="#">About</a>
    </div>

    <!-- MAIN DIV -->

    <div class="main-div" id="main-div">
        <div class="nextsession">
            <div class="nextsession-container">
                <div class="form-container">
                    <!-- Form Head -->
                    <div class="formhead">
                        <h1 class="h2 font-poppins-bold">Get Quote</h1>
                        <p class="font-poppins">Please fill in your profile.</p>
                    </div>

                    <form name="quoteform" id="quoteform" action="quotemailer.php" method="post" onsubmit="return qouteValidate()">
                        <input type="hidden" name="zipcode" value="<?php echo $zipcode; ?>">
                        <!-- First Form -->
                        <div class="quoteform1 row font-poppins-semibold">
                            <div class="col xl6 l6 m6 s12">
                                <label for="fname">First Name: <span class="error-msg" id="fname-error"></span></label>
                                <input type="text" name="fname" id="fname">
                            </div>
                            <div class="col xl6 l6 m6 s12">
                                <label for="lname">Last Name: <span class="error-msg" id="lname-error"></label>
                                <input type="text" name="lname" id="lname">
                            </div>
                            <div class="col xl6 l6 m6 s12">
                                <label for="phone">Phone Number: <span class="error-msg" id="phone-error"></label>
                                <input type="tel" name="phone" id="phone">
                            </div>
                            <div class="col xl6 l6 m6 s12">
                                <label for="email">Email: <span class="error-msg" id="email-error"></label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="col xl12 l12 m12 s12">
                                <label for="address">Address: <span class="error-msg" id="address-error"></label>
                                <input type="text" name="address" id="address">
                            </div>

                            <div class="col xl12 l12 m12 s12">
                                <label for="date">Date of Birth: <span class="error-msg" id="date-error"></label>
                                <input type="date" name="date" id="date">
                            </div>
                        </div>
                        
                        <!-- Second Form -->
                        <div class="quoteform2 font-poppins-semibold">
                            <div>
                                <p>Are you currently enrolled in Medicare parts A and B?</p>
                                <div><span id="q1-error" class="error-msg"></span></div>
                                <ul class="q-options">
                                    <li>
                                        <label class="custom-radio-btn" for="q1-1">
                                            <span class="radio-label">Yes</span>
                                            <input type="radio" name="q1" id="q1-1" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q1-2">
                                            <span class="radio-label">No</span>
                                            <input type="radio" name="q1" id="q1-2" value="0">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>Do you need help signing up?</p>
                                <div><span id="q2-error" class="error-msg"></span></div>
                                <ul class="q-options">
                                    <li>
                                        <label class="custom-radio-btn" for="q2-1">
                                            <span class="radio-label">Yes</span>
                                            <input type="radio" name="q2" id="q2-1" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q2-2">
                                            <span class="radio-label">No</span>
                                            <input type="radio" name="q2" id="q2-2" value="0">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>Do you have high prescription drug cost?</p>
                                <div><span id="q3-error" class="error-msg"></span></div>
                                <ul class="q-options">
                                    <li>
                                        <label class="custom-radio-btn" for="q3-1">
                                            <span class="radio-label">Yes</span>
                                            <input type="radio" name="q3" id="q3-1" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q3-2">
                                            <span class="radio-label">No</span>
                                            <input type="radio" name="q3" id="q3-2" value="0">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>What Benefits are most important to you?</p>
                                <div><span id="q4-error" class="error-msg"></span></div>
                                <ul class="q-options">
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="q4[]" id="q4-1" value="1">
                                            <label for="q4-1">Low premiums</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="q4[]" id="q4-2" value="2">
                                            <label for="q4-2">Lower copays and maximum out of pocket expenses</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="q4[]" id="q4-3" value="3">
                                            <label for="q4-3">Freedom to choose any doctor</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="q4[]" id="q4-4" value="4">
                                            <label for="q4-4">Dental</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="q4[]" id="q4-5" value="5">
                                            <label for="q4-5">Vision</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="q4[]" id="q4-6" value="6">
                                            <label for="q4-6">Hearing</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="q4[]" id="q4-7" value="7">
                                            <label for="q4-7">Low Rx costs</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" name="q4[]" id="q4-8" value="8">
                                            <label for="q4-8">Extra Benefits like acupuncture, chiropractic, transportation, gym membership, OTC allowance, and more!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>What type of coverage are you looking for?</p>
                                <div><span id="q5-error" class="error-msg"></span></div>
                                <ul class="q-options">
                                    <li>
                                        <label class="custom-radio-btn" for="q5-1">
                                            <div class="radio-label">I want to learn more about Medicare options. Attend a Medicare 101</div>
                                            <input type="radio" name="q5" id="q5-1" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q5-2">
                                            <div class="radio-label">Medicare Advantage Plan</div>
                                            <input type="radio" name="q5" id="q5-2" value="2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q5-3">
                                            <div class="radio-label">Drug plan (Part D)</div>
                                            <input type="radio" name="q5" id="q5-3" value="3">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q5-4">
                                            <div class="radio-label">Drug plan (Part D) + Medigap policy</div>
                                            <input type="radio" name="q5" id="q5-4" value="4">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q5-5">
                                            <div class="radio-label">Medigap policy only</div>
                                            <input type="radio" name="q5" id="q5-5" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p>Do you get help with your costs from one of these programs?</p>
                                <div><span id="q6-error" class="error-msg"></span></div>
                                <ul class="q-options">
                                    <li>
                                        <label class="custom-radio-btn" for="q6-1">
                                            <div class="radio-label">Medicaid</div>
                                            <input type="radio" name="q6" id="q6-1" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q6-2">
                                            <div class="radio-label">Supplemental Security Income</div>
                                            <input type="radio" name="q6" id="q6-2" value="2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q6-3">
                                            <div class="radio-label">Medicare Savings Program</div>
                                            <input type="radio" name="q6" id="q6-3" value="3">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q6-4">
                                            <div class="radio-label">Extra Help from Social Security</div>
                                            <input type="radio" name="q6" id="q6-4" value="4">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q6-5">
                                            <div class="radio-label">I'm not sure</div>
                                            <input type="radio" name="q6" id="q6-5" value="5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-radio-btn" for="q6-6">
                                            <div class="radio-label">I don't get help from any of these programs</div>
                                            <input type="radio" name="q6" id="q6-6" value="6">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="submit-container">
                            <input class="submit-quote" type="submit" value="Submit Form">
                        </div>
                    </form>
                    
                    <!-- Agreement Section -->
                    <div class="agreement font-poppins-semibold">
                        <p>By submitting your information, that serves as your written consent (signature) and you agree that wecaremedicare.com connects you with a licensed agent who will be providing you with the quotes you are requesting for Health Insurance, Medicare Supplement, Medicare Advantage or Part D. Agents are not connected with or endorsed by the U.S. government or the federal Medicare program. They have your express written consent to contact you for such marketing at the phone number and/or email address provided, including your mobile devices, potentially using an aautomatic telephone dialing system, artificial/prerecorded voice, email or via SMS. You understand that your telephone company may impose charges on you for these contacts. Please know that your consent is not a condition of purchase, that you can revoke this consent at any time, that you agree to our privacy policy and have no obligation to buy.</p>
                    </div>

                </div>
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
<script src="../js/script.js"></script>
</html>
