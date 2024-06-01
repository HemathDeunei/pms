<!DOCTYPE html>
<html lang="en">

<head>
    <title>PROJECT MANAGEMENT SYSTEM</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .slider_section,
        .about_section,
        .bg-light {
            display: none;
        }

        .ftco-section {
            overflow: hidden;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card-header {
            background-color: white;
            color: black;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-bottom: 0px;
        }

        .btn-primary {
            /* background-color: #007bff; */
            border-color: #007bff;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-group label {
            font-weight: bold;
        }

        body {
            overflow: hidden;
        }
    </style>
    @include('home.navbar')
    @include('home.css')
</head>

<body>
    <section class="ftco-section">
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <form id="developer-form" method="POST" action="{{ url('add-developer') }}"
                        class="row g-3 mb-6">
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid" type="text"
                                    placeholder="Project title" required>
                                <label for="floatingInputGrid">Reg no</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid1" type="text" placeholder="Name"
                                    required>
                                <label for="floatingInputGrid1">Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid2" type="email" placeholder="Email"
                                    required>
                                <label for="floatingInputGrid2">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid3" type="password"
                                    placeholder="Password" required>
                                <label for="floatingInputGrid3">Password</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid9" type="text"
                                    placeholder="Department" required>
                                <label for="floatingInputGrid9">Department</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid9" type="text"
                                    placeholder="Batch/Year" required>
                                <label for="floatingInputGrid9">Batch/Year</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid4" type="text"
                                    placeholder="Project Title" required>
                                <label for="floatingInputGrid4">Project Title</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingProjectOverview" placeholder="Leave a comment here"
                                style="height: 224px;"></textarea>
                            <label for="floatingProjectOverview">Project Description</label>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid6" type="text" placeholder="Mentor Name"
                                    required>
                                <label for="floatingInputGrid6">Mentor Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid7" type="text" placeholder="Mentor Number"
                                    required>
                                <label for="floatingInputGrid7">Mentor Number</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="form-floating">
                                <input class="form-control" id="floatingInputGrid8" type="text" placeholder="Student Number"
                                    required>
                                <label for="floatingInputGrid8">Student Number</label>
                            </div>
                        </div>
                        <!-- End of Floating form field -->
                        <div class="col-12 gy-6">
                            <div class="row g-3 justify-content-end">
                                <div class="col-auto"><button type="button" class="btn btn-phoenix-primary px-5">Cancel</button>
                                </div>
                                <div class="col-auto"><button type="submit" class="btn btn-primary px-5 px-sm-15">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript code for form submission using AJAX
    </script>
</body>

</html>