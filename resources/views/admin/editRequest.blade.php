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
        <div class="d-flex mb-5 align-items-center justify-content-between" >
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
            <a class=" nav-link collapsed" href="{{ url('/admin/aoLayout') }}">
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
            <a class="nav-link" href="{{ url('/admin/requestLayout') }}">
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
            <div class="col-md-12">
                <div class="pagetitle d-flex justify-content-between align-items-center">
                    <h1>Edit Request Student</h1>
                    <a class="nav-link collapsed" href="{{ url('/admin/requestLayout') }}">
                        <button type="button" class="btn btn-lg btn-dark" style="font-size: 18px; padding: 10px 20px;" data-toggle="modal" name="uploadbutton">
                            <i class="material-icons align-middle">&#xE5C4;</i> Back
                        </button>
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

                        <form method="POST" action="{{ route('updateStudent', ['INDEX_NO' => str_pad($student->INDEX_NO, 12, '0', STR_PAD_LEFT)]) }}" style="margin-top: 20px;" accept-charset="UTF-8">
                            @method('PUT')
                            @csrf
                                <label for="NAME">Name</label></br>
                                <input type="text" name="NAME" id="NAME" value="{{ $student->NAME }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="INDEX_NO">Student Index Number</label></br>
                                <input type="text" name="INDEX_NO" id="INDEX_NO" value="{{ $student->INDEX_NO }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="CID">CID</label></br>
                                <input type="text" name="CID" id="CID" value="{{ $student->CID }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="DOB">Date of Birth</label></br>
                                <input type="date" name="DOB" id="DOB" value="{{ $student->DOB }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="school">School</label></br>
                                <input type="text" name="SCHOOL" id="SCHOOL" value="{{ $student->SCHOOL }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="SUB1">SUB1</label></br>
                                <input type="text" name="SUB1" id="SUB1" value="{{ $student->SUB1 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="MKS1">MKS1</label></br>
                                <input type="text" name="MKS1" id="MKS1" value="{{ $student->MKS1 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="SUB2">SUB2</label></br>
                                <input type="text" name="SUB2" id="SUB2" value="{{ $student->SUB2 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="MKS2">MKS2</label></br>
                                <input type="text" name="MKS2" id="MKS2" value="{{ $student->MKS2 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="SUB3">SUB3</label></br>
                                <input type="text" name="SUB3" id="SUB3" value="{{ $student->SUB3 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="MKS3">MKS3</label></br>
                                <input type="text" name="MKS3" id="MKS3" value="{{ $student->MKS3 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="SUB4">SUB4</label></br>
                                <input type="text" name="SUB4" id="SUB4" value="{{ $student->SUB4 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="MKS4">MKS4</label></br>
                                <input type="text" name="MKS4" id="MKS4" value="{{ $student->MKS4 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="SUB5">SUB5</label></br>
                                <input type="text" name="SUB5" id="SUB5" value="{{ $student->SUB5 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="MKS5">MKS5</label></br>
                                <input type="text" name="MKS5" id="MKS5" value="{{ $student->MKS5 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="SUB6">SUB6</label></br>
                                <input type="text" name="SUB6" id="SUB6" value="{{ $student->SUB6 }}" style="font-size: 16px;" required class="form-control"></br>
                                <label for="MKS6">MKS6</label></br>
                                <input type="text" name="MKS6" id="MKS6" value="{{ $student->MKS6 }}" style="font-size: 16px;" required class="form-control"></br>

                                <label for="status">Status</label></br>
                                {{-- <div class="input-group">
                                    <select name="status" id="status" value="{{ $student->status }}" style="font-size: 16px;margin-bottom:20px;" class="form-select" required>
                                        <option>pending</option>
                                        <option>approved</option>
                                    </select>
                                </div> --}}
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="pending" value="pending" {{ $student->status === 'pending' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pending">Pending</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="approved" value="approved" {{ $student->status === 'approved' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="approved">Approved</label>
                                </div>


                                <label for="TOTAL">TOTAL</label></br>
                                <input type="text" name="TOTAL" id="TOTAL" value="{{ $student->TOTAL }}" style="font-size: 16px;" required class="form-control"></br>
                                <button type="submit" style="background-color: #23242A;color:white; font-size:16px; border-radius:4px;">Update</button>
                        </form>
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

</body>
</html>

