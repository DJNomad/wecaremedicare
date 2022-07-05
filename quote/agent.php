<?php
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '../PHPMailer-8.1/src/Exception.php';
    require '../PHPMailer-8.1/src/PHPMailer.php';

    $clientname = "";
    if(isset($_SESSION['clientname'])) $clientname = $_SESSION['clientname'];
    function sendmail(){
        if(isset($_SESSION['emailflag'])){
            if($_SESSION['emailflag'] > 0){
                $mail = new PHPMailer;

                $mail -> From = 'dyeonazren@gmail.com';
                $mail -> FromName = 'We Care Medicare';
                $mail -> addAddress('jbrownsoninsurance@gmail.com');
                $mail -> isHTML(true);
                $mail -> Subject = $_SESSION['subject'];
                $mail -> Body = $_SESSION['message'];

                $mail -> send();

                $_SESSION['emailflag'] = 0;
            }
        }
        return 1;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quote Form | We Care Medicare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/agent.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.6.96/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
                <li><a href="../index.php">Get Quote</a></li>
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
        <a href="../index.php">Get Quote</a>
        <a href="../medicare101.php">Medicare 101</a>
        <a href="#">About</a>
    </div>

    <!-- MAIN DIV -->
    <div class="main-div" id="main-div">
        <div class="nextsession">
            <div class="title-bar">
                <div class="title-container">
                    <h1><?php echo $clientname; ?>, your agent will be reaching out to you soon!</h1>
                </div>
            </div>
            <div class="nextsession-container row">
                <div class="container-right col xl8 l8 m12 s12">
                    <div class="info-id">
                        <img src="../media/id.PNG" alt="">
                    </div>
                    <div class="info-subtitle">
                        <h2>Joshua Brownson</h2>
                        <h3>RH Benefits Insurance Agency - We help you Retire Happy!</h3>
                    </div>
                    <div class="info-container">
                        <p class="indent">Thank you for reaching out to us today!  I look forward to working with you and to help you find a better solution in healthcare. I will provide you with a free no obligation quote, and educate you on the ins and out of Medicare. My goal is to get you more from Medicare, and to gain the support of someone who genuinely cares about improving your retirement experience.</p>
                        <p class="indent">I am a licensed independent insurance broker helping people transition from work to retirement. I am certified to assist people with their retirement plans, estate planning, individual, group, and medicare health insurance coverage. From everything to leaving behind a legacy to not burdening your loved ones with having to plan for your final arrangements. And much more.</p>
                        <p>Get your free quote today!</p>
                        <p>Choose to receive a call shortly, or book an appointment to meet in person, online, over the phone or to communicate through email.</p>
                    </div>
                    <div class="info-contact row">
                        <div class="col xl6 l6 m12 s12">
                            <p>(909) 929-4708</p>
                            <p>(951) 987-5922</p>
                        </div>
                        <div class="col xl6 l6 m12 s12">
                            <p>Joshua@RHbenfits.com</p>
                            <p>Hablamos Espanol</p>
                        </div>
                    </div>
                    <div class="info-logos for-large">
                        <div class="logo-level1 row">
                            <img class="col xl4 l4 m4 s4" src="../media/logos/central health logo.png" alt="">
                            <img class="col xl4 l4 m4 s4" src="../media/logos/inter valley logo.jpeg" alt="">
                            <img class="col xl4 l4 m4 s4" src="../media/logos/wellcare logo.png" alt="">
                        </div>
                        <div class="logo-level2 row">
                            <img class="col xl4 l4 m4 s4" src="../media/logos/alignment healthcare logo.png" alt="">
                            <img class="col xl4 l4 m4 s4" src="../media/logos/brand new day logo.png" alt="">
                            <img class="col xl4 l4 m4 s4" src="../media/logos/united healthcare logo.png" alt="">
                        </div>
                        <div class="logo-level3 row">
                            <div class="col xl3 l3 m3 s3">
                                <img src="../media/logos/aetna logo.png" alt="">
                                <img src="../media/logos/health net logo.png" alt="">
                            </div>
                            <img class="col xl3 l3 m3 s3" src="../media/logos/Blue Cross_Blue Shield logo.png" alt="">
                            <img class="col xl3 l3 m3 s3" src="../media/logos/cigna logo.png" alt="">
                            <div class="col xl3 l3 m3 s3">
                                <img src="../media/logos/humana logo.png" alt="">
                                <img src="../media/logos/scan logo.png" alt="">
                            </div>
                        </div>  
                    </div>
                    <div class="info-logos for-small">
                        <div class="for-small-logo">
                            <div class="logo-container"><img src="../media/logos/central health logo.png" alt=""></div>
                            <div class="logo-container"><img src="../media/logos/inter valley logo.jpeg" alt=""></div>
                        </div>
                        <div class="for-small-logo">
                            <div class="logo-container"><img src="../media/logos/alignment healthcare logo.png" alt=""></div>
                            <div class="logo-container"><img src="../media/logos/united healthcare logo.png" alt=""></div>
                        </div>
                        <div class="for-small-logo">
                            <div class="logo-container"><img src="../media/logos/wellcare logo.png" alt=""></div>
                            <div class="logo-container"><img src="../media/logos/brand new day logo.png" alt=""></div>
                        </div>
                        <div class="for-small-logo">
                            <div class="logo-container"><img src="../media/logos/aetna logo.png" alt=""></div>
                            <div class="logo-container"><img src="../media/logos/health net logo.png" alt=""></div>
                        </div>
                        <div class="for-small-logo">
                            <div class="logo-container"><img src="../media/logos/humana logo.png" alt=""></div>
                            <div class="logo-container"><img src="../media/logos/scan logo.png" alt=""></div>
                        </div>
                        <div class="for-small-logo">
                            <div class="logo-container"><img src="../media/logos/Blue Cross_Blue Shield logo.png" alt=""></div>
                            <div class="logo-container"><img src="../media/logos/cigna logo.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="side-info col xl4 l4 m12 s12">
                    <h2>Benefits of speaking with an independent agent</h2>
                    <div class="side-info-container">
                        <p>No cost - All consultation, education and service is absolutely free!</p>
                        <p>No Obligation - My primary role is counseling and education. To  give you options that will benefit you. Even if you do not use my services the insights that I offer will leave you with confidence, peace of mind and often savings for your healthcare plan. My only ask is that you discover the difference and see for yourself.</p>
                        <p>No Bias - As an independent agent I am not tied down to one particular insurance carrier but instead can offer you an unbiased objective view of your unique healthcare experience. I work with most of the major carriers to provide you with more options and thus saving you more money. Some carriers offer incentives and bonuses to agents to enroll their clients with them. I however take a different approach and am committed to serving my clients above serving myself.</p>
                        <p>Lifelong service - My goal is not to make a quick buck enroll you then forget about you. My desire is that you feel like a cherished member of my family. I provide ongoing support to all my clients throughout their healthcare journey. I will be there to navigate changes in your care,  to advocate on your behalf and educate and prepare you for the roadblocks and potholes along the way. Even if you don't find the right fit the first time, my hope is that we remain partners and that you allow me the honor to find a plan that works for you.</p>
                        <p>No gimmicks - Many ads for medicare found on television and the internet can be misleading. Some of which appear to make promises to give you every benefit under the sun. Although some of these benefits are available in certain plans and for certain qualifying  individuals they are not true for everyone or found in one plan in particular as they are often portrayed through media. Separate the myth from the facts an see if you may qualify for one of the many programs that may eliminate all or some of your insurance premiums.</p>    
                    </div>
                </div>
            </div>

            <!-- MODAL -->
            <div class="modal" id="notice-modal">
                <div class="modal-content">
                    <span class="modal-close material-symbols-outlined" id="modal-close">close</span>
                    <div class="modal-body font-poppins-semibold">
                        <h2>Would you like to speak with the agent right away?</h2>
                        <div class="row modal-options">
                            <div class="col s12 m6 l6 xl6">
                                <button class="option1" id="yes-btn">Yes</button>
                            </div>
                            <div class="col s12 m6 l6 xl6">
                                <button class="option2" id="no-btn">Not yet</button>
                            </div>
                        </div>
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
<script>
    var modal = document.getElementById("notice-modal");
    var span = document.getElementById("modal-close");
    var no = document.getElementById("no-btn");
    var yes = document.getElementById("yes-btn");

    setTimeout( function() { modal.style.display = "block"; }, 1300);
    span.onclick = function() { modal.style.display = "none"; }
    window.onclick = function(event) { if (event.target == modal) modal.style.display = "none"; }
    no.onclick = function() { modal.style.display = "none"; }
    yes.onclick = function() {
        var sendmail = <?php echo sendmail() ?>;
        modal.style.display = "none";
    }
</script>
</html>