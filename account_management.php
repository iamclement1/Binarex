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

            <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container">
                        <div class="">
                            <!-- Contact Page -->
                            <div class="bg-image-landing section pb-0" id="Contact">
                                <div class="container">
                                    <div class="row">
                                        <h3 class="section-heading fw-bold fs-2">Account Management</h3>
                                        <div class="col-md-6">
                                            <div>
                                                <p>
                                                    For constraint of time on the part of certain people, we accept to
                                                    help them manage their accounts. Our account management is
                                                    RESULT-LADEN! We just put that account in profit much more
                                                    consistently than not.
                                                </p>
                                                <p>
                                                    There are three (3) variants to our account management each of which
                                                    is determined by your capital size
                                                </p>
                                            </div>
                                            <div>
                                                <h3 class="fw-bold fs-3 text-primary">Account Management 1</h3>
                                                <p class="fw-semibold fs-4">REMOTELY-MANAGED DEDICATED ACCOUNT</p>
                                                <p>
                                                    Here, the account is opened in your name and you have full control
                                                    of your account just like the regular bank account.
                                                </p>
                                                <p>
                                                    The only thing we take custody of is your DERIV.com SYNTHETIC
                                                    account and the trading password. Consequent upon this, our system
                                                    and crew of well-experienced, time tested professional traders who
                                                    priotize the SAFETY of your fund!
                                                </p>
                                                <p>
                                                    Capital sizes in this category is from 2 to 5 (BINAREX cool to
                                                    BINAREX jumbo).
                                                </p>
                                            </div>
                                            <div>
                                                <h3 class="fw-bold fs-3 text-primary">Account Management 2</h3>
                                                <p class="fw-semibold fs-4">YOUR LOCATION-MANAGED DEDICATED ACCOUNT</p>
                                                <p>
                                                    This has same features like REMOTELY-MANAGED DEDICATED ACCOUNT. It's
                                                    a special variant of our DEDICATED account management services that
                                                    only files on BINAREX jumbo (Capital SIZE of above $5,000)
                                                </p>
                                                <img src="./assets/images/landing/Account-management-2-300x150-1.jpg"
                                                    alt="account2_img">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 pb-3">
                                            <div>
                                                <p>
                                                    Under this scheme, we can fly and join you any you anywhere in the
                                                    world within the comfort of your OFFICE SPACE/premium BOOKED HOTEL
                                                    to execute trades as well as other fundamental account management
                                                    related services!
                                                </p>
                                                <p>
                                                    Please note, that you shall bear the cost of all travel logistics
                                                    for out delegate 2-man team.
                                                </p>
                                                <p>
                                                    For further enquiries, you may reach us through all our posted
                                                    channels.
                                                </p>
                                            </div>
                                            <div>
                                                <h3 class="fw-bold fs-3 text-primary">Account Management 3</h3>
                                                <p class="fw-semibold fs-4">HEDGE FUND</p>
                                                <p>
                                                    Hedge fund is a private investment partnership and funds pool that
                                                    uses varied and complex proprietary strategies and invest or trades
                                                    in complex products, including listed and unlisted derivatives
                                                </p>
                                                <p>
                                                    Put simply, hedge fund is a pool of money that takes both short and
                                                    long positions. As the name suggests, the fund trieds to hedge risk
                                                    to investor's capital against market volatility by employing
                                                    alternative investment approaches thus increasing capital size in
                                                    order to generate returns at reduceds risk.
                                                </p>
                                                <p>
                                                    Under this scheme, a direct DOLLAR deposit is made to the company's
                                                    account and BINAREX bit and BINAREX more falls under this category.
                                                </p>
                                                <p>
                                                    A weekly payout of between 2.5% to 5% on invested saving funds is
                                                    guaranted!
                                                </p>
                                            </div>
                                            <button class="btn btn-primary p-3">Contact Us</button>
                                        </div>
                                        <div class="pt-4">
                                            <h3 class="fw-bold fs-1 m-auto pt-3">
                                                CAPITAL ($)/SUBSCRIPTION TABLE
                                            </h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table border text-nowrap text-md-nowrap mb-0">
                                                            <thead class="table-primary">
                                                                <tr>
                                                                    <th>S/NO</th>
                                                                    <th>Capital</th>
                                                                    <th> FUND RANGE ($) </th>
                                                                    <th> SUBSCRIPTION ($) </th>
                                                                    <th> PROFIT FOR US + VPS (%)</th>
                                                                    <th>VALUE ADDED TAX (VAT) REBATE</th>
                                                                    <th>PROFIT FOR YOU (%)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>BINAREX bit</td>
                                                                    <td>100 - 400</td>
                                                                    <td>80</td>
                                                                    <td>Nil</td>
                                                                    <td>Nil</td>
                                                                    <td>2.5% payout/week</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>BINAREX cool</td>
                                                                    <td>500 - 2,000</td>
                                                                    <td>100</td>
                                                                    <td>Nil</td>
                                                                    <td>Nil</td>
                                                                    <td>5% payout/week</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>BINAREX more</td>
                                                                    <td>2,500 - 3,000</td>
                                                                    <td>150</td>
                                                                    <td>50</td>
                                                                    <td>12.5% of PFY</td>
                                                                    <td>50</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>BINAREX extra</td>
                                                                    <td>4,000 - 5,000</td>
                                                                    <td>150</td>
                                                                    <td>50</td>
                                                                    <td>10% of PFY</td>
                                                                    <td>50</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>BINAREX jumbo</td>
                                                                    <td>Above 5,000</td>
                                                                    <td>150</td>
                                                                    <td>50</td>
                                                                    <td>2% of PFY</td>
                                                                    <td>50</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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