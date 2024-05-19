<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="UTF-8">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>CTT Ranking System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('assets/img/logo.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-datatables/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <div class="search-bar">
    </div>

    <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
        </li>
    </ul>
    </nav>
    </header>

    <aside id="sidebar" class="sidebar">
        <div class="d-flex mb-5 align-items-center justify-content-between">
            <a href="{{ url('/admin/dashboard') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo"  class="logo " >
            </a>
        </div>

        <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/upload') }}">
              <i class="bx bx-upload"></i>
              <span>Upload</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/viewAll') }}">
            <i class="bi bi-eye"></i>
              <span>View Students</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/socLayout') }}">
            <i class="bx bx-trophy"></i>
            <span>Ranking</span>
            </a>
        </li>

          <li class="nav-item">
            <a class=" nav-link " href="{{ url('/admin/aoLayout') }}">
              <i class="bx bx-user-pin"></i>
              <span>Admission Officer</span>
            </a>
          </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/studentLayout') }}">
            <i class="bi bi-person"></i>
            <span>Students</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/studentLayout') }}">
                <i class="bi bi-chat-dots"></i>
                <span>Request</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/feedback') }}">
                <i class="bi bi-envelope"></i>
                <span>Feedback</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/dateLayout') }}">
                <i class="bi bi-calendar"></i>
                <span>Apply Date</span>
            </a>
        </li>

        <hr class="custom-line">

        <li class="log_out">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#"  class="nav-link collapsed" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
            </form>
        </li>
        </ul>

        </aside>

    <main id="main" class="main">
        <section class="section dashboard">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8" style="top: 80px">
                        <div class="pagetitle d-flex justify-content-between align-items-center">
                            <h1>Edit Admission Officers</h1>
                            <a class="nav-link collapsed" href="{{ url('/admin/aoLayout') }}">
                            <button type="button" class="btn btn-lg btn-dark" style="font-size: 18px; padding: 10px 20px;" data-toggle="modal" name="uploadbutton"><i class="material-icons align-middle">&#xE5C4;</i>Back</button>
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                                @endif

                                @if(session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('updateAdmissionOfficer', ['cid' => $user->cid]) }}" accept-charset="UTF-8">
                                    @method('PUT')
                                    @csrf
                                    <label for="name">Name</label></br>
                                    <input type="text" name="name" id="name" value="{{ $user->name }}" style="font-size: 16px;" required class="form-control"></br>
                                    <label for="email">Email</label></br>
                                    <input type="email" name="email" id="email" value="{{ $user->email }}" style="font-size: 16px;" required class="form-control"></br>
                                    <label for="phone">Phone</label></br>
                                    <input type="text" phone="phone" id="phone" value="{{ $user->phone }}" style="font-size: 16px;" required class="form-control"></br>

                                    <button type="submit" style="background-color: #23242A;color:white; font-size:16px; border-radius:4px;">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- <script>
        function togglePassword(passwordFieldId) {
            var passwordField = document.getElementById(passwordFieldId);
            var eyeIcon = passwordField.nextElementSibling.querySelector('i');

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.className = "fas fa-eye";
            } else {
                passwordField.type = "password";
                eyeIcon.className = "fas fa-eye-slash";
            }
        }

        function validatePasswords() {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('password_confirmation').value;
            var errorElement = document.getElementById('password-match-error');

            if (password !== confirmPassword) {
                errorElement.style.display = 'block';
                return false;
            } else {
                errorElement.style.display = 'none';
                document.forms[0].submit();
                return true;
            }
        }
    </script> --}}
</body>
</html>

{{-- <label for="password">New Password</label><br>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" value="{{ old('password') }}" style="font-size: 16px;" class="form-control">
                                        <span class="input-group-text toggle-password" onclick="togglePassword('password')">
                                            <i class="fas fa-eye-slash"></i>
                                        </span>
                                    </div>

                                    <label for="password_confirmation">Confirm Password</label><br>
                                    <div class="input-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" style="font-size: 16px;" class="form-control">
                                        <span class="input-group-text toggle-password" onclick="togglePassword('password_confirmation')">
                                            <i class="fas fa-eye-slash"></i>
                                        </span>
                                    </div> --}}

                                    {{-- <button type="submit" onclick="return validatePasswords()" style="background-color: #23242A;color:white; font-size:16px; border-radius:4px;margin-top: 20px">Update</button>
                                    <p id="password-match-error" style="color: red; display: none;">New Password and Confirm Password must match!</p> --}}
