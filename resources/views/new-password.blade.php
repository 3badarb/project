<!doctype html>
<html lang="en">

    <head>


        <meta charset="utf-8" />
        <title>New Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"
            />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet"
            type="text/css" />
        <!--Custom Css-->

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


            <div class="main-content">

                <div class="page-content">

                    <!-- START RESET-PASSWORD -->
                    <section class="bg-auth">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-10 col-lg-12">
                                    <div class="card auth-box">
                                        <div class="row g-0">
                                            <div class="col-lg-6 text-center">
                                                <div class="card-body p-4">
                                                    <a href="index.html">
                                                        <img
                                                            src="assets/images/logo-light.png"
                                                            alt=""
                                                            class="logo-light">
                                                        <img
                                                            src="assets/images/logo-dark.png"
                                                            alt=""
                                                            class="logo-dark">
                                                    </a>
                                                    <div class="mt-5">
                                                        <img
                                                            src="assets/images/auth/reset-password.png"
                                                            alt=""
                                                            class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="auth-content
                                                    card-body p-5 h-100
                                                    text-white">
                                                    <div class="text-center
                                                        mb-4">
                                                        <h5>Enter Your New
                                                            Password</h5>

                                                    </div>
                                                    <form class="auth-form
                                                        text-white">
                                                        <div class="alert
                                                            alert-warning
                                                            text-center mb-4"
                                                            role="alert">We are
                                                            doing it for
                                                            you,don't worry,you
                                                            will have your
                                                            profile again
                                                        </div>
                                                        <div class="mb-4">
                                                            <label
                                                                class="form-label"
                                                                for="email">New
                                                                Password</label>
                                                            <input
                                                                type="password"
                                                                class="form-control"
                                                                id="email">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label
                                                                class="form-label"
                                                                for="email">Confirm
                                                                Password</label>
                                                            <input
                                                                type="password"
                                                                class="form-control"
                                                                id="email">
                                                        </div>
                                                        <div class="mt-3">
                                                            <button
                                                                type="submit"
                                                                class="btn
                                                                btn-white
                                                                w-100">Save
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <!-- end form -->

                                                    <div class="mt-5 text-center
                                                        text-white-50">
                                                        <p>Remembered It ? <a
                                                                href="sign-in.html"
                                                                class="fw-medium
                                                                text-white
                                                                text-decoration-underline">
                                                                Go to Login </a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end auth-box-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END RESET-PASSWORD -->

                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()" style="left:
            -165px;">
            <div>
                <h6>Select your color</h6>
                <ul class="pattern list-unstyled mb-0">
                    <li>
                        <a class="color-list color1" href="javascript: void(0);"
                            onclick="setColorGreen()"></a>
                    </li>
                    <li>
                        <a class="color-list color2" href="javascript: void(0);"
                            onclick="setColor('blue')"></a>
                    </li>
                    <li>
                        <a class="color-list color3" href="javascript: void(0);"
                            onclick="setColor('green')"></a>
                    </li>
                </ul>
                <div class="mt-3">
                    <h6>Light/dark Layout</h6>
                    <div class="text-center mt-3">
                        <!-- light-dark mode -->
                        <a href="javascript: void(0);" id="mode" class="mode-btn
                            text-white rounded-3">
                            <i class="uil uil-brightness mode-dark mx-auto"></i>
                            <i class="uil uil-moon mode-light"></i>
                        </a>
                        <!-- END light-dark Mode -->
                    </div>
                </div>
            </div>
            <div class="bottom d-none d-md-block">
                <a href="javascript: void(0);" class="settings rounded-end"><i
                        class="mdi mdi-cog mdi-spin"></i></a>
            </div>
        </div>
        <!-- end switcher-->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script
            src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
        <!-- Switcher Js -->
        <script src="assets/js/pages/switcher.init.js"></script>

    </body>

</html>