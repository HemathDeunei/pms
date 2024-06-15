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
    @if($batchStatus)
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <form id="developer-form" class="row g-3 mb-6" method="POST" action="{{ route('add_student') }}">
                            @csrf
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="regno" type="text" name="regno" placeholder="Register No" required>
                                    <label for="regno">Register No</label>
                                </div>
                                <div id="regno-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" name="name" placeholder="Name" required>
                                    <label for="name">Name</label>
                                </div>
                                <div id="name-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Email" required>
                                    <label for="email">Email</label>
                                </div>
                                <div id="email-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div id="password-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="department" type="text" name="department" placeholder="Department" required>
                                    <label for="department">Department</label>
                                </div>
                                <div id="department-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="batch_year" type="text" name="batch_year" placeholder="Batch/Year" required>
                                    <label for="batch_year">Batch/Year</label>
                                </div>
                                <div id="batch_year-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="mentor_name" type="text" name="mentor_name" placeholder="Mentor Name" required>
                                    <label for="mentor_name">Mentor Name</label>
                                </div>
                                <div id="mentor_name-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="mentor_number" type="text" name="mentor_number" placeholder="Mentor Number" required>
                                    <label for="mentor_number">Mentor Number</label>
                                </div>
                                <div id="mentor_number-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" id="student_mobile" type="text" name="student_mobile" placeholder="Student Mobile" required>
                                    <label for="student_mobile">Student Mobile</label>
                                </div>
                                <div id="student_mobile-error" class="error"></div> <!-- Error placeholder -->
                            </div>
                            
                            <!-- Submit button -->
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
            </div>
        </section>
    @else
        <div class="container">
            <p class="text-center mt-5">The registration form is not available at the moment.</p>
        </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#developer-form').on('submit', function (e) {
                e.preventDefault();

                var data = {
                    '_token': $('meta[name="csrf-token"]').attr('content'), // Retrieve CSRF token from meta tag
                    'regno': $('#regno').val(),
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                    'mentor_name': $('#mentor_name').val(),
                    'mentor_number': $('#mentor_number').val(),
                    'student_mobile': $('#student_mobile').val(),
                    'batch_year': $('#batch_year').val(),
                    'department': $('#department').val() // Include department value
                };

                $.ajax({
                    type: "POST",
                    url: "{{ route('add_student') }}",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        if (response.status === 200) {
                            alert('Student added successfully');
                            $('#developer-form')[0].reset(); // Reset the form
                            location.reload(); // Reload the page
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('An error occurred. Please try again.');
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>
