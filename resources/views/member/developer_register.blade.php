<!DOCTYPE html>
<html>

<head>
    <title>Developer Registration</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .form-control {
            border-radius: 0.25rem;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }
    </style>
    @include('home.css')
</head>

<body>
@include('home.navbar')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h3>MEMBER REGISTRATION</h3>
            </div>
            <div class="card-body">
                <form id="developer-form" method="POST" action="{{ url('add-developer') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="bio_id">Bio ID:</label>
                            <input type="text" class="form-control" id="bio_id" name="bio_id" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="user_name">User Name:</label>
                            <input type="text" class="form-control" id="user_name" name="user_name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="personal_email">Personal Email:</label>
                            <input type="email" class="form-control" id="personal_email" name="personal_email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="official_email">Official Email:</label>
                            <input type="email" class="form-control" id="official_email" name="official_email" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="employee_id">Employee ID:</label>
                            <input type="text" class="form-control" id="employee_id" name="employee_id" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tech_stack">Tech Stack:</label>
                            <input type="text" class="form-control" id="tech_stack" name="tech_stack" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="experience">Experience:</label>
                            <input type="text" class="form-control" id="experience" name="experience" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="linkedin">LinkedIn:</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="portfolio">Portfolio:</label>
                            <input type="text" class="form-control" id="portfolio" name="portfolio" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="mobile_number">Mobile Number:</label>
                            <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="designation">Designation:</label>
                            <input type="text" class="form-control" id="designation" name="designation" required>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4"><i class="fas fa-paper-plane"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (optional) and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- AJAX script -->
    <script>
        $(document).ready(function () {
            $('#developer-form').on('submit', function (e) {
                e.preventDefault();

                var data = {
                    '_token': '{{ csrf_token() }}',
                    'bio_id': $('#bio_id').val(),
                    'user_name': $('#user_name').val(),
                    'password': $('#password').val(),
                    'personal_email': $('#personal_email').val(),
                    'official_email': $('#official_email').val(),
                    'employee_id': $('#employee_id').val(),
                    'tech_stack': $('#tech_stack').val(),
                    'experience': $('#experience').val(),
                    'linkedin': $('#linkedin').val(),
                    'portfolio': $('#portfolio').val(),
                    'mobile_number': $('#mobile_number').val(),
                    'designation': $('#designation').val()
                };

                $.ajax({
                    type: "POST",
                    url: "{{ url('/add-developer') }}",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        if (response.status === 200) {
                            alert('Developer added successfully');
                            $('#developer-form')[0].reset(); // Reset the form
                        } else {
                            alert(response.message);
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
