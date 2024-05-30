<nav class="navbar navbar-expand-lg container-small px-3 px-lg-7 px-xxl-3"><a
                    class="navbar-brand flex-1 flex-lg-grow-0" href="../../template/index-2.html">
                    <div class="d-flex align-items-center"><img src="../../template/assets/img/icons/logo.png"
                            alt="phoenix" width="27" />
                        <p class="logo-text ms-2">phoenix</p>
                    </div>
                </a>
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
                            <li><a class="dropdown-item" href="{{route('developer_register')}}">MEMBER</a></li>
                            <li><a class="dropdown-item" href="{{route('student')}}">STUDENT</a></li>
                        </ul>

                    </div>
                </div>
            </nav>