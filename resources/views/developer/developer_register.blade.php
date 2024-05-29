<!DOCTYPE html>
<html>

<head>
    <title>Developer Registration</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h2>Developer Registration</h2>

        <!-- Success and error message containers -->
        <div id="success-message" class="alert alert-success d-none"></div>
        <div id="error-message" class="alert alert-danger d-none"></div>

        <form id="developer-form" method="POST" action="{{url('add-developer')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="bio_id">Bio ID:</label>
                    <input type="text" class="form-control" id="bio_id" name="bio_id" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="user_name">User Name:</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="personal_email">Personal Email:</label>
                    <input type="email" class="form-control" id="personal_email" name="personal_email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="official_email">Official Email:</label>
                    <input type="email" class="form-control" id="official_email" name="official_email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="employee_id">Employee ID:</label>
                    <input type="text" class="form-control" id="employee_id" name="employee_id" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tech_stack">Tech Stack:</label>
                    <input type="text" class="form-control" id="tech_stack" name="tech_stack" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="experience">Experience:</label>
                    <input type="text" class="form-control" id="experience" name="experience" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="linkedin">LinkedIn:</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="portfolio">Portfolio:</label>
                    <input type="text" class="form-control" id="portfolio" name="portfolio" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile_number">Mobile Number:</label>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="designation">Designation:</label>
                    <input type="text" class="form-control" id="designation" name="designation" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
                    'designation': $('#designation').val(),
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
                            $('#error-message').addClass('d-none'); // Hide any previous error messages
                        } else {
                            $('#error-message').text(response.message).removeClass('d-none');
                        }
                    },
                    error: function (xhr, status, error) {
                        $('#error-message').text('An error occurred. Please try again.').removeClass('d-none');
                        console.error(xhr.responseText);
                    }
                });
            });
        });

    </script>
</body>

</html>