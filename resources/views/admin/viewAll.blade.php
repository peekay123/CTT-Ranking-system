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
        <a class="nav-link" href="{{ url('/admin/viewAll') }}">
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
        <a class=" nav-link collapsed" href="{{ url('/admin/aoLayout') }}">
          <i class="bx bx-user-pin"></i>
          <span>Admission Officer</span>
        </a>
      </li>

    <li class="nav-item">
        <a class="nav-link  collapsed" href="{{ url('/admin/studentLayout') }}">
            <i class="bx bx-trophy"></i>
            <span>Students</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/admin/requestLayout') }}">
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
            <div class="home-content">
                <div class="container">
                    <div class="pagetitle d-flex justify-content-between align-items-center">
                        <h1>All Students</h1>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('deleteAllStudent') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete all student data?')" class="btn btn-lg btn-dark" style="font-size: 14px; padding: 10px 20px; ">Delete Students</button>
                        </form>
                    </div>

                    <div class="search-bar d-flex justify-content-between align-items-center mb-3">
                        <form class="search-form d-flex align-items-center flex-grow-1" style="font-size: 18px; border-radius: 4px;" method="GET" action="{{ route('searchSocByIndex') }}">
                            <div class="input-group">
                                <input type="text" name="query" placeholder="Search" title="Enter INDEX_NO" class="form-control" style="font-size: 18px">
                                <div class="input-group-append">
                                    <button type="submit" title="Search" class="btn btn-dark">
                                        <i class="bi bi-search" style="font-size: 18px; line-height: 1;"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="sticky-pagination ml-2">
                            <a href="{{ route('downloadAll') }}" class="btn btn-success btn-sm" title="Download Data" style="font-size: 18px; padding: 5px 15px;">
                                <i class="fa fa-download" aria-hidden="true"></i> Download
                            </a>
                        </div>
                    </div>

                    {{-- <div class="home-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <br/>
                                        <div class="table-responsive">
                                            @if($students->isNotEmpty())
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Student Index No.</th>
                                                            <th>Name</th>
                                                            <th>CID Number</th>
                                                            <th>School</th>
                                                            <th>ELIGIBILITY</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($students as $student)
                                                            <tr>
                                                                <td>{{ str_pad($student->INDEX_NO, 12, '0', STR_PAD_LEFT) }}</td>
                                                                <td>{{ $student->NAME }}</td>
                                                                <td>{{ $student->CID }}</td>
                                                                <td>{{ $student->SCHOOL }}</td>
                                                                <td>{{ $student->ELIGIBILITY }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <p>No students found.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="home-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <br/>
                                        <div class="table-responsive">
                                            @if($students->isNotEmpty())
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Student Index No.</th>
                                                            <th>Name</th>
                                                            <th>CID Number</th>
                                                            <th>School</th>
                                                            <th>ELIGIBILITY</th>
                                                          
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $randomStudents = $students->shuffle()->take(2000);
                                                        @endphp
                                                        @foreach($randomStudents as $student)
                                                            <tr>
                                                                <td>{{ str_pad($student->INDEX_NO, 12, '0', STR_PAD_LEFT) }}</td>
                                                                <td>{{ $student->NAME }}</td>
                                                                <td>{{ $student->CID }}</td>
                                                                <td>{{ $student->SCHOOL }}</td>
                                                                <td>{{ $student->ELIGIBILITY }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <p>No students found.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </main>

    <script>
        $(document).ready(function() {
            $('#downloadButton').on('click', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route("downloadSoc") }}',
                    method: 'GET',
                    success: function(data) {
                        var blob = new Blob([data], { type: 'text/csv' });
                        var link = document.createElement('a');
                        link.href = window.URL.createObjectURL(blob);
                        link.download = 'students.csv';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    },
                    error: function(error) {
                        console.error('Download failed:', error);
                    }
                });
            });
        });
    </script>

    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
