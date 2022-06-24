<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/Binarex-Logo-black.png" />

    <!-- TITLE -->
    <title>Binarex</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="app sidebar-mini ltr landing-page horizontal">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="#">
                            <img src="../assets/images/brand/Binarex-Logo-black.png"
                                class="header-brand-img desktop-logo" alt="logo" />
                            <!-- <img src="../assets/images/brand/Binarex-Logo-black.png"
                                class="header-brand-img light-logo-2" alt="logo"/> -->
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">
                                    <!-- SEARCH -->
                                    <div class="header-nav-right p-5">
                                        <a href="login.php" class="btn ripple btn-min w-sm btn-outline-primary me-2"
                                            target="_blank">Login
                                        </a>
                                        <a href="register.php" class="btn ripple btn-min w-sm btn-primary me-2"
                                            target="_blank">Register
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <div class="landing-top-header overflow-hidden">
                <div class="top sticky overflow-hidden">
                    <!--APP-SIDEBAR-->
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar bg-transparent">
                        <div class="container">
                            <div class="row">
                                <div class="main-sidemenu navbar px-0">
                                    <a class="navbar-brand ps-0 d-none d-lg-block" href="#">
                                        <img alt="" class="logo-2" src="../assets/images/brand/Binarex-Logo-black.png">
                                    </a>
                                    <div class="slide-left disabled" id="slide-left"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                        </svg></div>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="side-menu__item active
                                            external nav nav-link" data-bs-toggle="slide" href="index.php">
                                                <span class="side-menu__label">Home</span></a>
                                        </li>
                                        <li class="slide nav-item dropdown ">
                                            <a class="side-menu__item nav-link dropdown-toggle"
                                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" href="services.php"><span
                                                    class="side-menu__label"> Our Services</span></a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <li>
                                                    <a class="dropdown-item" href="binarex-robot.php">
                                                        Binarex Robots
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        Account Management
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu dropdown show">
                                                    <a href="#" class="dropdown-toggle" id="dropdownMenuLink"
                                                        role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                                        aria-haspopup="true" aria-tabindex="-1">
                                                        Buy Options
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li>
                                                            <a href="option1.php" class="dropdown-item" tabindex="-1">
                                                                Option 1 Buy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="option2.php" class="dropdown-item">
                                                                Option 2 Buy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="dropdown-item">
                                                                Compare Packages.
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        Our Blog
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        Our Partnership
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide nav-item dropdown">
                                            <a class="side-menu__item" href="remittance.php"><span
                                                    class="side-menu__label">Remittance</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="/faq.php"><span
                                                    class="side-menu__label">Faq's</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item external nav" data-bs-toggle="slide"
                                                href="/contact.php"><span class="side-menu__label">Contact</span></a>
                                        </li>
                                    </ul>
                                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                        </svg></div>
                                    <div class="header-nav-right d-none d-lg-block">
                                        <a href="login.php" class="btn ripple btn-min w-sm btn-outline-primary me-2"
                                            target="_blank">Login
                                        </a>
                                        <a href="register.php" class="btn ripple btn-min w-sm btn-primary me-2"
                                            target="_blank">Register
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/APP-SIDEBAR-->
                </div>
            </div>

            <!-- FAQ content -->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->

                    <!-- PAGE-HEADER END -->

                    <!-- Row-->
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <span class="card-title fw-bold fs-2">
                                        FREQUENTLY ASKED QUESTIONS
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    What is Binarex Reliable Robot?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Over 99% of traders fails on daily trades thus resulting in losses
                                                    & untold frustration! Even many more have committed suicide aside
                                                    those are depressed as a result of gross indebtedness.
                                                </div>
                                                <p class="mb-5 mb-lg-2 accordion-body">
                                                    Binarex reliable robot gives you the freedom and makes money
                                                    for you on a daily basis without fail.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    How Reliable is Deriv.Com?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Deriv is founded in malta in 1999. Earlier this platform appertained
                                                    to another
                                                    broker binary.Com. That's why if you are familiar with binary, you
                                                    will surely
                                                    move to deriv. The unique feature of this broker is the four trading
                                                    platforms -
                                                    dmt5, dtrader, dbot, and smart trader. Deriv works in the market for
                                                    more than 20 years and has a good reputation due to predecessor
                                                    companies. The broker's platform provides a wide range of assets and
                                                    ways to trade. Users can deposit and withdraw the money without a
                                                    commission, also there is an opportunity to open a cryptocurrency
                                                    account. Even the beginner can understand the work of the platform
                                                    because there are detailed instructions and guideline about the
                                                    trading instruments.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Can it trade on any binary platform?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    No! It is only compatible with deriv.Com/binary.Com
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    What Should Be My Minimum Balance To Engage The Robot?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    The minimum balance is $100 on <span class="text-primary">MARKET
                                                        KILLER</span>
                                                    and $1,000 <span class="text-primary">RED DRAGON</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    DO I Require Any Level Of Expertise To Be Able To Use The Robot?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    No! Our robot can be operated by a primary school pupil. You do not
                                                    need to have any level of experience and expertise at all.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                    aria-expanded="false" aria-controls="collapseSix">
                                                    How Many Trader Have Actually Used The Robot To Trade?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse"
                                                aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    They are in their thousands! Testimonies have been overwhelmingly
                                                    encouraging! It's your turn to join the number of happy everday
                                                    money ($) printers!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSeven">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSeven" aria-expanded="true"
                                                    aria-controls="collapseSeven">
                                                    Is There Any Guarantee On The Product?
                                                </button>
                                            </h2>
                                            <div id="collapseSeven" class="accordion-collapse collapse show"
                                                aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Yes & Yes! Upon making commitment, we are rock sure of your profit
                                                    making spree. However, if you are not satisfied, we do a 100% refund
                                                    of your commitment fee. We are 100% sure of your satisfaction as it
                                                    is guaranteed!
                                                </div>
                                                <p class="mb-5 mb-lg-2 accordion-body">
                                                    Please note that terms and conditions apply. Our refund policy is
                                                    within 3 days of an active purchase.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEight">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                    aria-expanded="false" aria-controls="collapseEight">
                                                    What Methods Of Payment Do You Accept?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseEight" class="accordion-collapse collapse show"
                                                aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    We accept skrill, bank transfer, ussd, & card payments.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingNine">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                    aria-expanded="false" aria-controls="collapseNine">
                                                    Is There Any Chance Of Losing My Money?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseNine" class="accordion-collapse collapse show"
                                                aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    No, if you keep to the simples rules as supplied by the robot!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                    aria-expanded="false" aria-controls="collapseTen">
                                                    How Do I Receive My Order?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseTen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    A download link will be automatically made available to your
                                                    registered e-mail immediately commitment is confirmed.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEleven">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseEleven"
                                                    aria-expanded="false" aria-controls="collapseEleven">
                                                    What is the Profit Sharing Ratio And How Often Is It Paid?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseEleven" class="accordion-collapse collapse show"
                                                aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Please refer to our <span
                                                        class="text-dark fs-6 fw-bold">SUBSCRIPTION</span> table under
                                                    <span class="text-primary">account management</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwelve">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwelve"
                                                    aria-expanded="false" aria-controls="collapseTwelve">
                                                    What Is The Minimum Return I Can Enjoy Per Day?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseTwelve" class="accordion-collapse collapse show"
                                                aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    2.5% to 20%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThirteen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThirteen"
                                                    aria-expanded="false" aria-controls="collapseThirteen">
                                                    Can I Purchase The Bot Outrightly So I Do Not Share My Profit With
                                                    You?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseThirteen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Yes you can. Reach out to us through our posted channel for the
                                                    bill.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFourteen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFourteen"
                                                    aria-expanded="false" aria-controls="collapseFourteen">
                                                    How Many Days In A Week Does One Run The Robot
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseFourteen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Seven (7) days a week. There is no break or holiday in the binary
                                                    market.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFifteen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFifteen"
                                                    aria-expanded="false" aria-controls="collapseFifteen">
                                                    Since The Bot Makes Money In Dollars, How Long Does It Take To Have
                                                    My Dollar Converted To Naira?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseFifteen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    It takes 2 minutes to 10 minutes. Almost instantly!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSixteen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSixteen"
                                                    aria-expanded="false" aria-controls="collapseSixteen">
                                                    Can Someone Withdraw My Money?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseSixteen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    This question is same like: can someone withdraw money from your
                                                    bank account? The answer is no!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSeventeen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSeventeen"
                                                    aria-expanded="false" aria-controls="collapseSeventeen">
                                                    Do You Render Other Services?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseSeventeen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Yes, our other services include
                                                </div>
                                                <p class="mb-lg-2 accordion-body">
                                                    <ul class="accordion-body">
                                                        <li>
                                                            i. Account Management
                                                        </li>
                                                        <li>
                                                            ii. Financial & Green Consultancy.
                                                        </li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEighteen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseEighteen"
                                                    aria-expanded="false" aria-controls="collapseEighteen">
                                                    Do You Give sufficient Time To Customer Service?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseEighteen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Our customer service is excellent! We hold your hands until you can
                                                    stand by yourself.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingNineteen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseNineteen"
                                                    aria-expanded="false" aria-controls="collapseNineteen">
                                                    Do You Accept Money To Your Account To Trade for People?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseNineteen" class="accordion-collapse collapse show"
                                                aria-labelledby="headingNineteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    By policy, we train you to do it yourself & make money all by
                                                    yourself. It's completely stress free! However, for the hedge fund
                                                    of our account management which allows client and people with less
                                                    capital to also engage the profit journey, we accept deposits for
                                                    both BINAREX bit and BINAREX cool CAPITAL SIZE categories.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwenty">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwenty"
                                                    aria-expanded="false" aria-controls="collapseTwenty">
                                                    Does The Robot Require Any Special Installation? Can It Expire Or
                                                    Crash?
                                                </button>
                                            </h2>
                                            </h2>
                                            <div id="collapseTwenty" class="accordion-collapse collapse show"
                                                aria-labelledby="headingTwenty" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    The robot does not require any special installation, the moment you
                                                    download it, it starts working & making money! It doesn't expire &
                                                    cannot crash except your device crahses. Even whereyour device
                                                    crashes, it's still in your email as long as you can access it!
                                                    Also, we may release new from time to time, this will be given to
                                                    you at no extra cost.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row-->
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>

    </div>

    <!-- FOOTER OPEN -->
    <div class="demo-footer">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="top-footer">
                            <div class="row">
                                <div class="col-lg-5 col-sm-12 col-md-12 reveal revealleft">
                                    <h6>Binarex</h6>
                                    <p>
                                        Make incredible income through our over 99% reliable <b>Binarex</b> robot.
                                    </p>
                                    <p class="mb-5 mb-lg-2">
                                        Are you an individual seeking to know what next to do with that fund
                                        to churn in commensurate returnds to fund a cool lifestyle? Are you
                                        a financial co-operative desiring to make profit of 10 months in just
                                        a number of weeks? Are you a company desiring to boost the revenue
                                        base of your company? Our services are for you.
                                    </p>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-md-4 reveal revealleft">
                                    <h6>Quick Links</h6>
                                    <ul class="list-unstyled mb-5 mb-lg-0">
                                        <li><a href="#">Binarex Agric Ebook</a></li>
                                        <li><a href="#">Financial & Green Consultancy</a></li>
                                        <li><a href="#">Account Management</a></li>
                                        <li><a href="#">WhatsApp Bulk Message Sender</a></li>
                                        <li><a href="#">Binarex Robots</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-4 reveal revealleft">
                                    <p class="fw-semibold fs-5">Get in touch</p>


                                    <div class="btn-list mt-6">
                                        <button type="button" class="btn btn-icon rounded-pill">
                                            <a
                                                href="https://api.whatsapp.com/send/?phone=18175122820&text=Hi%21%21&app_absent=0">
                                                <i class="fa-brands fa-whatsapp fa-xl"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-icon rounded-pill">
                                            <a href="https://telegram.me/binarex">
                                                <i class="fa-brands fa-telegram fa-xl"></i>
                                            </a>
                                        </button>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <footer class="main-footer px-0 pb-0 text-center">
                            <div class="row ">
                                <div class="col-md-12 col-sm-12">
                                    &copy; <span id="year"></span> <a href="javascript:void(0)">Binarex</a>.
                                    All rights reserved.
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- COUNTERS JS-->
    <script src="../assets/plugins/counters/counterup.min.js"></script>
    <script src="../assets/plugins/counters/waypoints.min.js"></script>
    <script src="../assets/plugins/counters/counters-1.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="../assets/plugins/company-slider/slider.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- Star Rating Js-->
    <script src="../assets/plugins/rating/jquery-rate-picker.js"></script>
    <script src="../assets/plugins/rating/rating-picker.js"></script>

    <!-- Star Rating-1 Js-->
    <script src="../assets/plugins/ratings-2/jquery.star-rating.js"></script>
    <script src="../assets/plugins/ratings-2/star-rating.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/landing.js"></script>

</body>

</html>