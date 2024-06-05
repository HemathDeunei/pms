<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Phoenix</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="../template/assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../template/assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../template/assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="../template/assets/img/favicons/favicon.ico">
  <link rel="manifest" href="../template/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="../template/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="../template/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../template/vendors/simplebar/simplebar.min.js"></script>
  <script src="../template/assets/js/config.js"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link href="../template/vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="../template/assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="../template/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../template/assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="../template/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
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
    .col-form-label {
      width: 100%;
      text-align: left;
    }

    thead,
    tbody,
    tfoot,
    tr,
    td,
    th {
      padding: 10px;
      border-bottom: 1px solid #c5c0c0;
    }


    }
  </style>
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
      <script>
        var navbarStyle = window.config.config.phoenixNavbarStyle;
        if (navbarStyle && navbarStyle !== 'transparent') {
          document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
      </script>
      <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
          <ul class="navbar-nav flex-column" id="navbarVerticalNav">
            <!-- the home content in sie bar page here -->
            @include('home.sidebar_home')
            <!--end of the home content in sie bar page here -->
            <!-- the apps content in side bar page here -->
            @include('home.sidebar_apps')
            <!--end of the apps content in side bar page here -->
            @include('home.sidebar_page')
            @include('home.sidebar_modules')
            @include('home.sidebar_documentation')
          </ul>
        </div>
      </div>
      <div class="navbar-vertical-footer"><button
          class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span
            class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span
            class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
      <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../index-2.html">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
              </div>
            </div>
          </a>
        </div>
        <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
          style="width:25rem;">
          <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
              class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
              placeholder="Search..." aria-label="Search" />
            <span class="fas fa-search search-box-icon"></span>
          </form>
          <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
            data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
          </div>
          <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
            <div class="scrollbar-overlay" style="max-height: 30rem;">
              <div class="list pb-3">
                <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched </h6>
                <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left"
                          data-fa-transform="shrink-2"></span> Store Macbook</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left"
                          data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                    </div>
                  </a>
                </div>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                    href="../apps/e-commerce/landing/product-details.html">
                    <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                        src="../assets/img/products/60x60/3.png" alt="" /></div>
                    <div class="flex-1">
                      <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                      <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB
                          Storage</span></p>
                    </div>
                  </a>
                  <a class="dropdown-item py-2 d-flex align-items-center"
                    href="../apps/e-commerce/landing/product-details.html">
                    <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png"
                        alt="" /></div>
                    <div class="flex-1">
                      <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                      <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30
                          PM</span></p>
                    </div>
                  </a>
                </div>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
                <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900"
                          data-fa-transform="shrink-2"></span> Support MacBook House</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900"
                          data-fa-transform="shrink-2"></span> Store MacBook″</div>
                    </div>
                  </a>
                </div>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files</h6>
                <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900"
                          data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900"
                          data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900"
                          data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                    </div>
                  </a>
                </div>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members</h6>
                <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="members.html">
                    <div class="avatar avatar-l status-online  me-2 text-900">
                      <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                      <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                    </div>
                  </a>
                  <a class="dropdown-item py-2 d-flex align-items-center" href="members.html">
                    <div class="avatar avatar-l  me-2 text-900">
                      <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                    </div>
                    <div class="flex-1">
                      <h6 class="mb-0 text-1000 title">John Smith</h6>
                      <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                    </div>
                  </a>
                </div>
                <hr class="text-200 my-0" />
                <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Related Searches</h6>
                <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900"
                          data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                    <div class="d-flex align-items-center">
                      <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900"
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
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input
                class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                  data-feather="moon"></span></label><label
                class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                  data-feather="sun"></span></label></div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" style="min-width: 2.5rem" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell"
                style="height:20px;width:20px;"></span></a>
            <div
              class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
              id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                      type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="border-300">
                      <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                src="../assets/img/team/40x40/30.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Jessie Samson</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                  class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                  class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">10:41 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3">
                              <div class="avatar-name rounded-circle"><span>J</span></div>
                            </div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Jane Foster</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                  class='me-1 fs--2'>📅</span>Created an event.<span
                                  class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">10:20 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img
                                class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp"
                                alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Jessie Samson</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                                your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">9:30 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="border-300">
                      <div
                        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                src="../assets/img/team/40x40/57.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Kiera Anderson</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                  class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                  class="ms-2 text-400 fw-bold fs--2"></span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">9:11 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                src="../assets/img/team/40x40/59.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Herman Carter</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged
                                you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">10:58 PM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                src="../assets/img/team/40x40/58.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Benjamin Button</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                                your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">10:18 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-0">
                  <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                      href="notifications.html">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16"
                viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div
              class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
              aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-white position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
                <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
              </div>
            </a>
            <div
              class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
              aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                      placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                          data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                        class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                      policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                      href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" style="display:none;">
      <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
          <a class="navbar-brand navbar-brand" href="../index-2.html">phoenix <span
              class="text-1000 d-none d-sm-inline">slim</span></a>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                data-theme-control="phoenixTheme" value="dark" /><label
                class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                  class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                  class="fs--1 fw-bold">Dark</span></label><label
                class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                  class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                  class="fs--1 fw-bold">Light</span></label></div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal"
              data-bs-target="#searchBoxModal"><span data-feather="search" style="height:12px;width:12px;"></span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
              data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell"
                style="height:12px;width:12px;"></span></a>
            <div
              class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
              id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                      type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="border-300">
                      <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                src="../assets/img/team/40x40/30.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Jessie Samson</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                  class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                  class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">10:41 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3">
                              <div class="avatar-name rounded-circle"><span>J</span></div>
                            </div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Jane Foster</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                  class='me-1 fs--2'>📅</span>Created an event.<span
                                  class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">10:20 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img
                                class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp"
                                alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Jessie Samson</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                                your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">9:30 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="border-300">
                      <div
                        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                src="../assets/img/team/40x40/57.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Kiera Anderson</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                  class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                  class="ms-2 text-400 fw-bold fs--2"></span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">9:11 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                src="../assets/img/team/40x40/59.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Herman Carter</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged
                                you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">10:58 PM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                src="../assets/img/team/40x40/58.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs--1 text-black">Benjamin Button</h4>
                              <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                                your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                              <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                  class="fw-bold">10:18 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="font-sans-serif d-none d-sm-block"><button
                              class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                                unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-0">
                  <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                      href="notifications.html">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10"
                viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div
              class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
              aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-white position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a
                        class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img
                          src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser"
              href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
              aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
            <div
              class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
              aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                      placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                          data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                          data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                        class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                      policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                      href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
          aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
              class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="../index-2.html">
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
              <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
            </div>
          </div>
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="../index-2.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E
                    commerce</div>
                </a></li>
              <li><a class="dropdown-item" href="../dashboard/project-management.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project
                    management</div>
                </a></li>
              <li><a class="dropdown-item" href="../dashboard/crm.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                </a></li>
              <li><a class="dropdown-item" href="../apps/social/feed.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed
                  </div>
                </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-cube"></span>Apps</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="shopping-cart"></span>E commerce</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Admin</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Customer</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="phone"></span>CRM</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/deals.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/leads.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/reports.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="clipboard"></span>Project management</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../apps/chat.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat
                  </div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="mail"></span>Email</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/email/inbox.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/email/compose.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="bookmark"></span>Events</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="trello"></span>Kanban</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="share-2"></span>Social</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/social/profile.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/social/settings.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../apps/calendar.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar
                  </div>
                </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="starter.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="help-circle"></span>Faq</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="faq/faq-accordion.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                    </a></li>
                  <li><a class="dropdown-item" href="faq/faq-tab.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="globe"></span>Landing</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="landing/default.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                    </a></li>
                  <li><a class="dropdown-item" href="landing/alternate.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="tag"></span>Pricing</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="pricing/pricing-column.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                    </a></li>
                  <li><a class="dropdown-item" href="pricing/pricing-grid.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="notifications.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications
                  </div>
                </a></li>
              <li><a class="dropdown-item active" href="members.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                </a></li>
              <li><a class="dropdown-item" href="timeline.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="alert-triangle"></span>Errors</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="errors/404.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                    </a></li>
                  <li><a class="dropdown-item" href="errors/403.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                    </a></li>
                  <li><a class="dropdown-item" href="errors/500.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="lock"></span>Authentication</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Simple</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/simple/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Split</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/split/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Card</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/card/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="layout"></span>Layouts</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/dark-mode.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/darknav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/navbar-top.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/combo-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/dual-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                    </a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
            <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
              <div class="border-0 scrollbar" style="max-height: 60vh;">
                <div class="px-3 pt-4 pb-3 img-dropdown">
                  <div class="row gx-4 gy-5">
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Forms</h6>
                      </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a
                        class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a
                        class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a
                        class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a
                        class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link"
                        href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link"
                        href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link"
                        href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link"
                        href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link"
                        href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link"
                        href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link"
                        href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link"
                        href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link"
                        href="../modules/forms/validation.html">Validation</a><a class="dropdown-link"
                        href="../modules/forms/wizard.html">Wizard</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Icons</h6>
                      </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a
                        class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a
                        class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">ECharts</h6>
                      </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a
                        class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a
                        class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a
                        class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link"
                        href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link"
                        href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link"
                        href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link"
                        href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link"
                        href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link"
                        href="../modules/echarts/how-to-use.html">How to use</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Components</h6>
                      </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a
                        class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a
                        class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a
                        class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link"
                        href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link"
                        href="../modules/components/button.html">Buttons</a><a class="dropdown-link"
                        href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link"
                        href="../modules/components/card.html">Card</a><a class="dropdown-link"
                        href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link"
                        href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link"
                        href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link"
                        href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link"
                        href="../modules/components/list-group.html">List group</a><a class="dropdown-link"
                        href="../modules/components/modal.html">Modals</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link"
                        href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link"
                        href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link"
                        href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link"
                        href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link"
                        href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link"
                        href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link"
                        href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link"
                        href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link"
                        href="../modules/components/toast.html">Toast</a><a class="dropdown-link"
                        href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link"
                        href="../modules/components/chat-widget.html">Chat widget</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Tables</h6>
                      </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a
                        class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a
                        class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Utilities</h6>
                      </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a
                        class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a
                        class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link"
                        href="../modules/utilities/display.html">Display</a><a class="dropdown-link"
                        href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link"
                        href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link"
                        href="../modules/utilities/float.html">Float</a><a class="dropdown-link"
                        href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link"
                        href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link"
                        href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link"
                        href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link"
                        href="../modules/utilities/position.html">Position</a><a class="dropdown-link"
                        href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link"
                        href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link"
                        href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link"
                        href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link"
                        href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link"
                        href="../modules/utilities/visibility.html">Visibility</a>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="../documentation/getting-started.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting
                    started</div>
                </a></li>
              <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="settings"></span>Customization</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="table"></span>Layouts doc</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../documentation/gulp.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../documentation/design-file.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../changelog.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../showcase.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                </a></li>
            </ul>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
          <div class="theme-control-toggle fa-icon-wait px-2"><input
              class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme"
              value="dark" id="themeControlToggle" /><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                data-feather="moon"></span></label><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                data-feather="sun"></span></label></div>
        </li>
        <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
              data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" style="min-width: 2.5rem" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell"
              style="height:20px;width:20px;"></span></a>
          <div
            class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
            id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
            <div class="card position-relative border-0">
              <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                  <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                    type="button">Mark all as read</button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="scrollbar-overlay" style="height: 27rem;">
                  <div class="border-300">
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jane Foster</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created
                              an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                              src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                              your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-300">
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Kiera Anderson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Herman Carter</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged
                              you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Benjamin Button</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                              your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer p-0 border-top border-0">
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                    href="notifications.html">Notification history</a></div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16"
              viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
            </svg></a>
          <div
            class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
            aria-labelledby="navbarDropdownNindeDots">
            <div class="card bg-white position-relative border-0">
              <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                <div class="row text-center align-items-center gx-0 gy-0">
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">
              <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
            </div>
          </a>
          <div
            class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
            aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                  </div>
                  <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                </div>
                <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                    placeholder="Update your status" /></div>
              </div>
              <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="user"></span><span>Profile</span></a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                        data-feather="pie-chart"></span>Dashboard</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="lock"></span>Posts &amp; Activity</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="settings"></span>Settings &amp; Privacy </a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="help-circle"></span>Help Center</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="globe"></span>Language</a></li>
                </ul>
              </div>
              <div class="card-footer p-0 border-top">
                <ul class="nav d-flex flex-column my-3">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="user-plus"></span>Add another account</a></li>
                </ul>
                <hr />
                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                      class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                    policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                    href="#!">Cookies</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim"
      style="display:none;">
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
          aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
              class="toggle-line"></span></span></button>
        <a class="navbar-brand navbar-brand" href="../index-2.html">phoenix <span
            class="text-1000 d-none d-sm-inline">slim</span></a>
      </div>
      <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="../index-2.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E
                    commerce</div>
                </a></li>
              <li><a class="dropdown-item" href="../dashboard/project-management.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project
                    management</div>
                </a></li>
              <li><a class="dropdown-item" href="../dashboard/crm.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                </a></li>
              <li><a class="dropdown-item" href="../apps/social/feed.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed
                  </div>
                </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-cube"></span>Apps</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="shopping-cart"></span>E commerce</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Admin</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Customer</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="phone"></span>CRM</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/deals.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/leads.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/reports.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="clipboard"></span>Project management</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../apps/chat.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat
                  </div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="mail"></span>Email</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/email/inbox.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/email/compose.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="bookmark"></span>Events</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="trello"></span>Kanban</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="share-2"></span>Social</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/social/profile.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/social/settings.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../apps/calendar.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar
                  </div>
                </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="starter.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="help-circle"></span>Faq</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="faq/faq-accordion.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                    </a></li>
                  <li><a class="dropdown-item" href="faq/faq-tab.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="globe"></span>Landing</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="landing/default.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                    </a></li>
                  <li><a class="dropdown-item" href="landing/alternate.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="tag"></span>Pricing</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="pricing/pricing-column.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                    </a></li>
                  <li><a class="dropdown-item" href="pricing/pricing-grid.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="notifications.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications
                  </div>
                </a></li>
              <li><a class="dropdown-item active" href="members.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                </a></li>
              <li><a class="dropdown-item" href="timeline.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="alert-triangle"></span>Errors</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="errors/404.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                    </a></li>
                  <li><a class="dropdown-item" href="errors/403.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                    </a></li>
                  <li><a class="dropdown-item" href="errors/500.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="lock"></span>Authentication</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Simple</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/simple/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Split</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/split/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Card</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/card/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="layout"></span>Layouts</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/dark-mode.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/darknav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/navbar-top.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/combo-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/dual-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                    </a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
            <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
              <div class="border-0 scrollbar" style="max-height: 60vh;">
                <div class="px-3 pt-4 pb-3 img-dropdown">
                  <div class="row gx-4 gy-5">
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Forms</h6>
                      </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a
                        class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a
                        class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a
                        class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a
                        class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link"
                        href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link"
                        href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link"
                        href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link"
                        href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link"
                        href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link"
                        href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link"
                        href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link"
                        href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link"
                        href="../modules/forms/validation.html">Validation</a><a class="dropdown-link"
                        href="../modules/forms/wizard.html">Wizard</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Icons</h6>
                      </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a
                        class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a
                        class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">ECharts</h6>
                      </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a
                        class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a
                        class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a
                        class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link"
                        href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link"
                        href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link"
                        href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link"
                        href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link"
                        href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link"
                        href="../modules/echarts/how-to-use.html">How to use</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Components</h6>
                      </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a
                        class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a
                        class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a
                        class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link"
                        href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link"
                        href="../modules/components/button.html">Buttons</a><a class="dropdown-link"
                        href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link"
                        href="../modules/components/card.html">Card</a><a class="dropdown-link"
                        href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link"
                        href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link"
                        href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link"
                        href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link"
                        href="../modules/components/list-group.html">List group</a><a class="dropdown-link"
                        href="../modules/components/modal.html">Modals</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link"
                        href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link"
                        href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link"
                        href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link"
                        href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link"
                        href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link"
                        href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link"
                        href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link"
                        href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link"
                        href="../modules/components/toast.html">Toast</a><a class="dropdown-link"
                        href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link"
                        href="../modules/components/chat-widget.html">Chat widget</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Tables</h6>
                      </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a
                        class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a
                        class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Utilities</h6>
                      </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a
                        class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a
                        class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link"
                        href="../modules/utilities/display.html">Display</a><a class="dropdown-link"
                        href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link"
                        href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link"
                        href="../modules/utilities/float.html">Float</a><a class="dropdown-link"
                        href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link"
                        href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link"
                        href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link"
                        href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link"
                        href="../modules/utilities/position.html">Position</a><a class="dropdown-link"
                        href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link"
                        href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link"
                        href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link"
                        href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link"
                        href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link"
                        href="../modules/utilities/visibility.html">Visibility</a>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="../documentation/getting-started.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting
                    started</div>
                </a></li>
              <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="settings"></span>Customization</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="table"></span>Layouts doc</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../documentation/gulp.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../documentation/design-file.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../changelog.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../showcase.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                </a></li>
            </ul>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
          <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
              class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
              data-theme-control="phoenixTheme" value="dark" /><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                class="fs--1 fw-bold">Dark</span></label><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                class="fs--1 fw-bold">Light</span></label></div>
        </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
              data-feather="search" style="height:12px;width:12px;"></span></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell"
              style="height:12px;width:12px;"></span></a>
          <div
            class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
            id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
            <div class="card position-relative border-0">
              <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                  <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                    type="button">Mark all as read</button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="scrollbar-overlay" style="height: 27rem;">
                  <div class="border-300">
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jane Foster</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created
                              an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                              src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                              your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-300">
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Kiera Anderson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Herman Carter</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged
                              you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Benjamin Button</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                              your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer p-0 border-top border-0">
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                    href="notifications.html">Notification history</a></div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10"
              viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
            </svg></a>
          <div
            class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
            aria-labelledby="navbarDropdownNindeDots">
            <div class="card bg-white position-relative border-0">
              <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                <div class="row text-center align-items-center gx-0 gy-0">
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!"
            role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
            aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
          <div
            class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
            aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                  </div>
                  <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                </div>
                <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                    placeholder="Update your status" /></div>
              </div>
              <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="user"></span><span>Profile</span></a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                        data-feather="pie-chart"></span>Dashboard</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="lock"></span>Posts &amp; Activity</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="settings"></span>Settings &amp; Privacy </a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="help-circle"></span>Help Center</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="globe"></span>Language</a></li>
                </ul>
              </div>
              <div class="card-footer p-0 border-top">
                <ul class="nav d-flex flex-column my-3">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="user-plus"></span>Add another account</a></li>
                </ul>
                <hr />
                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                      class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                    policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                    href="#!">Cookies</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo"
      data-move-target="#navbarVerticalNav" style="display:none;">
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
          aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
              class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="../index-2.html">
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
              <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
            </div>
          </div>
        </a>
      </div>
      <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="../index-2.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E
                    commerce</div>
                </a></li>
              <li><a class="dropdown-item" href="../dashboard/project-management.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project
                    management</div>
                </a></li>
              <li><a class="dropdown-item" href="../dashboard/crm.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                </a></li>
              <li><a class="dropdown-item" href="../apps/social/feed.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed
                  </div>
                </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-cube"></span>Apps</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="shopping-cart"></span>E commerce</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Admin</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Customer</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="phone"></span>CRM</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/deals.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/leads.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/reports.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="clipboard"></span>Project management</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../apps/chat.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat
                  </div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="mail"></span>Email</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/email/inbox.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/email/compose.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="bookmark"></span>Events</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="trello"></span>Kanban</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="share-2"></span>Social</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/social/profile.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/social/settings.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../apps/calendar.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar
                  </div>
                </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="starter.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="help-circle"></span>Faq</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="faq/faq-accordion.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                    </a></li>
                  <li><a class="dropdown-item" href="faq/faq-tab.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="globe"></span>Landing</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="landing/default.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                    </a></li>
                  <li><a class="dropdown-item" href="landing/alternate.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="tag"></span>Pricing</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="pricing/pricing-column.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                    </a></li>
                  <li><a class="dropdown-item" href="pricing/pricing-grid.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="notifications.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications
                  </div>
                </a></li>
              <li><a class="dropdown-item active" href="members.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                </a></li>
              <li><a class="dropdown-item" href="timeline.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="alert-triangle"></span>Errors</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="errors/404.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                    </a></li>
                  <li><a class="dropdown-item" href="errors/403.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                    </a></li>
                  <li><a class="dropdown-item" href="errors/500.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="lock"></span>Authentication</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Simple</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/simple/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Split</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/split/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Card</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/card/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="layout"></span>Layouts</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/dark-mode.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/darknav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/navbar-top.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/combo-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/dual-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                    </a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
            <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
              <div class="border-0 scrollbar" style="max-height: 60vh;">
                <div class="px-3 pt-4 pb-3 img-dropdown">
                  <div class="row gx-4 gy-5">
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Forms</h6>
                      </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a
                        class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a
                        class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a
                        class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a
                        class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link"
                        href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link"
                        href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link"
                        href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link"
                        href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link"
                        href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link"
                        href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link"
                        href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link"
                        href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link"
                        href="../modules/forms/validation.html">Validation</a><a class="dropdown-link"
                        href="../modules/forms/wizard.html">Wizard</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Icons</h6>
                      </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a
                        class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a
                        class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">ECharts</h6>
                      </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a
                        class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a
                        class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a
                        class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link"
                        href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link"
                        href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link"
                        href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link"
                        href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link"
                        href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link"
                        href="../modules/echarts/how-to-use.html">How to use</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Components</h6>
                      </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a
                        class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a
                        class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a
                        class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link"
                        href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link"
                        href="../modules/components/button.html">Buttons</a><a class="dropdown-link"
                        href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link"
                        href="../modules/components/card.html">Card</a><a class="dropdown-link"
                        href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link"
                        href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link"
                        href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link"
                        href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link"
                        href="../modules/components/list-group.html">List group</a><a class="dropdown-link"
                        href="../modules/components/modal.html">Modals</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link"
                        href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link"
                        href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link"
                        href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link"
                        href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link"
                        href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link"
                        href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link"
                        href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link"
                        href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link"
                        href="../modules/components/toast.html">Toast</a><a class="dropdown-link"
                        href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link"
                        href="../modules/components/chat-widget.html">Chat widget</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Tables</h6>
                      </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a
                        class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a
                        class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Utilities</h6>
                      </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a
                        class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a
                        class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link"
                        href="../modules/utilities/display.html">Display</a><a class="dropdown-link"
                        href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link"
                        href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link"
                        href="../modules/utilities/float.html">Float</a><a class="dropdown-link"
                        href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link"
                        href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link"
                        href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link"
                        href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link"
                        href="../modules/utilities/position.html">Position</a><a class="dropdown-link"
                        href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link"
                        href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link"
                        href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link"
                        href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link"
                        href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link"
                        href="../modules/utilities/visibility.html">Visibility</a>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="../documentation/getting-started.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting
                    started</div>
                </a></li>
              <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="settings"></span>Customization</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="table"></span>Layouts doc</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../documentation/gulp.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../documentation/design-file.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../changelog.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../showcase.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                </a></li>
            </ul>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
          <div class="theme-control-toggle fa-icon-wait px-2"><input
              class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme"
              value="dark" id="themeControlToggle" /><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                data-feather="moon"></span></label><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                data-feather="sun"></span></label></div>
        </li>
        <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
              data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" style="min-width: 2.5rem" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell"
              style="height:20px;width:20px;"></span></a>
          <div
            class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
            id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
            <div class="card position-relative border-0">
              <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                  <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                    type="button">Mark all as read</button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="scrollbar-overlay" style="height: 27rem;">
                  <div class="border-300">
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jane Foster</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created
                              an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                              src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                              your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-300">
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Kiera Anderson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Herman Carter</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged
                              you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Benjamin Button</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                              your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer p-0 border-top border-0">
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                    href="notifications.html">Notification history</a></div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16"
              viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
            </svg></a>
          <div
            class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
            aria-labelledby="navbarDropdownNindeDots">
            <div class="card bg-white position-relative border-0">
              <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                <div class="row text-center align-items-center gx-0 gy-0">
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">
              <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
            </div>
          </a>
          <div
            class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
            aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                  </div>
                  <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                </div>
                <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                    placeholder="Update your status" /></div>
              </div>
              <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="user"></span><span>Profile</span></a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                        data-feather="pie-chart"></span>Dashboard</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="lock"></span>Posts &amp; Activity</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="settings"></span>Settings &amp; Privacy </a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="help-circle"></span>Help Center</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="globe"></span>Language</a></li>
                </ul>
              </div>
              <div class="card-footer p-0 border-top">
                <ul class="nav d-flex flex-column my-3">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="user-plus"></span>Add another account</a></li>
                </ul>
                <hr />
                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                      class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                    policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                    href="#!">Cookies</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim"
      data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
          aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
              class="toggle-line"></span></span></button>
        <a class="navbar-brand navbar-brand" href="../index-2.html">phoenix <span
            class="text-1000 d-none d-sm-inline">slim</span></a>
      </div>
      <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center"
        id="navbarTopCollapse">
        <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="../index-2.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E
                    commerce</div>
                </a></li>
              <li><a class="dropdown-item" href="../dashboard/project-management.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project
                    management</div>
                </a></li>
              <li><a class="dropdown-item" href="../dashboard/crm.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                </a></li>
              <li><a class="dropdown-item" href="../apps/social/feed.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed
                  </div>
                </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-cube"></span>Apps</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="shopping-cart"></span>E commerce</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Admin</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Customer</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="phone"></span>CRM</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/deals.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/leads.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/reports.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="clipboard"></span>Project management</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../apps/chat.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat
                  </div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="mail"></span>Email</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/email/inbox.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/email/compose.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="bookmark"></span>Events</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="trello"></span>Kanban</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="share-2"></span>Social</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../apps/social/profile.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/social/settings.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../apps/calendar.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar
                  </div>
                </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="starter.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="help-circle"></span>Faq</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="faq/faq-accordion.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                    </a></li>
                  <li><a class="dropdown-item" href="faq/faq-tab.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="globe"></span>Landing</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="landing/default.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                    </a></li>
                  <li><a class="dropdown-item" href="landing/alternate.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="tag"></span>Pricing</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="pricing/pricing-column.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                    </a></li>
                  <li><a class="dropdown-item" href="pricing/pricing-grid.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="notifications.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications
                  </div>
                </a></li>
              <li><a class="dropdown-item active" href="members.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                </a></li>
              <li><a class="dropdown-item" href="timeline.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                </a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="alert-triangle"></span>Errors</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="errors/404.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                    </a></li>
                  <li><a class="dropdown-item" href="errors/403.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                    </a></li>
                  <li><a class="dropdown-item" href="errors/500.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="lock"></span>Authentication</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Simple</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/simple/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/simple/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Split</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/split/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/split/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                      data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span
                          class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                            class="me-2 uil"></span>Card</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="authentication/card/sign-in.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/sign-up.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/sign-out.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/forgot-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/reset-password.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/lock-screen.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                        </a></li>
                      <li><a class="dropdown-item" href="authentication/card/2FA.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="layout"></span>Layouts</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/dark-mode.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/darknav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/navbar-top.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/combo-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../demo/dual-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                    </a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
            <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
              <div class="border-0 scrollbar" style="max-height: 60vh;">
                <div class="px-3 pt-4 pb-3 img-dropdown">
                  <div class="row gx-4 gy-5">
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Forms</h6>
                      </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a
                        class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a
                        class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a
                        class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a
                        class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link"
                        href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link"
                        href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link"
                        href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link"
                        href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link"
                        href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link"
                        href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link"
                        href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link"
                        href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link"
                        href="../modules/forms/validation.html">Validation</a><a class="dropdown-link"
                        href="../modules/forms/wizard.html">Wizard</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Icons</h6>
                      </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a
                        class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a
                        class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">ECharts</h6>
                      </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a
                        class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a
                        class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a
                        class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link"
                        href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link"
                        href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link"
                        href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link"
                        href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link"
                        href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link"
                        href="../modules/echarts/how-to-use.html">How to use</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Components</h6>
                      </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a
                        class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a
                        class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a
                        class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link"
                        href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link"
                        href="../modules/components/button.html">Buttons</a><a class="dropdown-link"
                        href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link"
                        href="../modules/components/card.html">Card</a><a class="dropdown-link"
                        href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link"
                        href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link"
                        href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link"
                        href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link"
                        href="../modules/components/list-group.html">List group</a><a class="dropdown-link"
                        href="../modules/components/modal.html">Modals</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link"
                        href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link"
                        href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link"
                        href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link"
                        href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link"
                        href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link"
                        href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link"
                        href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link"
                        href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link"
                        href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link"
                        href="../modules/components/toast.html">Toast</a><a class="dropdown-link"
                        href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link"
                        href="../modules/components/chat-widget.html">Chat widget</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Tables</h6>
                      </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a
                        class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a
                        class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                      <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                          style="stroke-width:2;"></span>
                        <h6 class="dropdown-item-title">Utilities</h6>
                      </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a
                        class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a
                        class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link"
                        href="../modules/utilities/display.html">Display</a><a class="dropdown-link"
                        href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link"
                        href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link"
                        href="../modules/utilities/float.html">Float</a><a class="dropdown-link"
                        href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link"
                        href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link"
                        href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link"
                        href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link"
                        href="../modules/utilities/position.html">Position</a><a class="dropdown-link"
                        href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link"
                        href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link"
                        href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link"
                        href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link"
                        href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link"
                        href="../modules/utilities/visibility.html">Visibility</a>
                    </div>
                  </div>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
              data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
              <li><a class="dropdown-item" href="../documentation/getting-started.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting
                    started</div>
                </a></li>
              <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="settings"></span>Customization</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                    </a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#"
                  data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="dropdown-item-wrapper"><span
                      class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"
                        data-feather="table"></span>Layouts doc</span></div>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                    </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="../documentation/gulp.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../documentation/design-file.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../changelog.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog
                  </div>
                </a></li>
              <li><a class="dropdown-item" href="../showcase.html">
                  <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                </a></li>
            </ul>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
          <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
              class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
              data-theme-control="phoenixTheme" value="dark" /><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span
                class="fs--1 fw-bold">Dark</span></label><label
              class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
              data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span
                class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span
                class="fs--1 fw-bold">Light</span></label></div>
        </li>
        <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span
              data-feather="search" style="height:12px;width:12px;"></span></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
            data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell"
              style="height:12px;width:12px;"></span></a>
          <div
            class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
            id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
            <div class="card position-relative border-0">
              <div class="card-header p-2">
                <div class="d-flex justify-content-between">
                  <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                    type="button">Mark all as read</button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="scrollbar-overlay" style="height: 27rem;">
                  <div class="border-300">
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jane Foster</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created
                              an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder"
                              src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Jessie Samson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                              your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-300">
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Kiera Anderson</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Herman Carter</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged
                              you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                              src="../assets/img/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs--1 text-black">Benjamin Button</h4>
                            <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked
                              your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                            <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="font-sans-serif d-none d-sm-block"><button
                            class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                            aria-expanded="false" data-bs-reference="parent"><span
                              class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as
                              unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer p-0 border-top border-0">
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                    href="notifications.html">Notification history</a></div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10"
              viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
              <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
              <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
            </svg></a>
          <div
            class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
            aria-labelledby="navbarDropdownNindeDots">
            <div class="card bg-white position-relative border-0">
              <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                <div class="row text-center align-items-center gx-0 gy-0">
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                      href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!"
            role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside"
            aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
          <div
            class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
            aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">
                    <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                  </div>
                  <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                </div>
                <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                    placeholder="Update your status" /></div>
              </div>
              <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="user"></span><span>Profile</span></a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                        data-feather="pie-chart"></span>Dashboard</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="lock"></span>Posts &amp; Activity</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="settings"></span>Settings &amp; Privacy </a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="help-circle"></span>Help Center</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="globe"></span>Language</a></li>
                </ul>
              </div>
              <div class="card-footer p-0 border-top">
                <ul class="nav d-flex flex-column my-3">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                        data-feather="user-plus"></span>Add another account</a></li>
                </ul>
                <hr />
                <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                      class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                    policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                    href="#!">Cookies</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="dualNav" style="display:none;">
      <div class="w-100">
        <div class="d-flex flex-between-center dual-nav-first-layer">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse"
              aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                  class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../index-2.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix"
                    width="27" />
                  <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                </div>
              </div>
            </a>
          </div>
          <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}'
            style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search"
                placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
              data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
            </div>
            <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="list pb-3">
                  <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched
                  </h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left"
                            data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left"
                            data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                      href="../apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                          src="../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz -
                            128GB Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center"
                      href="../apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png"
                          alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30
                            PM</span></p>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900"
                            data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900"
                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900"
                            data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900"
                            data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900"
                            data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="members.html">
                      <div class="avatar avatar-l status-online  me-2 text-900">
                        <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                        <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="members.html">
                      <div class="avatar avatar-l  me-2 text-900">
                        <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">John Smith</h6>
                        <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900"
                            data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900"
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
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input
                  class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                  data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                  class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                  data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                    data-feather="moon"></span></label><label
                  class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                  data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                    data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" style="min-width: 2.5rem" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell"
                  style="height:20px;width:20px;"></span></a>
              <div
                class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
                id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal"
                        type="button">Mark all as read</button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="scrollbar-overlay" style="height: 27rem;">
                      <div class="border-300">
                        <div
                          class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/40x40/30.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                    class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                    class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:41 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3">
                                <div class="avatar-name rounded-circle"><span>J</span></div>
                              </div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs--1 text-black">Jane Foster</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                    class='me-1 fs--2'>📅</span>Created an event.<span
                                    class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:20 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img
                                  class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp"
                                  alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs--1 text-black">Jessie Samson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                    class='me-1 fs--2'>👍</span>Liked your comment.<span
                                    class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">9:30 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-300">
                        <div
                          class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/40x40/57.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                    class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span
                                    class="ms-2 text-400 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">9:11 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/40x40/59.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs--1 text-black">Herman Carter</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                    class='me-1 fs--2'>👤</span>Tagged you in a comment.<span
                                    class="ms-2 text-400 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:58 PM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle"
                                  src="../assets/img/team/40x40/58.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs--1 text-black">Benjamin Button</h4>
                                <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
                                    class='me-1 fs--2'>👍</span>Liked your comment.<span
                                    class="ms-2 text-400 fw-bold fs--2"></span></p>
                                <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
                                    class="fw-bold">10:18 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="font-sans-serif d-none d-sm-block"><button
                                class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                  class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark
                                  as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-0">
                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
                        href="notifications.html">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16"
                  viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
              <div
                class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300"
                aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-white position-relative border-0">
                  <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                    <div class="row text-center align-items-center gx-0 gy-0">
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a
                          class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3"
                          href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                          <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
                </div>
              </a>
              <div
                class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
                      </div>
                      <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                    </div>
                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                        type="text" placeholder="Update your status" /></div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="user"></span><span>Profile</span></a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900"
                            data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="help-circle"></span>Help Center</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="globe"></span>Language</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                            data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span
                          class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                        policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                        href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                  class="uil fs-0 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index-2.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E
                      commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project
                      management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed
                    </div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                  class="uil fs-0 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span
                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                              class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span
                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                              class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat
                    </div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar
                    </div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                  class="uil fs-0 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter
                    </div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications
                    </div>
                  </a></li>
                <li><a class="dropdown-item active" href="members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="errors/500.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span
                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                              class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span
                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                              class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span
                            class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                              class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="authentication/card/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                  class="uil fs-0 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text"
                            style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form
                          control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input
                          group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a
                          class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a
                          class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a
                          class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a
                          class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a
                          class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a
                          class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a
                          class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a
                          class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a
                          class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a
                          class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a
                          class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a
                          class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid"
                            style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a
                          class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a
                          class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2"
                            style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a
                          class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a
                          class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick
                          charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a
                          class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a
                          class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a
                          class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a
                          class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a
                          class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a
                          class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package"
                            style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a
                          class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a
                          class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a
                          class="dropdown-link" href="../modules/components/badge.html">Badge</a><a
                          class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a
                          class="dropdown-link" href="../modules/components/button.html">Buttons</a><a
                          class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a
                          class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link"
                          href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link"
                          href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link"
                          href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link"
                          href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link"
                          href="../modules/components/list-group.html">List group</a><a class="dropdown-link"
                          href="../modules/components/modal.html">Modals</a><a class="dropdown-link"
                          href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link"
                          href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link"
                          href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link"
                          href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link"
                          href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link"
                          href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link"
                          href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link"
                          href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link"
                          href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link"
                          href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link"
                          href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link"
                          href="../modules/components/toast.html">Toast</a><a class="dropdown-link"
                          href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link"
                          href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns"
                            style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a
                          class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a
                          class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool"
                            style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a
                          class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a
                          class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a
                          class="dropdown-link" href="../modules/utilities/display.html">Display</a><a
                          class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link"
                          href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link"
                          href="../modules/utilities/float.html">Float</a><a class="dropdown-link"
                          href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link"
                          href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link"
                          href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link"
                          href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link"
                          href="../modules/utilities/position.html">Position</a><a class="dropdown-link"
                          href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link"
                          href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link"
                          href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link"
                          href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link"
                          href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link"
                          href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                  class="uil fs-0 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting
                      started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization"
                    href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span
                        class="uil fs-0 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span
                          class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp
                    </div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file
                    </div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog
                    </div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase
                    </div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
      data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
      <div class="modal-dialog">
        <div class="modal-content mt-15 rounded-pill">
          <div class="modal-body p-0">
            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                  class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search"
                  placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
              <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
                data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
              </div>
              <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar-overlay" style="max-height: 30rem;">
                  <div class="list pb-3">
                    <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched
                    </h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left"
                              data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left"
                              data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                        href="../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                            src="../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                          <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz -
                              128GB Storage</span></p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center"
                        href="../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png"
                            alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                          <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30
                              PM</span></p>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900"
                              data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900"
                              data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files</h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900"
                              data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900"
                              data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900"
                              data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="members.html">
                        <div class="avatar avatar-l status-online  me-2 text-900">
                          <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                          <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="members.html">
                        <div class="avatar avatar-l  me-2 text-900">
                          <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-1000 title">John Smith</h6>
                          <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Related Searches
                    </h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900"
                              data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900"
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
    <script>
      var navbarTopShape = window.config.config.phoenixNavbarTopShape;
      var navbarPosition = window.config.config.phoenixNavbarPosition;
      var body = document.querySelector('body');
      var navbarDefault = document.querySelector('#navbarDefault');
      var navbarTop = document.querySelector('#navbarTop');
      var topNavSlim = document.querySelector('#topNavSlim');
      var navbarTopSlim = document.querySelector('#navbarTopSlim');
      var navbarCombo = document.querySelector('#navbarCombo');
      var navbarComboSlim = document.querySelector('#navbarComboSlim');
      var dualNav = document.querySelector('#dualNav');

      var documentElement = document.documentElement;
      var navbarVertical = document.querySelector('.navbar-vertical');

      if (navbarPosition === 'dual-nav') {
        topNavSlim.remove();
        navbarTop.remove();
        navbarVertical.remove();
        navbarTopSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        navbarDefault.remove();
        dualNav.removeAttribute('style');
        documentElement.classList.add('dual-nav');
      } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
        navbarDefault.remove();
        navbarTop.remove();
        navbarTopSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        topNavSlim.style.display = 'block';
        navbarVertical.style.display = 'inline-block';
        body.classList.add('nav-slim');
      } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        navbarVertical.remove();
        navbarTop.remove();
        topNavSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        navbarTopSlim.removeAttribute('style');
        body.classList.add('nav-slim');
      } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
        navbarDefault.remove();
        //- navbarVertical.remove();
        navbarTop.remove();
        topNavSlim.remove();
        navbarCombo.remove();
        navbarTopSlim.remove();
        navbarComboSlim.removeAttribute('style');
        navbarVertical.removeAttribute('style');
        body.classList.add('nav-slim');
      } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        topNavSlim.remove();
        navbarVertical.remove();
        navbarTopSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        navbarTop.removeAttribute('style');
        documentElement.classList.add('navbar-horizontal');
      } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
        topNavSlim.remove();
        navbarTop.remove();
        navbarTopSlim.remove();
        navbarDefault.remove();
        navbarComboSlim.remove();
        navbarCombo.removeAttribute('style');
        navbarVertical.removeAttribute('style');
        documentElement.classList.add('navbar-combo')

      } else {
        topNavSlim.remove();
        navbarTop.remove();
        navbarTopSlim.remove();
        navbarCombo.remove();
        navbarComboSlim.remove();
        navbarDefault.removeAttribute('style');
        navbarVertical.removeAttribute('style');
      }

      var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
      var navbarTop = document.querySelector('.navbar-top');
      if (navbarTopStyle === 'darker') {
        navbarTop.classList.add('navbar-darker');
      }

      var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
      var navbarVertical = document.querySelector('.navbar-vertical');
      if (navbarVerticalStyle === 'darker') {
        navbarVertical.classList.add('navbar-darker');
      }
    </script>
    <div class="content">
      <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#!">Member</a></li>
          <li class="breadcrumb-item active">Member List</li>
        </ol>
      </nav>
      <h2 class="text-bold text-1100 mb-5">Members</h2>
      <div id="members"
        data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
        <div class="row align-items-center justify-content-between g-3 mb-4">
          <div class="col col-auto">
            <div class="search-box">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                  class="form-control search-input search" type="search" placeholder="Search members"
                  aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex align-items-center">
              <button class="btn btn-link text-900 me-4 px-0"><a href="{{route('member_register')}}">
                  <span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button><button
                class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add member</button>
            </div>

            </a>
          </div>
        </div>
        <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
          <div class="table-responsive scrollbar ms-n1 ps-1">
            <table id="members-table">
              <thead>
                <tr>
                  <th class="sort align-middle" scope="col" data-sort="bio_id" style="width:15%; min-width:87px;">Bio
                    ID</th>
                  <th class="sort align-middle" scope="col" data-sort="employee_id" style="width:15%; min-width:200px;">
                    Employee ID</th>
                  <th class="sort align-middle" scope="col" data-sort="user_name" style="width:15%; min-width:200px;">
                    User Name</th>
                  <th class="sort align-middle" scope="col" data-sort="personal_email"
                    style="width:15%; min-width:200px;">Personal Email</th>
                  <th class="sort align-middle" scope="col" data-sort="mobile_number"
                    style="width:20%; min-width:200px;">Mobile Number</th>
                  <th class="sort align-middle" scope="col" data-sort="date_of_joining"
                    style="width:19%; min-width:120px;">Date of Joining</th>
                  <th class="sort align-middle" scope="col" data-sort="action">Action</th>
                </tr>
              </thead>
              <tbody id="members-table-body">
                <!-- Member data will be inserted here dynamically -->
              </tbody>
            </table>
            <!-- edit model form -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Update Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" id="member-form" action="{{ url('/add-member') }}">
                      @csrf
                      <div class="form-row mb-4">
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="bio_id" name="bio_id" type="text" placeholder="Bio ID"
                              required>
                            <label for="bio_id">Bio ID</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="user_name" name="user_name" type="text"
                              placeholder="User Name" required>
                            <label for="user_name">User Name</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="password" name="password" type="password"
                              placeholder="Password" required>
                            <label for="password">Password</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-row mb-4">
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="personal_email" name="personal_email" type="email"
                              placeholder="Personal Email" required>
                            <label for="personal_email">Personal Email</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="official_email" name="official_email" type="email"
                              placeholder="Official Email" required>
                            <label for="official_email">Official Email</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="employee_id" name="employee_id" type="text"
                              placeholder="Employee ID" required>
                            <label for="employee_id">Employee ID</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-row mb-4">
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="experience" name="experience" type="text"
                              placeholder="Experience" required>
                            <label for="experience">Experience</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="linkedin" name="linkedin" type="text" placeholder="LinkedIn"
                              required>
                            <label for="linkedin">LinkedIn</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="portfolio" name="portfolio" type="text"
                              placeholder="Portfolio" required>
                            <label for="portfolio">Portfolio</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-row mb-4">
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="mobile_number" name="mobile_number" type="text"
                              placeholder="Mobile Number" required>
                            <label for="mobile_number">Mobile Number</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="tech_stack" name="tech_stack" type="text"
                              placeholder="Tech Stack" required>
                            <label for="tech_stack">Tech Stack</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="designation" name="designation" type="text"
                              placeholder="Designation" required>
                            <label for="designation">Designation</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-row mb-4">
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="date_of_joining" name="date_of_joining" type="date"
                              placeholder="Date of Joining" required>
                            <label for="date_of_joining">Date of Joining</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="team" name="team" type="text" placeholder="Team" required>
                            <label for="team">Team</label>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                          <div class="form-floating">
                            <input class="form-control" id="roles" name="roles" type="text" placeholder="Roles"
                              required>
                            <label for="team">Roles</label>
                          </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4"><i class="fas fa-paper-plane"></i>
                          Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of edit model form -->
            <script src="script.js"></script>
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"
              integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

            <script>
              $(document).ready(function () {
                // Setup CSRF token for AJAX requests
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                // Fetch and display the member list
                $.ajax({
                  type: "GET",
                  url: "/member-list",
                  dataType: "json",
                  success: function (response) {
                    console.log("AJAX response:", response);
                    var tableBody = $('#members-table-body');
                    tableBody.empty(); // Clear existing rows

                    if (response.members && response.members.length) {
                      response.members.forEach(function (member) {
                        var data = `<tr>
                        <td>${member.bio_id}</td>
                        <td>${member.employee_id}</td>
                        <td >${member.user_name}</td>
                        <td>${member.personal_email}</td>
                        <td>${member.mobile_number}</td>
                        <td>${member.date_of_joining}</td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                    <svg class="svg-inline--fa fa-ellipsis fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z"></path>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end py-2">
    <a class="accept-btn dropdown-item" href="#!" data-personal_email="${member.personal_email}" data-user_type="tl">Accept as TL</a>
    <a class="accept-btn dropdown-item" href="#!" data-personal_email="${member.personal_email}" data-user_type="member">Accept as Member</a>
    <a class="reject-btn dropdown-item" href="#!" data-personal_email="${member.personal_email}">Reject</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item text-danger editbtn" href="#!" data-bs-toggle="modal" data-bs-target="#editModal" data-id="${member.bio_id}">Edit</a>
</div>
                            </div>
                        </td>
                    </tr>`;
                        tableBody.append(data);
                      });
                    }
                  },
                  error: function (xhr, status, error) {
                    console.error("AJAX error:", xhr.responseText);
                  }
                });

                // Handle accept button click
                $(document).on('click', '.accept-btn', function (event) {
                  event.preventDefault();

                  let personalEmail = $(this).data('personal_email');
                  let userType = $(this).data('user_type');
                  let csrfToken = $('meta[name="csrf-token"]').attr('content');

                  $.ajax({
                    url: '/accept',
                    type: 'POST',
                    data: {
                      personal_email: personalEmail,
                      user_type: userType
                    },
                    headers: {
                      'X-CSRF-TOKEN': csrfToken
                    },
                    success: function (response) {
                      alert(response.message);
                      console.log(response);
                    },
                    error: function (xhr) {
                      let response = xhr.responseJSON;
                      alert(response.message || 'Error accepting the request');
                      console.log(xhr);
                    }
                  });
                });

                // Handle reject button click
                $(document).on('click', '.reject-btn', function (event) {
                  event.preventDefault();

                  let personalEmail = $(this).data('personal_email');

                  $.ajax({
                    url: '/reject',
                    type: 'POST',
                    data: {
                      personal_email: personalEmail
                    },
                    success: function (response) {
                      alert(response.message);
                      console.log(response);
                    },
                    error: function (xhr) {
                      let response = xhr.responseJSON;
                      alert(response.message || 'Error rejecting the request');
                      console.log(xhr);
                    }
                  });
                });

                // Handle edit button click
                $(document).on('click', '.editbtn', function (e) {
                  e.preventDefault();
                  var id = $(this).data('id'); // Retrieve the value of data-id attribute

                  // Perform AJAX request to fetch data for the given ID
                  $.ajax({
                    type: "GET",
                    url: "/get-member/" + id,
                    success: function (response) {
                      if (response.status == 200) {
                        // If data is successfully fetched, populate the edit form
                        var member = response.member;
                        $('#bio_id').val(member.bio_id);
                        $('#user_name').val(member.user_name);
                        $('#password').val(member.password);
                        $('#personal_email').val(member.personal_email);
                        $('#official_email').val(member.official_email);
                        $('#employee_id').val(member.employee_id);
                        $('#experience').val(member.experience);
                        $('#linkedin').val(member.linkedin);
                        $('#portfolio').val(member.portfolio);
                        $('#mobile_number').val(member.mobile_number);
                        $('#tech_stack').val(member.tech_stack);
                        $('#designation').val(member.designation);
                        $('#date_of_joining').val(member.date_of_joining);
                        $('#team').val(member.team);
                        $.ajax({
                          type: "GET",
                          url: "{{ route('get_roles') }}",
                          dataType: "json",
                          success: function (response) {
                            if (response.roles && response.roles.length) {
                              var rolesDropdown = $('#roles');
                              rolesDropdown.empty(); // Clear existing options
                              $.each(response.roles, function (index, role) {
                                rolesDropdown.append('<option value="' + role.id + '">' + role.name + '</option>');
                              });
                            }
                          },
                          error: function (xhr, status, error) {
                            console.error('Error fetching roles:', error);
                          }
                        });
                      } else {
                        console.log("Error: " + response.message); // Log error message
                      }
                    },
                    error: function (xhr, status, error) {
                      console.error("AJAX Request Error:", error); // Log AJAX error
                    }
                  });
                });

                // Handle form submission for updating member
                $('#member-form').on('submit', function (e) {
                  e.preventDefault(); // Prevent the default form submission

                  // Serialize the form data
                  var formData = $(this).serialize() + '&_token={{ csrf_token() }}';

                  // Send AJAX request to update member data
                  $.ajax({
                    type: "POST",
                    url: "/update-member/" + $('#bio_id').val(), // Use the bio_id as the member ID
                    data: formData,
                    success: function (response) {
                      if (response.status == 'success') {
                        console.log("Member data updated successfully!");
                        // Optionally, you can perform actions after successful update
                      } else {
                        console.log("Error: " + response.message);
                        // Optionally, handle errors or display error messages
                      }
                    },
                    error: function (xhr, status, error) {
                      console.error("AJAX Request Error:", error);
                      // Optionally, handle AJAX errors
                    }
                  });
                });
              });

            </script>


          </div>


          <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            <div class="col-auto d-flex">
              <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                  data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!"
                data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                  data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                  class="fas fa-chevron-left"></span></button>
              <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                  class="fas fa-chevron-right"></span></button>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br
                class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">v1.13.0</p>
          </div>
        </div>
      </footer>
    </div>
    <div class="support-chat-container">
      <div class="container-fluid support-chat">
        <div class="card bg-white">
          <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
            <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
                class="fa-solid fa-circle text-success fs--3"></span></h5>
            <div class="btn-reveal-trigger"><button
                class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button"
                id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                aria-expanded="false" data-bs-reference="parent"><span
                  class="fas fa-ellipsis-h text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                  class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in
                  chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report
                  to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
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
                  <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p><span
                    class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
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
                <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white"
                    src="../assets/img/team/30.webp" alt="" /></div>
                <h5 class="mt-2 mb-3">Eric</h5>
                <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within
                  24 hours.</p>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
            <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4"><input
                class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text"
                placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0"
                for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file"
                accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0"
                for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none"
                type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span
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
        </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span
            class="fas fa-times fs-0"> </span></button>
      </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
          class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
    </div>
    <div class="offcanvas-body scrollbar px-card" id="themeController">
      <div class="setting-panel-item mt-0">
        <h5 class="setting-panel-item-title">Color Scheme</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
              value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1"
              for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../assets/img/generic/default-light.png" alt="" /></span><span
                class="label-text">Light</span></label></div>
          <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
              value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1"
              for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="../assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">
                Dark</span></label></div>
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
          <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio"
              value="vertical" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../assets/img/generic/default-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png"
                  alt="" /></span><span class="label-text">Vertical</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio"
              value="horizontal" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none"
                  src="../assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">
                Horizontal</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio"
              value="combo" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../assets/img/generic/nav-combo-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none" src="../assets/img/generic/nav-combo-dark.png"
                  alt="" /></span><span class="label-text"> Combo</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio"
              value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionTopDouble"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="../assets/img/generic/dual-light.png" alt="" /><img class="img-fluid img-prototype d-light-none"
                  src="../assets/img/generic/dual-dark.png" alt="" /></span><span class="label-text"> Dual
                nav</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name"
              value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label
              class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img
                class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt="" /><img
                class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt="" /><span
                class="label-text d-dark-none"> Default</span><span
                class="label-text d-light-none">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
              value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label
              class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img
                class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/vertical-darker.png"
                alt="" /><img class="img-fluid img-prototype d-light-none"
                src="../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none">
                Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
              value="default" data-theme-control="phoenixNavbarTopShape" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-default-dark.png"
                  alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim"
              data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs--1"
              for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img
                  class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-slim.png"
                  alt="" /><img class="img-fluid img-prototype d-light-none mb-0"
                  src="../assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text">
                Slim</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio"
              value="default" data-theme-control="phoenixNavbarTopStyle" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../assets/img/generic/top-default.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-darker.png"
                  alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
              value="darker" data-theme-control="phoenixNavbarTopStyle" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="../assets/img/generic/navbar-top-style-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-lighter.png"
                  alt="" /></span><span class="label-text d-dark-none">Darker</span><span
                class="label-text d-light-none">Lighter</span></label></div>
        </div>
      </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary"
        href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase
        template</a>
    </div>

    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../template/vendors/popper/popper.min.js"></script>
    <script src="../template/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../template/vendors/anchorjs/anchor.min.js"></script>
    <script src="../template/vendors/is/is.min.js"></script>
    <script src="../template/vendors/fontawesome/all.min.js"></script>
    <script src="../template/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../template/vendors/list.js/list.min.js"></script>
    <script src="../template/vendors/feather-icons/feather.min.js"></script>
    <script src="../template/vendors/dayjs/dayjs.min.js"></script>
    <script src="../template/assets/js/phoenix.js"></script>
    <script src="../template/vendors/list.js/list.min.js"></script>

</body>

</html>
<!--
Downloaded from https://nullforums.net/resources/phoenix-admin-dashboard-webapp-template-html.6657/
2914167K3MLX7LFILQLTDIPN2TOWXFI5HGR7MU
-->