<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../template/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../template/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../template/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../template/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../template/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../template/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../template/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../template/vendors/simplebar/simplebar.min.js"></script>
    <script src="../../template/assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../template/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../template/assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../template/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../template/assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../template/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <style>
        .dropdown-menu {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        #dropdownMenuButton:hover+.dropdown-menu,
        .dropdown-menu:hover {
            display: block;
        }
    </style>
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <style>
        .navbar .dropdown-menu {
    overflow: visible;
    /* left: -0.5625rem; */
}
.dropdown-menu[data-bs-popper] {
    top: 100%;
    left: 1035px;
    margin-top: var(--phoenix-dropdown-spacer);
}
.navbar .dropdown-menu {
    overflow: visible;
    /* left: -0.5625rem; */
}
.navbar .dropdown-menu {
    overflow: visible;
    /* left: -0.5625rem; */
}
    </style>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="alternate-landing" style="--phoenix-scroll-margin-top: 1.2rem;">
        <div class="bg-white sticky-top landing-navbar" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
            <nav class="navbar navbar-expand-lg container-small px-3 px-lg-7 px-xxl-3"> <a
                    class="d-flex flex-center text-decoration-none" href="../../../index-2.html"
                    style="margin-bottom:0px;margin-right: -130px;">
                    <img src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='174' height='26' viewBox='0 0 174 26' fill='none'%3E%3Cpath d='M20.1369 26C22.8983 26 25.1842 23.7425 24.6732 21.0288C24.3528 19.3274 23.8679 17.6594 23.2235 16.0502C21.9602 12.8958 20.1087 10.0295 17.7745 7.61522C15.4403 5.2009 12.6692 3.28575 9.61949 1.97913C8.11383 1.33406 6.55481 0.843538 4.96489 0.512196C2.26154 -0.0511821 0 2.23858 0 5V21C0 23.7614 2.23858 26 5 26H20.1369Z' fill='%23615DFF'/%3E%3Cg style='mix-blend-mode:multiply'%3E%3Cpath d='M13.7013 26C10.9399 26 8.65395 23.7425 9.16502 21.0288C9.48544 19.3274 9.97031 17.6594 10.6147 16.0502C11.878 12.8958 13.7295 10.0295 16.0637 7.61522C18.3979 5.2009 21.169 3.28575 24.2187 1.97913C25.7244 1.33406 27.2834 0.843538 28.8733 0.512196C31.5767 -0.0511821 33.8382 2.23858 33.8382 5V21C33.8382 23.7614 31.5996 26 28.8382 26H13.7013Z' fill='%233DD9EB'/%3E%3C/g%3E%3C/svg%3E"
                        alt="SVG Image" style="margin-bottom:0px;">
                </a>
                <a class="logo-text ms-2 d-none d-sm-block" href="#">ProTech</a>
                <div class="d-lg-none">
                    <div class="theme-control-toggle fa-icon-wait px-2"><input
                            class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                            data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                            for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon" data-feather="moon"></span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleSm"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                                data-feather="sun"></span></label></div>
                </div><button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="border-bottom border-bottom-lg-0 mb-2">
                        <div class="search-box d-inline d-lg-none">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input search rounded-pill my-4" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item border-bottom border-bottom-lg-0"><a
                                class="nav-link lh-1 py-0 fs--1 fw-bold py-3 active" aria-current="page"
                                href="#">Home</a></li>
                        <li class="nav-item border-bottom border-bottom-lg-0"><a
                                class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#feature">Features</a></li>
                        <li class="nav-item border-bottom border-bottom-lg-0"><a
                                class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#team">Team</a></li>
                    </ul>
                    <div class="d-grid d-lg-flex align-items-center">
                        <div class="nav-item d-flex align-items-center d-none d-lg-block pe-2">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input
                                    class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                    data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch theme"><span class="icon" data-feather="moon"></span></label><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                        </div>
                        <a class="text-700 hover-text-1100 px-2 d-none d-lg-inline lh-sm" href="#"
                            data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search"
                                style="height: 20px; width: 20px;"></span></a><a
                            class="btn btn-link text-900 order-1 order-lg-0 ps-4 me-lg-2" href="{{route('login')}}">Sign
                            in</a>
                        <a class="btn btn-phoenix-primary order-0 dropdown-toggle" href="#" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fw-bold">Sign Up</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{route('member_register')}}">MEMBER</a></li>
                            <li><a class="dropdown-item" href="{{route('student')}}">STUDENT</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
            data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15 rounded-pill">
                    <div class="modal-body p-0">
                        <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}'
                            style="width: auto;">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input fuzzy-search rounded-pill form-control-lg"
                                    type="search" placeholder="Search..." aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                                data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                    aria-label="Close"></button></div>
                            <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                                <div class="scrollbar-overlay" style="max-height: 30rem;">
                                    <div class="list pb-3">
                                        <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span
                                                class="text-500">results</span></h6>
                                        <hr class="text-200 my-0" />
                                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Recently Searched </h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="../../template/apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"><span
                                                            class="fa-solid fa-clock-rotate-left"
                                                            data-fa-transform="shrink-2"></span> Store Macbook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../..template//apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-solid fa-clock-rotate-left"
                                                            data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Products</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                                href="../../template/apps/e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img
                                                        class="h-100 w-100 fit-cover rounded-3"
                                                        src="../../template/assets/img/products/60x60/3.png" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                                    <p class="fs--2 mb-0 d-flex text-700"><span
                                                            class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB
                                                            Storage</span></p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center"
                                                href="../../apps/e-commerce/landing/product-details.html">
                                                <div class="file-thumbnail me-2"><img class="img-fluid"
                                                        src="../../template/assets/img/products/60x60/3.png" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                                    <p class="fs--2 mb-0 d-flex text-700"><span
                                                            class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Quick Links</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="../../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"><span
                                                            class="fa-solid fa-link text-900"
                                                            data-fa-transform="shrink-2"></span> Support MacBook House
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-solid fa-link text-900"
                                                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Files</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="../../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"><span
                                                            class="fa-solid fa-file-zipper text-900"
                                                            data-fa-transform="shrink-2"></span> Library MacBook
                                                        folder.rar</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-solid fa-file-lines text-900"
                                                            data-fa-transform="shrink-2"></span> Feature MacBook
                                                        extensions.txt</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-solid fa-image text-900"
                                                            data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Members</h6>
                                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                                href="../members.html">
                                                <div class="avatar avatar-l status-online  me-2 text-900">
                                                    <img class="rounded-circle "
                                                        src="../../template/assets/img/team/40x40/10.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                                    <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                                                </div>
                                            </a>
                                            <a class="dropdown-item py-2 d-flex align-items-center"
                                                href="../members.html">
                                                <div class="avatar avatar-l  me-2 text-900">
                                                    <img class="rounded-circle "
                                                        src="../../template/assets/img/team/40x40/12.webp" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-1000 title">John Smith</h6>
                                                    <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                                                </div>
                                            </a>
                                        </div>
                                        <hr class="text-200 my-0" />
                                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">
                                            Related Searches</h6>
                                        <div class="py-2"><a class="dropdown-item"
                                                href="../../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"><span
                                                            class="fa-brands fa-firefox-browser text-900"
                                                            data-fa-transform="shrink-2"></span> Search in the Web
                                                        MacBook</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item"
                                                href="../../apps/e-commerce/landing/product-details.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-normal text-1000 title"> <span
                                                            class="fa-brands fa-chrome text-900"
                                                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="pb-8 overflow-hidden" id="home">
            <div class="hero-header-container-alternate position-relative">
                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 pt-8 pb-6 position-relative z-index-5 text-center text-lg-start">
                            <h1 class="fs-5 fs-md-6 fs-xl-7 fw-black mb-4"><span
                                    class="text-gradient-info me-3">Elegance</span>for<br />your web app</h1>
                            <p class="mb-5 pe-xl-10">Standard, modern and Elegant solution for your next web app so you
                                don’t have to look further. Sign up or check the demo below.</p><a
                                class="btn btn-lg btn-primary rounded-pill me-3" href="#!" role="button">Sign up</a><a
                                class="btn btn-link me-2 fs-0 p-0" href="#!" role="button">Check Demo<span
                                    class="fa-solid fa-angle-right ms-2 fs--1"></span></a>
                        </div>
                        <div class="col-12 col-lg-auto d-none d-lg-block">
                            <div class="hero-image-container position-absolute h-100 end-0 d-flex align-items-center">
                                <div class="position-relative">
                                    <div class="position-absolute end-0 hero-image-container-overlay"
                                        style="transform: skewY(-8deg)."></div><img
                                        class="position-absolute end-0 hero-image-container-bg"
                                        src="../../assets/img/bg/bg-36.png" alt="" /><img
                                        class="w-100 d-dark-none rounded-2 hero-image-shadow"
                                        src="../../assets/img/bg/bg-34.png" alt="hero-header" /><img
                                        class="w-100 d-light-none rounded-2 hero-image-shadow"
                                        src="../../assets/img/bg/bg-35.png" alt="hero-header" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-small px-md-8 mb-8 d-lg-none">
                    <div class="position-relative">
                        <div class="position-absolute end-0 hero-image-container-overlay"></div><img
                            class="position-absolute top-50 hero-image-container-bg" src="../../assets/img/bg/bg-39.png"
                            alt="" /><img class="img-fluid ms-auto d-dark-none rounded-2 hero-image-shadow"
                            src="../../assets/img/bg/bg-34.png" alt="hero-header" /><img
                            class="img-fluid ms-auto d-light-none rounded-2 hero-image-shadow"
                            src="../../assets/img/bg/bg-35.png" alt="hero-header" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row g-0">
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end">
                            <img class="img-fluid" src="../../template/assets/img/brand2/netflix-n.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md">
                            <img class="img-fluid" src="../../template/assets/img/brand2/blender.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md">
                            <img class="img-fluid" src="../../template/assets/img/brand2/upwork.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0">
                            <img class="img-fluid" src="../../template/assets/img/brand2/facebook-f.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-bottom-md-0">
                            <img class="img-fluid" src="../../template/assets/img/brand2/pocket.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-bottom-md-0">
                            <img class="img-fluid" src="../../template/assets/img/brand2/mail-bluster-1.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end"><img
                                class="img-fluid" src="../../template/assets/img/brand2/discord.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0"><img
                                class="img-fluid" src="../../template/assets/img/brand2/google-g.png" alt="" /></div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-13 pb-10" id="feature">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-10 mb-md-5">
                    <h5 class="text-info mb-3">Features</h5>
                    <h2 class="mb-3 lh-base">Complete suite of <br class="d-sm-none" />payment products.</h2>
                    <p class="mb-0">Focus only on functionalities for your digital products with Phoenix! Leave the UIs
                        for us.</p>
                    <div class="text-center mt-5"><a class="btn btn-outline-primary" href="#!">See more<span
                                class="fa-solid fa-angle-right ms-2"></span></a></div>
                </div>
                <div class="row flex-between-center px-xl-11 mb-10 mb-md-9">
                    <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
                        <h4 class="mb-3">Recieve the signals instantly</h4>
                        <p class="mb-5">Phoenix allows you to receive every signal instantly and fruitfully. No need for
                            long waits.</p><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check Demo<i
                                class="fa-solid fa-angle-right ms-2"></i></a>
                    </div>
                    <div class="col-md-5 mb-5 mb-md-0 text-center"><img class="w-75 w-md-100 d-dark-none"
                            src="../../template/assets/img/spot-illustrations/34.png" alt="" /><img
                            class="w-75 w-md-100 d-light-none" src="../../assets/img/spot-illustrations/34_2.png"
                            alt="" /></div>
                </div>
                <div class="row flex-between-center px-xl-11 mb-10 mb-md-9">
                    <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
                        <h4 class="mb-3">Make everyday a joyride</h4>
                        <p class="mb-5">Phoenix helps you show reports and data in one place and make the journey a glee
                            trip for everyone.</p><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check
                            Demo<i class="fa-solid fa-angle-right ms-2"></i></a>
                    </div>
                    <div class="col-md-5 mb-5 mb-md-0 text-center"><img class="w-75 w-md-100 d-dark-none"
                            src="../../template/assets/img/spot-illustrations/35.png" alt="" /><img
                            class="w-75 w-md-100 d-light-none" src="../../assets/img/spot-illustrations/35_2.png"
                            alt="" /></div>
                </div>
                <div class="row flex-between-center px-xl-11 false">
                    <div class="col-md-6 order-1 order-md-0 text-center text-md-start">
                        <h4 class="mb-3">See Your Revenue Grow</h4>
                        <p class="mb-5">Grow with Phoenix. We help you with everything you might need, We make it easy
                            and keep it simple.</p><a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Check
                            Demo<i class="fa-solid fa-angle-right ms-2"></i></a>
                    </div>
                    <div class="col-md-5 mb-5 mb-md-0 text-center"><img class="w-75 w-md-100 d-dark-none"
                            src="../../template/assets/img/spot-illustrations/36.png" alt="" /><img
                            class="w-75 w-md-100 d-light-none" src="../../assets/img/spot-illustrations/36_2.png"
                            alt="" /></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-14 overflow-x-hidden">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-5 position-relative">
                    <h5 class="text-info mb-3">Testimonial</h5>
                    <h2 class="mb-2 lh-base">What our customers has to say about us</h2>
                </div>
                <div class="carousel testimonial-carousel slide position-relative dark__bg-1100"
                    id="carouselExampleIndicators" data-bs-ride="carousel">
                    <div class="bg-holder d-none d-md-block"
                        style="background-image:url(../../template/assets/img/bg/39.png);background-size:186px;background-position:top 20px right 20px;">
                    </div>
                    <!--/.bg-holder-->
                    <img class="position-absolute d-none d-lg-block" src="../../assets/img/bg/bg-left-22.png"
                        width="150" alt="" style="top: -100px; left: -70px" /><img
                        class="position-absolute d-none d-lg-block" src="../../template/assets/img/bg/bg-right-22.png"
                        width="150" alt="" style="bottom: -80px; right: -80px" />
                    <div class="carousel-inner">
                        <div class="carousel-item text-center py-8 px-5 px-xl-15 active"><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                            <h3 class="fw-semi-bold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">Amazing theme,
                                excellent support from ThemeWagon with really fast reaction time! Thank you!</h3>
                            <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                                <div class="avatar avatar-3xl ">
                                    <img class="rounded-circle border border-2 border-primary"
                                        src="../../template/assets/img/team/12.webp" alt="" />
                                </div>
                                <div class="text-start">
                                    <h5>Johna Austin</h5>
                                    <p class="mb-0">CEO</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center py-8 px-5 px-xl-15 false"><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star-half-alt star-icon text-warning"></span>
                            <h3 class="fw-semi-bold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">An excellent theme
                                with fast support team to aid the development process! Thanks team Phoenix!</h3>
                            <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                                <div class="avatar avatar-3xl ">
                                    <img class="rounded-circle border border-2 border-primary"
                                        src="../../template/assets/img/team/13.webp" alt="" />
                                </div>
                                <div class="text-start">
                                    <h5>Monica Gomez</h5>
                                    <p class="mb-0">Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center py-8 px-5 px-xl-15 false"><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa fa-star text-warning"></span><span
                                class="fa-regular fa-star text-warning-300"></span>
                            <h3 class="fw-semi-bold fst-italic mt-3 mb-8 w-xl-70 mx-auto lh-base">Amazing support system
                                with quickest reply and steady communication of the concerned. Really loved working with
                                Phoenix!</h3>
                            <div class="d-flex align-items-center justify-content-center gap-3 mx-auto">
                                <div class="avatar avatar-3xl ">
                                    <img class="rounded-circle border border-2 border-primary"
                                        src="../../template/assets/img/team/14.webp" alt="" />
                                </div>
                                <div class="text-start">
                                    <h5>Marc Chiasson</h5>
                                    <p class="mb-0">CTO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-indicators"><button class="active" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true"
                            aria-label="Slide 1"></button><button type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button><button type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <section class="gallery">
            <div class="position-absolute left-0 w-100 gallery-overlay"></div>
            <div class="bg-holder d-none d-xl-block"
                style="background-image:url(../../template/assets/img/bg/bg-left-26.png);background-size:auto;background-position:left 65%;">
            </div>
            <!--/.bg-holder-->
            <div class="bg-holder d-none d-xl-block"
                style="background-image:url(../../template/assets/img/bg/bg-right-26.png);background-size:auto;background-position:right 62%;">
            </div>
            <!--/.bg-holder-->
            <div class="container-small position-relative px-lg-7 px-xxl-3">
                <div class="text-center mb-7">
                    <h5 class="text-info mb-3">Gallery</h5>
                    <h2 class="mb-2">Our best works</h2>
                </div>
                <ul class="nav font-sans-serif mb-6 w-max-content mx-auto" data-filter-nav="data-filter-nav">
                    <li class="nav-item"><a class="isotope-nav cursor-pointer active" data-filter="*">First</a></li>
                    <li class="nav-item"><a class="isotope-nav cursor-pointer" data-filter=".second">Second</a></li>
                    <li class="nav-item"><a class="isotope-nav cursor-pointer" data-filter=".third">Third</a></li>
                    <li class="nav-item"> <a class="isotope-nav cursor-pointer" data-filter=".fourth">Fourth</a></li>
                </ul>
                <div class="row g-3" id="image_gallery" data-sl-isotope='{"layoutMode":"packery"}'>
                    <div class="col-6 col-md-4 px-2 isotope-item fourth"><a href="#!"
                            data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../template/assets/img/gallery/27.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/27.png" alt="" /></a></div>
                    <div class="col-6 col-md-4 px-2 isotope-item third"><a href="#!"
                            data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../template/assets/img/gallery/28.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/28.png" alt="" /></a></div>
                    <div class="col-6 col-md-4 px-2 isotope-item second"><a href="#!"
                            data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../template/assets/img/gallery/29.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/29.png" alt="" /></a></div>
                    <div class="col-6 col-md-4 px-2 isotope-item third"><a href="#!"
                            data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../template/assets/img/gallery/30.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/30.png" alt="" /></a></div>
                    <div class="col-6 col-md-4 px-2 isotope-item third"><a href="#!"
                            data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../template/assets/img/gallery/31.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/31.png" alt="" /></a></div>
                    <div class="col-6 col-md-4 px-2 isotope-item second"><a href="#!"
                            data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../template/assets/img/gallery/32.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/32.png" alt="" /></a></div>
                    <div class="col-6 col-md-4 px-2 isotope-item fourth"><a href="#!"
                            data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../template/assets/img/gallery/33.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/33.png" alt="" /></a></div>
                    <div class="col-6 col-md-4 px-2 isotope-item third"><a href="#!"
                            data-bigpicture='{"gallery":"#image_gallery"}'
                            data-bp="../../template/assets/img/gallery/34.png"><img class="rounded img-fluid w-100"
                                src="../../assets/img/gallery/34.png" alt="" /></a></div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="overflow-hidden rotating-earth-container pb-5 pb-md-0 pt-12">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h5 class="text-info mb-3">One-stop solution</h5>
                        <h2 class="mb-2 lh-base">Used by millions of users</h2>
                        <h1 class="fs-4 fs-sm-6 mb-3 text-gradient-info fw-black">WORLDWIDE</h1>
                        <p class="mb-10">Keep it simple with Phoenix and help your organization grow with the abundance
                            you look for.</p>
                        <div class="row gy-6">
                            <div class="col-sm-6 text-center text-lg-start"><img class="mb-4 d-dark-none"
                                    src="../../template/assets/img/icons/lightning-speed.png" alt="" /><img
                                    class="mb-4 d-light-none" src="../../assets/img/icons/lightning-speed-dark.png"
                                    alt="" />
                                <h4 class="mb-2">Lightning Speed</h4>
                                <p>Grow fast with Phoenix!</p>
                            </div>
                            <div class="col-sm-6 text-center text-lg-start"><img class="mb-4 d-dark-none"
                                    src="../../template/assets/img/icons/best-statistics.png" alt="" /><img
                                    class="mb-4 d-light-none" src="../../assets/img/icons/best-statistics-dark.png"
                                    alt="" />
                                <h4 class="mb-2">Best Statistics</h4>
                                <p>Get all reports at hand!</p>
                            </div>
                            <div class="col-sm-6 text-center text-lg-start"><img class="mb-4 d-dark-none"
                                    src="../../template/assets/img/icons/all-night.png" alt="" /><img
                                    class="mb-4 d-light-none" src="../../assets/img/icons/all-night-dark.png" alt="" />
                                <h4 class="mb-2">All-night Protection</h4>
                                <p>Security Assured: Ensure data Safety with Phoenix!</p>
                            </div>
                            <div class="col-sm-6 text-center text-lg-start"><img class="mb-4 d-dark-none"
                                    src="../../template/assets/img/icons/editable-features.png" alt="" /><img
                                    class="mb-4 d-light-none" src="../../assets/img/icons/editable-features-dark.png"
                                    alt="" />
                                <h4 class="mb-2">Editable Features</h4>
                                <p>Edits made easy and safe!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto">
                        <div class="position-relative position-lg-absolute rotating-earth">
                            <div class="lottie d-dark-none"
                                data-options='{"path":"../../template/assets/img/animated-icons/rotating-earth.json"}'>
                            </div>
                            <div class="lottie d-light-none"
                                data-options='{"path":"../../template/assets/img/animated-icons/rotating-earth-dark.json"}'>
                            </div><img class="position-absolute d-dark-none"
                                src="../../assets/img/spot-illustrations/earth-plane.png" alt="" /><img
                                class="position-absolute d-light-none"
                                src="../../assets/img/spot-illustrations/earth-plane-dark.png" alt="" />
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <section class="counter-container">
            <div class="position-absolute start-0 end-0 w-100 counter-overlay" style="transform: skewY(-8deg)"></div>
            <div class="bg-holder d-none d-lg-block"
                style="background-image:url(../../template/assets/img/bg/bg-left-25.png);background-size:auto;background-position:left center;">
            </div>
            <!--/.bg-holder-->
            <div class="bg-holder d-none d-lg-block"
                style="background-image:url(../../template/assets/img/bg/bg-right-25.png);background-size:auto;background-position:right center;">
            </div>
            <!--/.bg-holder-->
            <div class="container-small position-relative">
                <div class="row gx-0 gy-8 justify-content-center">
                    <div
                        class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-dashed text-center order-2 order-md-0">
                        <h1 class="fs-5 fs-lg-7 fw-bolder text-info mb-3"><span>$</span><span
                                data-countup='{"endValue":8976,"duration":5,"suffix":""}'></span></h1>
                        <h4>Revenue</h4>
                    </div>
                    <div
                        class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-dashed text-center order-1 order-md-0">
                        <h1 class="fs-5 fs-lg-7 fw-bolder text-info mb-3"><span
                                data-countup='{"endValue":308,"duration":10,"suffix":""}'></span><span>K</span></h1>
                        <h4>User</h4>
                    </div>
                    <div class="col-sm-6 col-md-auto me-md-5 pe-md-5 border-end-md border-dashed text-center">
                        <h1 class="fs-5 fs-lg-7 fw-bolder text-info mb-3"
                            data-countup='{"endValue":12,"duration":0.5,"suffix":""}'></h1>
                        <h4>Countries</h4>
                    </div>
                    <div class="col-sm-6 col-md-auto text-center">
                        <h1 class="fs-5 fs-lg-7 fw-bolder text-info mb-3"
                            data-countup='{"endValue":125,"duration":15,"suffix":"+"}'></h1>
                        <h4>Stories</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="position-static pt-15 pt-md-5 pt-lg-2">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-3 mb-lg-7">
                    <h5 class="text-info mb-3">Pricing</h5>
                    <h2 class="mb-2">Choose the best deal for you</h2>
                </div>
                <div class="row g-3 mb-7 mb-lg-11">
                    <div class="col-lg-4">
                        <div class="pricing-card">
                            <div class="card bg-transparent border-0">
                                <div class="card-body p-7">
                                    <h3 class="mb-5">Starter</h3>
                                    <h1 class="fs-5 d-flex align-items-center gap-1 mb-3">$15<span
                                            class="fs-0 fw-normal">/ month</span></h1><button
                                        class="btn btn-lg w-100 mb-7 btn-outline-primary">Buy</button>
                                    <h5 class="mb-4">What’s included</h5>
                                    <ul class="fa-ul ps-4 m-0 pricing">
                                        <li class="d-flex align-items-center mb-3"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Timeline</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span
                                                class="fa-li"><span></span></span>
                                            <p class="mb-0">Advanced Search</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span
                                                class="fa-li"><span></span></span>
                                            <p class="mb-0">Custom fields</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span
                                                class="fa-li"><span></span></span>
                                            <p class="mb-0">Task dependencies</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-0"><span
                                                class="fa-li"><span></span></span>
                                            <p class="mb-0">Private teams &amp; projects</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-card">
                            <div class="card bg-transparent border border-2 border-info rounded-4">
                                <div class="card-body p-7">
                                    <h3 class="mb-5">Business</h3>
                                    <h1 class="fs-5 d-flex align-items-center gap-1 mb-3">$23<span
                                            class="fs-0 fw-normal">/ month</span></h1><button
                                        class="btn btn-lg w-100 mb-7 btn-primary">Buy</button>
                                    <h5 class="mb-4">What’s included</h5>
                                    <ul class="fa-ul ps-4 m-0 pricing">
                                        <li class="d-flex align-items-center mb-3"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Timeline</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Advanced Search</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Custom fields</p><span
                                                class="badge badge-phoenix badge-phoenix-info ms-2 fs--2">Info</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span
                                                class="fa-li"><span></span></span>
                                            <p class="mb-0">Task dependencies</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-0"><span
                                                class="fa-li"><span></span></span>
                                            <p class="mb-0">Private teams &amp; projects</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pricing-card">
                            <div class="card bg-transparent border-0">
                                <div class="card-body p-7">
                                    <h3 class="mb-5">Enterprise</h3>
                                    <h1 class="fs-5 d-flex align-items-center gap-1 mb-3">$40<span
                                            class="fs-0 fw-normal">/ month</span></h1><button
                                        class="btn btn-lg w-100 mb-7 btn-outline-primary">Buy</button>
                                    <h5 class="mb-4">What’s included</h5>
                                    <ul class="fa-ul ps-4 m-0 pricing">
                                        <li class="d-flex align-items-center mb-3"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Timeline</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Advanced Search</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Custom fields</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Task dependencies</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-0"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span>
                                            <p class="mb-0">Private teams &amp; projects</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card rounded-4 border-0 offer-card">
                    <div class="card-body d-md-flex align-items-center gap-4 py-5"><img class="mb-4 mb-md-0 d-dark-none"
                            src="../../template/assets/img/spot-illustrations/air-plane.png" width="155" alt="" /><img
                            class="mb-4 mb-md-0 d-light-none"
                            src="../../assets/img/spot-illustrations/air-plane-dark.png" width="155" alt="" />
                        <div>
                            <p>Business Starter, Business Standard, and Business Plus plans can be purchased for a
                                maximum of 300 users. There is no minimum or maximum user limit for Enterprise plans.
                            </p>
                            <p class="mb-6">Phoenix customers may have access to additional features for a limited
                                promotional period</p><a class="btn btn-link me-2 p-0 fs--1" href="#!"
                                role="button">Contact Support<i class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-10" id="blog">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-5 mb-8">
                    <h5 class="text-info mb-3">Blogs</h5>
                    <h2 class="mb-2">Our most viewed articles</h2>
                </div>
                <div class="row gx-3 gy-7">
                    <div class="col-lg-4">
                        <div class="blog-card"><img class="w-100 rounded-3"
                                src="../../template/assets/img/blog/blog-5.png" alt="" />
                            <div class="d-flex align-items-cente mt-3"><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center me-3"
                                    href="#!"><span class="fa-solid fa-eye fs--1"></span><span
                                        class="fs--2 ms-1 lh-1">2563</span></a><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center me-3"
                                    href="#!"><span class="fa-solid fa-heart fs--1"></span><span
                                        class="ms-1 fs--2 lh-1">125</span></a><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center"
                                    href="#!"><span class="fa-solid fa-comment fs--1"></span><span
                                        class="ms-1 fs--2 lh-1">125</span></a></div><span
                                class="badge bg-primary mb-2 mt-4">SEO</span>
                            <h4 class="mb-3 pe-sm-5 lh-lg">Top 10 ways to Ace SEO for your business</h4><a
                                class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                role="button">See more<span class="fa-solid fa-angle-right ms-2"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-card"><img class="w-100 rounded-3"
                                src="../../template/assets/img/blog/blog-6.png" alt="" />
                            <div class="d-flex align-items-cente mt-3"><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center me-3"
                                    href="#!"><span class="fa-solid fa-eye fs--1"></span><span
                                        class="fs--2 ms-1 lh-1">1256</span></a><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center me-3"
                                    href="#!"><span class="fa-solid fa-heart fs--1"></span><span
                                        class="ms-1 fs--2 lh-1">325</span></a><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center"
                                    href="#!"><span class="fa-solid fa-comment fs--1"></span><span
                                        class="ms-1 fs--2 lh-1">32</span></a></div><span
                                class="badge bg-primary mb-2 mt-4">Marketing</span>
                            <h4 class="mb-3 pe-sm-5 lh-lg">Top 12 Marketing strategies you can take</h4><a
                                class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                role="button">See more<span class="fa-solid fa-angle-right ms-2"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-card"><img class="w-100 rounded-3"
                                src="../../template/assets/img/blog/blog-7.png" alt="" />
                            <div class="d-flex align-items-cente mt-3"><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center me-3"
                                    href="#!"><span class="fa-solid fa-eye fs--1"></span><span
                                        class="fs--2 ms-1 lh-1">142</span></a><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center me-3"
                                    href="#!"><span class="fa-solid fa-heart fs--1"></span><span
                                        class="ms-1 fs--2 lh-1">123</span></a><a
                                    class="btn-link text-decoration-none text-800 d-flex align-items-center"
                                    href="#!"><span class="fa-solid fa-comment fs--1"></span><span
                                        class="ms-1 fs--2 lh-1">22</span></a></div><span
                                class="badge bg-primary mb-2 mt-4">Marketing</span>
                            <h4 class="mb-3 pe-sm-5 lh-lg">The top 7 methods to improve as a marketer</h4><a
                                class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                role="button">See more<span class="fa-solid fa-angle-right ms-2"></span></a>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-10 pb-xl-14">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="text-center mb-7">
                    <h5 class="text-info mb-3">Contact</h5>
                    <h2 class="mb-2">Choose the best deal for you</h2>
                </div>
                <div class="row">
                    <div class="col-12 mb-10">
                        <div class="googlemap" data-googlemap="data-googlemap" data-gmap="data-gmap"
                            data-latlng="40.7228022,-74.0020158" data-scrollwheel="false" data-zoom="15"
                            style="height: 381px; border-radius:1.5rem;">
                            <div class="marker-content py-3">
                                <h5>Google map</h5>
                                <p>A nice template for your site.<br />Customize it as you want.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-lg-5">
                    <div class="col-md-6 mb-5 mb-md-0 text-center text-md-start">
                        <h3 class="mb-3">Stay connected</h3>
                        <p class="mb-5">Stay connected with Phoenix's Help Center; Phoenix is available for your
                            necessities at all times.</p>
                        <div class="d-flex flex-column align-items-center align-items-md-start gap-3 gap-md-0">
                            <div class="d-md-flex align-items-center">
                                <div class="icon-wrapper shadow-info"><span
                                        class="uil uil-phone text-primary light fs-4 z-index-1 ms-2"></span></div>
                                <div class="flex-1 ms-3"><a class="link-900" href="tel:+871406-7509">(871) 406-7509</a>
                                </div>
                            </div>
                            <div class="d-md-flex align-items-center">
                                <div class="icon-wrapper shadow-info"><span
                                        class="uil uil-envelope text-primary light fs-4 z-index-1 ms-2"></span></div>
                                <div class="flex-1 ms-3"><a class="fw-semi-bold text-900"
                                        href="mailto:phoenix@email.com">phoenix@email.com</a></div>
                            </div>
                            <div class="mb-6 d-md-flex align-items-center">
                                <div class="icon-wrapper shadow-info"><span
                                        class="uil uil-map-marker text-primary light fs-4 z-index-1 ms-2"></span></div>
                                <div class="flex-1 ms-3"><a class="fw-semi-bold text-900" href="#!">39163 Amir Drive
                                        Suite 802</a></div>
                            </div>
                            <div class="d-flex"><a href="#!"><span
                                        class="fa-brands fa-facebook fs-2 text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-twitter fs-2 text-primary me-3"></span></a><a
                                    href="#!"><span class="fa-brands fa-linkedin-in fs-2 text-primary"></span></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <h3 class="mb-3">Drop us a line</h3>
                        <p class="mb-7">If you have any query or suggestion , we are open to learn from you, Lets talk,
                            reach us anytime.</p>
                        <form class="row g-4">
                            <div class="col-12"><input class="form-control bg-white" type="text" name="name"
                                    placeholder="Name" required="required" /></div>
                            <div class="col-12"><input class="form-control bg-white" type="email" name="email"
                                    placeholder="Email" required="required" /></div>
                            <div class="col-12"><textarea class="form-control bg-white" rows="6" name="message"
                                    placeholder="Message" required="required"></textarea></div>
                            <div class="col-12 d-grid"><button class="btn btn-outline-primary"
                                    type="submit">Submit</button></div>
                            <div class="feedback"></div>
                        </form>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <section class="alternate-landing-team" id="team">
            <div class="position-absolute w-100 h-100 start-0 end-0 top-0 bg-soft-primary dark__bg-1000"
                style="transform: skewY(-6deg); transform-origin: right"></div>
            <div class="bg-holder d-none d-xl-block"
                style="background-image:url(../../template/assets/img/bg/bg-left-23.png);background-size:auto;background-position:left center;">
            </div>
            <!--/.bg-holder-->
            <div class="bg-holder d-none d-xl-block"
                style="background-image:url(../../template/assets/img/bg/bg-right-23.png);background-size:auto;background-position:right center;">
            </div>
            <!--/.bg-holder-->
            <div class="text-center mb-11 position-relative">
                <h5 class="text-info mb-3">Team</h5>
                <h2 class="mb-2">Our small team behind <br class="d-sm-none" />our success</h2>
            </div>
            <div class="container-small position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="row gx-3 gy-6 justify-content-center">
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/70.webp" alt="" />
                                    <h4>Brett Bezos</h4>
                                    <h5 class="fw-semi-bold">CEO</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/15.webp" alt="" />
                                    <h4>Lucas Murray</h4>
                                    <h5 class="fw-semi-bold">General Manager</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/71.webp" alt="" />
                                    <h4>Casey Andrews</h4>
                                    <h5 class="fw-semi-bold">IT Specialist</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/72.webp" alt="" />
                                    <h4>Poppy Russell</h4>
                                    <h5 class="fw-semi-bold">Frontend Dev</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/73.webp" alt="" />
                                    <h4>Emma Knowles</h4>
                                    <h5 class="fw-semi-bold">Backend Dev</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/74.webp" alt="" />
                                    <h4>Megan Holmes</h4>
                                    <h5 class="fw-semi-bold">HR</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/75.webp" alt="" />
                                    <h4>Cameron Fletcher</h4>
                                    <h5 class="fw-semi-bold">UX/UI Designer</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/20.webp" alt="" />
                                    <h4>Amber Norris</h4>
                                    <h5 class="fw-semi-bold">Consultant</h5>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="text-center"> <img class="w-70 w-sm-100 rounded-4 mb-3"
                                        src="../../template/assets/img/team/76.webp" alt="" />
                                    <h4>Scooby</h4>
                                    <h5 class="fw-semi-bold">Dog</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-soft-primary dark__bg-1000 pb-10 overflow-hidden">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="position-absolute w-100 h-100 start-0 end-0"
                    style="bottom: -350px; transform: skewY(-8deg); background: linear-gradient(102.27deg, #38ABFF 4.69%, #3874FF 106.27%)">
                </div>
                <div class="bg-holder"
                    style="background-image:url(../../template/assets/img/bg/bg-left-24.png);background-size:auto;background-position:left center;">
                </div>
                <!--/.bg-holder-->
                <div class="bg-holder"
                    style="background-image:url(../../template/assets/img/bg/bg-right-24.png);background-size:auto;background-position:right center;">
                </div>
                <!--/.bg-holder-->
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="card py-md-9 px-md-13 border-0 z-index-1 shadow-lg">
                            <div class="bg-holder"
                                style="background-image:url(../../template/assets/img/bg/bg-38.png);background-position:center;background-size:100%;">
                            </div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative"><img class="img-fluid mb-5 d-dark-none"
                                    src="../../template/assets/img/spot-illustrations/37.png" width="260"
                                    alt="..." /><img class="img-fluid mb-5 d-light-none"
                                    src="../../assets/img/spot-illustrations/37_2.png" width="260" alt="..." />
                                <p class="fw-bold">2008 Premium Icons <span class="text-primary fs-2">.</span> Included
                                    FREE with it</p>
                                <h1 class="fs-2 fs-sm-4 fs-lg-6 fw-bolder lh-sm mb-3">Join<span
                                        class="gradient-text-primary mx-2">Phoenix</span><span>Today</span></h1>
                                <form class="d-flex justify-content-center mb-3 px-xxl-15">
                                    <div class="d-grid d-sm-block"></div><input class="form-control me-3" id="ctaEmail1"
                                        type="email" placeholder="Email" aria-describedby="ctaEmail1" /><button
                                        class="btn btn-primary" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-1100 dark__bg-1000">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row gx-xxl-8 gy-5 align-items-center mb-5">
                    <div class="col-xl-auto text-center"><a href="#"><img
                                src="../../template/assets/img/icons/logo-white.png" height="48" alt="" /></a></div>
                    <div class="col-xl-auto flex-1">
                        <ul
                            class="list-unstyled d-flex justify-content-center flex-wrap mb-0 border-end-xl border-dashed border-800 gap-3 gap-xl-8 pe-xl-5 pe-xxl-8 w-75 w-md-100 mx-auto">
                            <li><a class="text-300 dark__text-300" href="#">Contact us</a></li>
                            <li><a class="text-300 dark__text-300" href="#">Newsroom</a></li>
                            <li><a class="text-300 dark__text-300" href="#">Opportunities</a></li>
                            <li><a class="text-300 dark__text-300" href="#">Login</a></li>
                            <li><a class="text-300 dark__text-300" href="#">Sign Up</a></li>
                            <li><a class="text-300 dark__text-300" href="#">Support</a></li>
                            <li><a class="text-300 dark__text-300" href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-auto">
                        <div class="d-flex align-items-center justify-content-center gap-8"><a
                                class="text-white dark__text-white" href="#!"> <span
                                    class="fa-brands fa-facebook"></span></a><a class="text-white dark__text-white"
                                href="#!"> <span class="fa-brands fa-twitter"></span></a><a
                                class="text-white dark__text-white" href="#!"> <span
                                    class="fa-brands fa-linkedin-in"></span></a></div>
                    </div>
                </div>
                <hr class="text-800" />
                <div class="d-sm-flex flex-between-center text-center">
                    <p class="text-600 mb-0">Copyright © Company Name</p>
                    <p class="text-600 mb-0">Made with love by <a href="https://themewagon.com/">ThemeWagon</a></p>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

        <div class="support-chat-container">
            <div class="container-fluid support-chat">
                <div class="card bg-white">
                    <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
                        <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                                class="fa-solid fa-circle text-success fs--3"></span></h5>
                        <div class="btn-reveal-trigger"><button
                                class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex"
                                type="button" id="support-chat-dropdown" data-bs-toggle="dropdown"
                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span class="fas fa-ellipsis-h text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                                    class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item"
                                    href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a
                                    class="dropdown-item" href="#!">Report to Admin</a><a
                                    class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
                        </div>
                    </div>
                    <div class="card-body chat p-0">
                        <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                            <div class="text-end mt-6"><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span
                                        class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                                </a><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered
                                    </p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                                </a><a
                                    class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span
                                        class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                                </a><a
                                    class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                                    href="#!">
                                    <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span
                                        class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                                </a></div>
                            <div class="text-center mt-auto">
                                <div class="avatar avatar-3xl status-online"><img
                                        class="rounded-circle border border-3 border-white"
                                        src="../../assets/img/team/30.webp" alt="" /></div>
                                <h5 class="mt-2 mb-3">Eric</h5>
                                <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or
                                    by email within 24 hours.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
                        <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4"><input
                                class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text"
                                placeholder="Write message" /><label
                                class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos"><span
                                    class="fa-solid fa-image"></span></label><input class="d-none" type="file"
                                accept="image/*" id="supportChatPhotos" /><label
                                class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment">
                                <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file"
                                id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span
                                class="fa-solid fa-paper-plane fs--1"></span></button>
                    </div>
                </div>
            </div><button class="btn p-0 border border-200 btn-support-chat"><span
                    class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span
                    class="fa-solid fa-circle text-success fs--1 ms-2"></span><span
                    class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
        aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header align-items-start border-bottom flex-column">
            <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
                    <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
                </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas"
                    aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
            </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
                    class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
        </div>
        <div class="offcanvas-body scrollbar px-card" id="themeController">
            <div class="setting-panel-item mt-0">
                <h5 class="setting-panel-item-title">Color Scheme</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                            value="light" data-theme-control="phoenixTheme" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="../../assets/img/generic/default-light.png" alt="" /></span><span
                                class="label-text">Light</span></label></div>
                    <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                            value="dark" data-theme-control="phoenixTheme" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="../../assets/img/generic/default-dark.png" alt="" /></span><span
                                class="label-text"> Dark</span></label></div>
                </div>
            </div>
            <div class="border rounded-3 p-4 setting-panel-item bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="setting-panel-item-title mb-1">RTL </h5>
                    <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox"
                            data-theme-control="phoenixIsRTL" /></div>
                </div>
                <p class="mb-0 text-700">Change text direction</p>
            </div>
            <div class="border rounded-3 p-4 setting-panel-item bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
                    <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox"
                            data-theme-control="phoenixSupportChat" /></div>
                </div>
                <p class="mb-0 text-700">Toggle support chat</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Navigation Type</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type"
                            type="radio" value="vertical" data-theme-control="phoenixNavbarPosition"
                            disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1"
                            for="navbarPositionVertical"> <span class="mb-2 rounded d-block"><img
                                    class="img-fluid img-prototype d-dark-none"
                                    src="../../assets/img/generic/default-light.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="../../assets/img/generic/default-dark.png" alt="" /></span><span
                                class="label-text">Vertical</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type"
                            type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition"
                            disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1"
                            for="navbarPositionHorizontal"> <span class="mb-2 rounded d-block"><img
                                    class="img-fluid img-prototype d-dark-none"
                                    src="../../assets/img/generic/top-default.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span
                                class="label-text"> Horizontal</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type"
                            type="radio" value="combo" data-theme-control="phoenixNavbarPosition"
                            disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1"
                            for="navbarPositionCombo"> <span class="mb-2 rounded d-block"><img
                                    class="img-fluid img-prototype d-dark-none"
                                    src="../../assets/img/generic/nav-combo-light.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="../../assets/img/generic/nav-combo-dark.png" alt="" /></span><span
                                class="label-text"> Combo</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type"
                            type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition"
                            disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1"
                            for="navbarPositionTopDouble"> <span class="mb-2 rounded d-block"><img
                                    class="img-fluid img-prototype d-dark-none"
                                    src="../../assets/img/generic/dual-light.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none"
                                    src="../../assets/img/generic/dual-dark.png" alt="" /></span><span
                                class="label-text"> Dual nav</span></label></div>
                </div>
                <p class="text-warning-500 font-medium"> <span
                        class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update navigation
                    type in this page</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio"
                            name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle"
                            disabled="disabled" /><label class="btn d-block w-100 btn-navbar-style fs--1"
                            for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none"
                                src="../../assets/img/generic/default-light.png" alt="" /><img
                                class="img-fluid img-prototype d-light-none"
                                src="../../assets/img/generic/default-dark.png" alt="" /><span
                                class="label-text d-dark-none"> Default</span><span
                                class="label-text d-light-none">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
                            value="darker" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" /><label
                            class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img
                                class="img-fluid img-prototype d-dark-none"
                                src="../../assets/img/generic/vertical-darker.png" alt="" /><img
                                class="img-fluid img-prototype d-light-none"
                                src="../../assets/img/generic/vertical-lighter.png" alt="" /><span
                                class="label-text d-dark-none"> Darker</span><span
                                class="label-text d-light-none">Lighter</span></label></div>
                </div>
                <p class="text-warning-500 font-medium"> <span
                        class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical
                    navbar appearance type in this page</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
                            value="default" data-theme-control="phoenixNavbarTopShape" disabled="disabled" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="../../assets/img/generic/top-default.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="../../assets/img/generic/top-default-dark.png" alt="" /></span><span
                                class="label-text">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio"
                            value="slim" data-theme-control="phoenixNavbarTopShape" disabled="disabled" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span
                                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                    src="../../assets/img/generic/top-slim.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="../../assets/img/generic/top-slim-dark.png" alt="" /></span><span
                                class="label-text"> Slim</span></label></div>
                </div>
                <p class="text-warning-500 font-medium"> <span
                        class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical
                    navbar appearance type in this page</p>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style"
                            type="radio" value="default" data-theme-control="phoenixNavbarTopStyle"
                            disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1"
                            for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img
                                    class="img-fluid img-prototype d-dark-none mb-0"
                                    src="../../assets/img/generic/top-default.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="../../assets/img/generic/top-style-darker.png" alt="" /></span><span
                                class="label-text">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style"
                            type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle"
                            disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1"
                            for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img
                                    class="img-fluid img-prototype d-dark-none mb-0"
                                    src="../../assets/img/generic/navbar-top-style-light.png" alt="" /><img
                                    class="img-fluid img-prototype d-light-none mb-0"
                                    src="../../assets/img/generic/top-style-lighter.png" alt="" /></span><span
                                class="label-text d-dark-none">Darker</span><span
                                class="label-text d-light-none">Lighter</span></label></div>
                </div>
                <p class="text-warning-500 font-medium"> <span
                        class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical
                    navbar appearance type in this page</p>
            </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary"
                href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/"
                target="_blank">Purchase template</a>
        </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center px-2 py-1">
            <div class="position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span
                            class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20"
                                    viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                        fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
        </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../template/vendors/popper/popper.min.js"></script>
    <script src="../../template/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../template/vendors/anchorjs/anchor.min.js"></script>
    <script src="../../template/vendors/is/is.min.js"></script>
    <script src="../../template/vendors/fontawesome/all.min.js"></script>
    <script src="../../template/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../template/vendors/list.js/list.min.js"></script>
    <script src="../../template/vendors/feather-icons/feather.min.js"></script>
    <script src="../../template/vendors/dayjs/dayjs.min.js"></script>
    <script src="../../template/assets/js/phoenix.js"></script>
    <script src="../../template/vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../template/vendors/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="../../template/vendors/bigpicture/BigPicture.js"></script>
    <script src="../../template/vendors/lottie/lottie.min.js"></script>
    <script src="../../template/vendors/countup/countUp.umd.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&amp;callback=initMap"
        async></script>
</body>

</html>
<!--
Downloaded from https://nullforums.net/resources/phoenix-admin-dashboard-webapp-template-html.6657/
2914167K3MLX7LFILQLTDIPN2TOWXFI5HGR7MU
-->