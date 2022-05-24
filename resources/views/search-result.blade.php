<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>Search | Jobcy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="./assets/images/favicon.ico">

        <!-- Choise Css -->
        <link rel="stylesheet"
            href="./index.html">
        <!-- Swiper Css -->
        <link rel="stylesheet"
            href="./assets/libs/swiper/swiper-bundle.min.css">
        <!-- Bootstrap Css -->

        <link href="./assets/css/bootstrap.min.css" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css"
            />
        <link rel="stylesheet"
            href="https://unicons.iconscout.com/release/v3.0.0/css/unicons.css">
        <!-- App Css-->
        <link href="./assets/css/app.min.css" id="app-style" rel="stylesheet"
            type="text/css" />
        <!--Custom Css-->
        <link href="./custom.css" rel="stylesheet" />
        <link rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
        <style>
                 html {
               scroll-behavior: smooth;
                    }
            </style>
    </head>

    <body>
        <!--start page Loader -->
        <div id="preloader">
            <div id="status">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <!--end page Loader -->

        <!-- Begin page -->
        <div>
            <!--Navbar Start-->
            <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
                <div class="container-fluid custom-container">
                    <a class="navbar-brand text-dark fw-bold me-auto"
                        href="index.html">
                        <img src="./assets/images/logo-dark.png" height="22"
                            alt="" class="logo-dark" />
                        <img src="./assets/images/logo-light.png" height="22"
                            alt="" class="logo-light" />
                    </a>
                    <div>
                        <button class="navbar-toggler me-3" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse"
                            aria-controls="navbarCollapse" aria-label="Toggle
                            navigation">
                            <i class="uil uil-align-center-justify"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse mt-0 pt-0"
                        id="navbarCollapse">
                        <ul class="navbar-nav mx-auto navbar-center">
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="./index.html"
                                    id="homedrop" role="button">
                                    Home
                                </a>

                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="javascript:void(0)"
                                    id="jobsdropdown" role="button"
                                    data-bs-toggle="dropdown">
                                    JOBS <i class="uil uil-arrow-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-center"
                                    aria-labelledby="jobsdropdown">
                                    <li><a class="dropdown-item"
                                            href="./job-list.html">JOBS LIST</a></li>
                                    <li><a class="dropdown-item"
                                            href="job-categories.html">JOBS
                                            CATEGORIES</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="javascript:void(0)"
                                    id="pagesdoropdown" role="button"
                                    data-bs-toggle="dropdown">
                                    Candidates/Companys
                                    <i class="uil uil-arrow-down"></i>
                                </a>
                                <div class="dropdown-menu
                                    dropdown-menu-center"
                                    aria-labelledby="pagesdoropdown">
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <a class="dropdown-item"
                                                    href="./candidate-list.html">Candidate
                                                    List</a>
                                                <a class="dropdown-item"
                                                    href="company-list.html">Company
                                                    List</a>

                                            </div>
                                        </div>
                                        <!--end col-->


                                    </div>
                                </div>
                            </li>
                            <!--end dropdown-->
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="./index.html#How"
                                    id="productdropdown" role="button"
                                    aria-expanded="false">
                                    How It Works

                                </a>

                            </li>
                            <!--end dropdown-->
                            <li class="nav-item">
                                <a href="./index.html#contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <!--end navbar-nav-->
                    </div>
                    <!--end navabar-collapse-->
                    <ul class="header-menu list-inline d-flex align-items-center
                        mb-0">

                        <li class="list-inline-item">
                            <a href="./sign-in.html" class="bg-p ps-4 pt-2 pb-2
                                pe-4">Sign
                                In</a>
                            <a href="./sign-up.html" class="bg-p ps-4 pt-2 pb-2
                                pe-4">Sign
                                Up</a>

                        </li>
                    </ul>
                    <!--end header-menu-->
                </div>
                <!--end container-->
            </nav>
            <!-- Navbar End -->


            <!-- START SIGN-UP MODAL -->
            <div class="modal fade" id="signupModal" tabindex="-1"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-5">
                            <div class="position-absolute end-0 top-0 p-3">
                                <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="auth-content">
                                <div class="w-100">
                                    <div class="text-center mb-4">
                                        <h5>Sign Up</h5>
                                        <p class="text-muted">Sign Up and get
                                            access to all the features of Jobcy</p>
                                    </div>
                                    <form action="#" class="auth-form">
                                        <div class="mb-3">
                                            <label for="usernameInput"
                                                class="form-label">Username</label>
                                            <input type="text"
                                                class="form-control"
                                                id="usernameInput"
                                                placeholder="Enter your
                                                username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="passwordInput"
                                                class="form-label">Email</label>
                                            <input type="email"
                                                class="form-control"
                                                id="emailInput"
                                                placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="emailInput"
                                                class="form-label">Password</label>
                                            <input type="password"
                                                class="form-control"
                                                id="passwordInput"
                                                placeholder="Password">
                                        </div>
                                        <div class="mb-4">
                                            <div class="form-check"><input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label"
                                                    for="flexCheckDefault">I
                                                    agree to the <a
                                                        href="javascript:void(0)"
                                                        class="text-primary
                                                        form-text
                                                        text-decoration-underline">Terms
                                                        and conditions</a></label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn
                                                btn-primary w-100">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="mt-3 text-center">
                                        <p class="mb-0">Already a member ? <a
                                                href="sign-in.html"
                                                class="form-text text-primary
                                                text-decoration-underline">
                                                Sign-in </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end modal-body-->
                    </div>
                    <!--end modal-content-->
                </div>
                <!--end modal-dialog-->
            </div>
            <!-- END SIGN-UP MODAL -->

            <div class="main-content">

                <div class="page-content">

                    <!-- START HOME -->
                    <section class="bg-home2" id="home">
                        <div class="container mb-0">
                            <div class="row align-items-center mb-0 pb-0">
                                <div class="col-lg-7 mb-0 pb-0">
                                    <div class="mb-4 pb-3 me-lg-5">
                                        <h6 class="sub-title">We have 150,000+
                                            live jobs</h6>
                                        <h1 class="display-5 fw-semibold mb-3">Find
                                            your dream jobs with <span
                                                class="text-primary fw-bold">Jobcy</span></h1>
                                        <p class="lead text-muted mb-0">Find
                                            jobs, create trackable resumes and
                                            enrich your applications.Carefully
                                            crafted after analyzing the needs of
                                            different industries.</p>
                                    </div>
                                    <form action="">
                                        <div class="registration-form mb-0
                                            pb-0">
                                            <div class="row g-0">
                                                <div class="col-md-8">
                                                    <div
                                                        class="filter-search-form
                                                        filter-border mt-3
                                                        mt-md-0">
                                                        <i class="uil
                                                            uil-briefcase-alt"></i>
                                                        <input type="search"
                                                            id="job-title"
                                                            class="form-control
                                                            filter-input-box"
                                                            placeholder="Job">
                                                    </div>
                                                </div>


                                                <!--end col-->
                                                <div class="col-md-4">
                                                    <div class="mt-3 mt-md-0
                                                        h-100">
                                                        <button class="btn
                                                            btn-primary
                                                            submit-btn w-100
                                                            h-100"
                                                            type="submit"><i
                                                                class="uil
                                                                uil-search
                                                                me-1"></i> Find
                                                            Job</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </form>
                                </div>
                                <!--end col-->
                                <div class="col-lg-5">
                                    <div class="mt-5 mt-md-0 mb-0">
                                        <img
                                            src="./assets/images/process-02.png"
                                            alt="" class="home-img" />
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- End Home -->

                    <!-- START JOB-LIST -->
                    <section class="section mt-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="me-lg-5">


                                        <div class="wedget-popular-title mt-0">
                                            <h6>You searched for Name</h6>
                                        </div>
                                        <!--end wedget-popular-title-->
                                        <!-- Job-list -->
                                        <div>


                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="align-middle
                                                        text-white"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-lg-0">
                                                                <a
                                                                    href="company-details.html"><img
                                                                        src="assets/images/featured-job/img-03.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-0"><a
                                                                        href="job-details.html"
                                                                        class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Creative
                                                                    Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Escondido,
                                                                    California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div class="d-flex
                                                                mb-0">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="uil
                                                                        uil-clock-three
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"> 37
                                                                    min ago</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-blue
                                                                    fs-13 mt-1">Internship</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="uil
                                                                        uil-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="align-middle
                                                        text-white"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-lg-0">
                                                                <a
                                                                    href="company-details.html"><img
                                                                        src="assets/images/featured-job/img-04.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-0"><a
                                                                        href="job-details.html"
                                                                        class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Creative
                                                                    Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Escondido,
                                                                    California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div class="d-flex
                                                                mb-0">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="uil
                                                                        uil-clock-three
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"> 50
                                                                    min ago</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-purple
                                                                    fs-13 mt-1">Freelance</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div
                                                                class="text-start
                                                                text-md-end">
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="uil
                                                                        uil-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->

                                            <div class="job-box bookmark-post
                                                card mt-4">
                                                <div class="bookmark-label
                                                    text-center">
                                                    <a href="javascript:void(0)"
                                                        class="align-middle
                                                        text-white"><i
                                                            class="mdi
                                                            mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="row
                                                        align-items-center">
                                                        <div class="col-md-2">
                                                            <div
                                                                class="text-center
                                                                mb-4 mb-lg-0">
                                                                <a
                                                                    href="company-details.html"><img
                                                                        src="assets/images/featured-job/img-05.png"
                                                                        alt=""
                                                                        class="img-fluid
                                                                        rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="mb-2
                                                                mb-md-0">
                                                                <h5 class="fs-18
                                                                    mb-0"><a
                                                                        href="job-details.html"
                                                                        class="text-dark">Product
                                                                        Director</a></h5>
                                                                <p
                                                                    class="text-muted
                                                                    fs-14 mb-0">Creative
                                                                    Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="d-flex
                                                                mb-2">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="mdi
                                                                        mdi-map-marker
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0">Escondido,
                                                                    California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div class="d-flex
                                                                mb-0">
                                                                <div
                                                                    class="flex-shrink-0">
                                                                    <i
                                                                        class="uil
                                                                        uil-clock-three
                                                                        text-primary
                                                                        me-1"></i>
                                                                </div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"> 1
                                                                    month ago</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-2">
                                                            <div>
                                                                <span
                                                                    class="badge
                                                                    bg-soft-danger
                                                                    fs-13 mt-1">Part
                                                                    Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row
                                                        justify-content-between">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p
                                                                    class="text-muted
                                                                    mb-0"><span
                                                                        class="text-dark">Experience
                                                                        :</span>
                                                                    2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-2
                                                            col-md-3">
                                                            <div>
                                                                <a
                                                                    href="#applyNow"
                                                                    data-bs-toggle="modal"
                                                                    class="primary-link">Apply
                                                                    Now <i
                                                                        class="uil
                                                                        uil-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->





                                        </div>


                                    </div>
                                </div>
                                <!--end col-->



                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END JOB-LIST -->

                    <!-- START FOOTER -->
                    <section class="bg-footer" id="contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-item mt-4 mt-lg-0
                                        me-lg-5">
                                        <h4 class="text-white mb-4">Jobcy</h4>
                                        <p class="text-white-50">It is a long
                                            established fact that a reader will
                                            be
                                            of a page reader will be of at its
                                            layout.</p>
                                        <p class="text-white mt-3">Follow Us on:</p>
                                        <ul class="footer-social-menu
                                            list-inline
                                            mb-0">
                                            <li class="list-inline-item"><a
                                                    href="#"><i class="uil
                                                        uil-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a
                                                    href="#"><i class="uil
                                                        uil-linkedin-alt"></i></a></li>
                                            <li class="list-inline-item"><a
                                                    href="#"><i class="uil
                                                        uil-google"></i></a></li>
                                            <li class="list-inline-item"><a
                                                    href="#"><i class="uil
                                                        uil-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2 col-6">
                                    <div class="footer-item mt-4 mt-lg-0">
                                        <p class="fs-16 text-white mb-4">Who we
                                            are</p>
                                        <ul class="list-unstyled footer-list
                                            mb-0">
                                            <li><a href="about.html"><i
                                                        class="uil
                                                        uil-angle-right-b"></i>
                                                    About Us</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2 col-6">
                                    <div class="footer-item mt-4 mt-lg-0">
                                        <p class="fs-16 text-white mb-4">For
                                            Jobs</p>
                                        <ul class="list-unstyled footer-list
                                            mb-0">
                                            <li><a href="job-categories.html"><i
                                                        class="uil
                                                        uil-angle-right-b"></i>
                                                    Browser Categories</a></li>
                                            <li><a href="./job-list.html"><i
                                                        class="uil
                                                        uil-angle-right-b"></i>
                                                    Browser Jobs</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2 col-6">
                                    <div class="footer-item mt-4 mt-lg-0">
                                        <p class="text-white fs-16 mb-4">For
                                            Candidates</p>
                                        <ul class="list-unstyled footer-list
                                            mb-0">
                                            <li><a href="./candidate-list.html"><i
                                                        class="uil
                                                        uil-angle-right-b"></i>
                                                    Candidate List</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-2 col-6">
                                    <div class="footer-item mt-4 mt-lg-0">
                                        <p class="fs-16 text-white mb-4">For
                                            Companies</p>
                                        <ul class="list-unstyled footer-list
                                            mb-0">
                                            <li><a href="company-list.html"><i
                                                        class="uil
                                                        uil-angle-right-b"></i>
                                                    Companies list
                                                </a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END FOOTER -->

                    <!-- START FOOTER-ALT -->
                    <div class="footer-alt">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="text-white-50 text-center mb-0">
                                        <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                        &copy; Jobcy - All Rights Reserved
                                    </p>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </div>
                    <!-- END FOOTER -->

                    <!-- Style switcher -->
                    <div id="style-switcher"
                        style="left:
                        -165px;">
                        <div>
                            <h6>Select your color</h6>
                            <ul class="pattern list-unstyled mb-0">
                                <li>
                                    <a class="color-list color1"
                                        href="javascript:
                                        void(0);"></a>
                                </li>
                                <li>
                                    <a class="color-list color2"
                                        href="javascript:
                                        void(0);"></a>
                                </li>
                                <li>
                                    <a class="color-list color3"
                                        href="javascript:
                                        void(0);"></a>
                                </li>
                            </ul>
                            <div class="mt-3">
                                <h6>Light/dark Layout</h6>
                                <div class="text-center mt-3">

                                    <a href="javascript: void(0);" id="mode"
                                        class="mode-btn text-white rounded-3">
                                        <i class="uil uil-brightness mode-dark
                                            mx-auto"></i>
                                        <i class="uil uil-moon mode-light"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="bottom d-none d-md-block">
                            <a href="javascript: void(0);" class="settings
                                rounded-end"><i class="mdi mdi-cog mdi-spin"></i></a>
                        </div>
                    </div>
                    <!-- end switcher-->
                    <!-- START APPLY MODAL -->
                    <div class="modal fade" id="applyNow" tabindex="-1"
                        aria-labelledby="applyNow" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-5">
                                    <div class="text-center mb-4">
                                        <h5 class="modal-title"
                                            id="staticBackdropLabel">Apply For
                                            This Job</h5>
                                    </div>
                                    <div class="position-absolute end-0 top-0
                                        p-3">
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nameControlInput"
                                            class="form-label">Name</label>
                                        <input type="text" class="form-control"
                                            id="nameControlInput"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailControlInput2"
                                            class="form-label">Email Address</label>
                                        <input type="email" class="form-control"
                                            id="emailControlInput2"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="messageControlTextarea"
                                            class="form-label">Message</label>
                                        <textarea class="form-control"
                                            id="messageControlTextarea" rows="4"
                                            placeholder="Enter your message"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label"
                                            for="inputGroupFile01">Resume Upload</label>
                                        <input type="file" class="form-control"
                                            id="inputGroupFile01">
                                    </div>
                                    <button type="submit" class="btn btn-primary
                                        w-100">Send Application</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->

            <!-- JAVASCRIPT -->
            <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script
                src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
            <!-- Choice Js -->
            <script
                src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
            <!-- Swiper Js -->
            <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
            <!-- Index Js -->
            <script src="./assets/js/pages/job-list.init.js"></script>

            <!-- Switcher Js -->
            <script src="./assets/js/pages/switcher.init.js"></script>
            <script src="./assets/js/pages/index.init.js"></script>

            <!-- App Js -->
            <script src="./assets/js/app.js"></script>

        </body>

    </html>