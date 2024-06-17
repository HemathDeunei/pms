<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
        <div class="container-fluid">
            <!-- Navbar logo and toggle button -->
            <div class="navbar-logo">
                <button class="btn navbar-toggler navbar-toggler-hamburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggle-icon"><span class="toggle-line"></span></span>
                </button>
                <a class="navbar-brand me-1 me-sm-3" href="">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                            <a class="d-flex flex-center text-decoration-none" href="">
                            <img style="    margin-right: -140px;" src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='174' height='26' viewBox='0 0 174 26' fill='none'%3E%3Cpath d='M20.1369 26C22.8983 26 25.1842 23.7425 24.6732 21.0288C24.3528 19.3274 23.8679 17.6594 23.2235 16.0502C21.9602 12.8958 20.1087 10.0295 17.7745 7.61522C15.4403 5.2009 12.6692 3.28575 9.61949 1.97913C8.11383 1.33406 6.55481 0.843538 4.96489 0.512196C2.26154 -0.0511821 0 2.23858 0 5V21C0 23.7614 2.23858 26 5 26H20.1369Z' fill='%23615DFF'/%3E%3Cg style='mix-blend-mode:multiply'%3E%3Cpath d='M13.7013 26C10.9399 26 8.65395 23.7425 9.16502 21.0288C9.48544 19.3274 9.97031 17.6594 10.6147 16.0502C11.878 12.8958 13.7295 10.0295 16.0637 7.61522C18.3979 5.2009 21.169 3.28575 24.2187 1.97913C25.7244 1.33406 27.2834 0.843538 28.8733 0.512196C31.5767 -0.0511821 33.8382 2.23858 33.8382 5V21C33.8382 23.7614 31.5996 26 28.8382 26H13.7013Z' fill='%233DD9EB'/%3E%3C/g%3E%3C/svg%3E"
                            alt="SVG Image">                            </a>
                            <a class="logo-text ms-2 d-none d-sm-block" href="#">ProTeam</a>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Navbar links and user dropdown -->
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-l">
                        <img class="rounded-circle" src="{{ asset(Auth::user()->image) }}" alt="Profile Image">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
                        aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                            <div class="card-body p-0">
                                <div class="text-center pt-4 pb-3">
                                    <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{ asset(Auth::user()->image) }}" alt="Profile Image">

                                    </div>
                                    <h6 class="mt-2 text-black">{{ Auth::user()->name }}</h6>
                                    <p class="text-secondary">{{ Auth::user()->email }}</p>
                                </div>
                                <div class="mb-3 mx-3">
                                    <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                        <div class="mb-3">
                                            <label for="profileImage" class="form-label">Choose New Image</label>
                                            <input type="file" class="form-control-file" id="profileImage" name="profile_image">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Update Image</button>
                                    </form>
                                </div>
                                <div class="mb-3 mx-3">
                                    <input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                                        placeholder="Update your status">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <!-- Add any additional form fields if needed -->

                        <!-- Check if the user is authenticated and display the user type -->
                        @if (Auth::check())
                            <button type="submit" class="btn btn-primary">
                                LOGOUT ({{ Auth::user()->usertype }})
                            </button>
                        @else
                            <!-- Optionally, you can handle the case when no user is logged in -->
                            <button type="submit" class="btn btn-primary" disabled>
                                LOGOUT
                            </button>
                        @endif
                    </form>
                </li>
            </ul>
        </div>
    </nav>