<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            font-size: 18px;
        }

        .slider_bg_box {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            color: #fff;
            text-align: center;
            font-weight: bold;
            font-size: 36px;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        .image {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .image img {
            width: 100%;
            height: 100%;
        }

        .about_section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .box {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
        }

        .box h2,
        .box h3 {
            color: #333;
        }

        .box p {
            color: #666;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
        h3{
            text-align: center;
        }
        h1{
            color: #000000;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="d-flex align-items-center">
            <a class="d-flex flex-center text-decoration-none" href="../../../index-2.html" style="margin-bottom:0px;margin-right: -130px;">
                <img src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='174' height='26' viewBox='0 0 174 26' fill='none'%3E%3Cpath d='M20.1369 26C22.8983 26 25.1842 23.7425 24.6732 21.0288C24.3528 19.3274 23.8679 17.6594 23.2235 16.0502C21.9602 12.8958 20.1087 10.0295 17.7745 7.61522C15.4403 5.2009 12.6692 3.28575 9.61949 1.97913C8.11383 1.33406 6.55481 0.843538 4.96489 0.512196C2.26154 -0.0511821 0 2.23858 0 5V21C0 23.7614 2.23858 26 5 26H20.1369Z' fill='%23615DFF'/%3E%3Cg style='mix-blend-mode:multiply'%3E%3Cpath d='M13.7013 26C10.9399 26 8.65395 23.7425 9.16502 21.0288C9.48544 19.3274 9.97031 17.6594 10.6147 16.0502C11.878 12.8958 13.7295 10.0295 16.0637 7.61522C18.3979 5.2009 21.169 3.28575 24.2187 1.97913C25.7244 1.33406 27.2834 0.843538 28.8733 0.512196C31.5767 -0.0511821 33.8382 2.23858 33.8382 5V21C33.8382 23.7614 31.5996 26 28.8382 26H13.7013Z' fill='%233DD9EB'/%3E%3C/g%3E%3C/svg%3E"
                    alt="SVG Image" style="margin-bottom:0px;">
            </a>
            <a class="navbar-brand" href="#">PMS</a>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('developer_register')}}">Developer</a>
                            <a class="dropdown-item" href="/register/teacher">Student</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="slider_section">
        <div class="slider_bg_box">
            <div class="image">
                <img src="{{ asset('images/slider.jpeg') }}" alt="">
                <div class="content">
                    <h1>WELCOME TO PROJECT MANAGEMENT SYSTEM</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about_section why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h3>ABOUT</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="detail-box">
                            <h2>About Us</h2>
                            <p>Our Project Management System(PMS) is a easy-to-use tool designed to help teams plan,
                                and track their projects efficiently and it is built to be flexible. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="detail-box">
                            <h3>Our Mission</h3>
                            <p>Our mission is to empower teams with intuitive and robust project management tools that
                                streamline workflows, enhance collaboration, and drive project success. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="detail-box">
                            <h3>Our Vision</h3>
                            <p>Our vision is to transform project management from a complex challenge into a seamless,
                                integrated process that propels organizational success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <footer class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="information_f">
                    <p>COPYRIGHTS@dhatchumah</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>