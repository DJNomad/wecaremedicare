<!DOCTYPE html>
<html>
<head>
    <title>Medicare 101 | We Care Medicare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/medicare101.css">
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
                    <path fill="none" stroke="#01c5a2" stroke-width="3" d="M26 22 V30"></path>
                    <path fill="none" stroke="#01c5a2" stroke-width="3" d="M22 26 H30"></path>
                </g>  
            </svg>
            <h3>
                <span>We Care<br>Medicare</span>
            </h3>
        </div>
        <nav>
            <ul class="nav-tabs">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Get Quote</a></li>
                <li><a href="medicare101.php">Medicare 101</a></li>
                <li><a href="#">About</a></li>
                <!--  
                <li><a href="#" class="login" id="login">Login</a></li>
                -->
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
        <!-- <a href="#">Login</a> -->
    </div>

    <!-- BREADCRUMBS -->
    <div class="crumbs-container row font-poppins">
        <div class="crumbs-main">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><i class="fa fa-chevron-right"></i></li>
                <li><a href="medicare101.php">Medicare 101</a></li>
            </ul>
        </div>
    </div>

    <!-- MEDICARE 101 MAIN DIV -->
    
    <div class="medicare101-main">
        <div class="medicare101-container row">
            <div class="medicare101-table col xl3 l12 m12 s12">
                <div class="medtable fixed" id="medtable">
                    <span>Contents</span>
                    <hr>
                    <ul>
                        <li onclick="smoothScroll('section1')">What's Medicare?</li>
                        <li onclick="smoothScroll('section2')">What are the Parts of Medicare?</li>
                        <li onclick="smoothScroll('section3')">How does Medicare work?</li>
                        <li onclick="smoothScroll('section4')">Medicare Prescription Drug Coverage (Part D)</li>
                    </ul>    
                </div>
            </div>
            <div class="medicare101-contents col xl9 l12 m12 s12">
                <h1>Medicare 101</h1>
                <img src="media/cover4.jpeg">
                <div class="medicare101-con1" id="section1">
                    <div class="flex medflex1">
                        <div class="flex-item flextitle">
                            <h2>What's Medicare?</h2>
                        </div>
                        <div class="flex-item">
                            <img class="med101-art" src="media/image-set1/1.png" alt="">
                        </div>
                    </div>
                    <div>
                        <p>Medicare is a federal healthcare program for Americans who are disabled or 65 years old and who they or their spouse have worked and paid into social security for 10 years of full time employment. In order to participate in the program you need to be an American citizen or permanent legal resident and meet the following requirements:</p>
                        <ul>
                            <li>You are 65 years old</li>
                            <li>You receive disability benefits from the <span>Social Security Administration (SSA)</span> or the <span>Railroad Retirement Board (RRB)</span>, regardless of age.</li>
                            <li>You have been diagnosed with <span>Amyotrophic Lateral Sclerosis (ALS)</span>, also known as <span>Lou Gehrig's disease</span>.</li>
                            <li>You have <span>End-Stage Renal Disease (ESRD)</span>.</li>
                        </ul>
                    </div> 
                </div>
                <div class="medicare101-con2" id="section2">
                    <div class="flex medflex2">
                        <div class="flex-item">
                            <img class="med101-art" src="media/image-set1/8.png" alt="">
                        </div>
                        <div class="flex-item flextitle">
                            <h2>What are the Parts of Medicare?</h2>
                        </div>
                    </div>
                    <div>
                        <p>The different parts of Medicare help cover specific services:</p>
                        <ul>
                            <li><span>Medicare Part A (Hospital Insurance)</span> - Part A covers inpatient hospital stays, care in a skilled nursing facility, hospice care, and some home health care.</li>
                            <li><span>Medicare Part B (Medical Insurance)</span> - Part B covers certain doctors' services, outpatient care, medical supplies, and preventive services.</li>
                            <li><span>Medicare Part D (prescription drug coverage)</span> - Helps cover the cost of prescription drugs (including many recommended shots or vaccines).</li>
                        </ul>    
                    </div>
                </div>
                <div class="medicare101-con3" id="section3">
                    <div class="flex medflex3">
                        <div class="flex-item flextitle">
                            <h2>How does Medicare Work?</h2>
                        </div>
                        <div class="flex-item">
                            <img class="med101-art" src="media/image-set1/3.png" alt="">
                        </div>
                    </div>
                    <div>
                        <p>With Medicare, you have options in how you get your coverage. Once you enroll, you'll need to decide how you'll get your Medicare coverage. There are 2 main ways:</p>
                        <p><span>Original Medicare </span>includes Medicare Part A (Hospital Insurance) and Medicare Part B (Medical Insurance). You pay for services as you get them. When you get services, you'll pay a deductible at the start of each year, and you usually pay 20% of the cost of the Medicare-approved service, called coinsurance. If you want drug coverage, you can add a separate drug plan (Part D).</p>
                        <p>Original Medicare pays for much, but not all, of the cost for covered health care services and supplies. A Medicare Supplement Insurance (Medigap) policy can help pay some of the remaining health care costs, like copayments, coinsurance, and deductibles. Some Medigap policies also cover services that Original Medicare doesn't cover, like emergency medical care when you travel outside the U.S.</p>
                        <p><span>Medicare Advantage </span> is a Medicare-approved plan from a private company that offers an alternative to Original Medicare for your health and drug coverage. These “bundled” plans include Part A, Part B, and usually Part D. Plans may offer some extra benefits that Original Medicare doesn't cover — like vision, hearing, and dental services. Medicare Advantage Plans have yearly contracts with Medicare and must follow Medicare's coverage rules. The plan must notify you about any changes before the start of the next enrollment year.</p>
                        <p>Each Medicare Advantage Plan can charge different out-of-pocket costs. They can also have different rules for how you get services.</p>    
                    </div>
                </div>
                <div class="medicare101-con4" id="section4">
                    <div class="flex medflex4">
                        <div class="flex-item">
                            <img class="med101-art" src="media/image-set1/9.png" alt="">
                        </div>
                        <div class="flex-item flextitle">
                            <h2>Medicare Prescription Drug Coverage (Part D)</h2>
                        </div>
                    </div>
                    <div>
                        <p>Medicare drug coverage helps pay for prescription drugs you need. To get Medicare drug coverage, you must join a Medicare-approved plan that offers drug coverage (this includes Medicare drug plans and Medicare Advantage Plans with drug coverage).</p>
                        <p>Each plan can vary in cost and specific drugs covered, but must give at least a standard level of coverage set by Medicare. Medicare drug coverage includes generic and brand-name drugs. Plans can vary the list of prescription drugs they cover (called a formulary) and how they place drugs into different "tiers" on their formularies.</p>
                        <p>Plans have different monthly premiums. You'll also have other costs throughout the year in a Medicare drug plan. How much you pay for each drug depends on which plan you choose.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->

    <div class="footer" id="footer">
        <div class="footer-content row">
            <div class="footer-address col s12 m6 l4 xl4">
                <h3 class="font-poppins-semibold">ADDRESS</h3>
                <p class="font-questrial">500 Terry Francois Street,<br>San Francisco, CA 94158</p>
                <p class="font-questrial">Tel: 123-456-7890</p>
            </div>
            <div class="footer-opening col s12 m6 l4 xl4">
                <h3 class="font-poppins-semibold">OPENING HOURS</h3>
                <p class="font-questrial">Monday - Saturday: 7:00am - 7:30pm </p>
                <p class="font-questrial">Sunday: 7:00am - 4:30pm</p>
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</html>