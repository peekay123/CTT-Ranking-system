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

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
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
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo"  class="logo">
            </a>
        </div>

        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('upload') }}">
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
                <a class="nav-link" href="{{ route('aoLayout') }}">
                    <i class="bx bx-user-pin"></i>
                    <span>Admission Officer</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('studentLayout') }}">
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
        <div class="pagetitle d-flex justify-content-between align-items-center">
            <h1>Show individual student</h1>
            <a class="nav-link collapsed d-inline-block" href="{{ route('creteriaLayout') }}">
              <button type="button" class="btn btn-lg btn-dark" style="font-size: 18px; padding: 10px 20px;">
                  <span class="align-middle">Back</span>
                  <i class="material-icons align-middle">&#xE5C4;</i>
              </button>
          </a>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="home-content">
                <div class="row">
                    <div class="col-md-4">
                        @if($creteria)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Title: {{ $creteria->title }}</h5>
                                <div>
                                    @if($creteria->image)
                                        <img src="{{ asset('/storage/images/' . $creteria->image) }}" alt="{{ $creteria->title }}" style="width: 200px; height: 200px;">
                                     @else
                                        No Image
                                    @endif
                                </div>
                                <p class="card-text"> {{ $creteria->image }}</p>
                                <p class="card-text">Description: {{ $creteria->description }}</p>
                            </div>
                        </div>
                        @else
                        <p>No creteria found with the specified id.</p>
                    @endif
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="copyright">
        &copy; Copyright <strong><span>CTT Ranking System</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">4th Year Students</a>
        </div>
    </footer><!-- End Footer -->

      <!-- Vendor JS Files -->
      <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
      <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
      <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>

