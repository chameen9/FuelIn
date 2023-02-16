<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FuelIn | Fuel Station</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/Assets/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/Assets/quill/quill.snow.css" rel="stylesheet">
  <link href="/Assets/quill/quill.bubble.css" rel="stylesheet">
  <link href="/Assets/remixicon/remixicon.css" rel="stylesheet">
  <link href="/Assets/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, 0.5);
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/head_office_dashboard" class="logo d-flex align-items-center" style="text-decoration: none;">
        &nbsp;
        <img src="{{URL::asset('/images/Logo.png')}}" alt="Logo">
        <span class="d-none d-lg-block">  FuelIn</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">1</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">1</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{URL::asset('/images/messages-1.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{URL::asset('/images/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$LastName}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{$FirstName}} {{$LastName}}</h6>
              <h7>{{$email}}</h7>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('/profile')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('/logout_admin')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/head_office_dashboard">
            <i class="bi bi-grid"></i></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li><br></li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/vehicles">
            <i class="bi bi-truck"></i>
            <span>Vehicle</span>
        </a>
      </li><!-- End vehicle Nav -->
      <li><br></li>
      <li class="nav-item">
        <a class="nav-link" href="/fuelstations">
            <i class="bi bi-fuel-pump"></i>
            <span>Fuel Station</span>
        </a>
      </li><!-- End fuelstations Nav -->
      <li><br></li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/drivers">
            <i class="bi bi-person-workspace"></i>
            <span>Drivers</span>
        </a>
      </li><!-- End Driver Nav -->
      <li><br></li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/head_office_dashboard/fuel_quotas">
            <i class="bi bi-card-checklist"></i>
            <span>Manage Fuel Quota</span>
        </a>
      </li><!-- End Fuel quota management Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Fuel Station</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/head_office_dashboard"></a>Home</li>
            <li class="breadcrumb-item active">Fuel Station</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card border-white" style="padding: 20px;">
                    <h3 class="card-title">Fuel Stations<span> </span></h3>
                    <hr>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aaa">
                            Add new Fuel Station
                         </button>
                      
                         <div class="table-responsive" style="margin:8px">
                            <table class="table table-striped table-hover">
                               <thead class="thead-secondary">
                                  <tr>
                                     <th>Station ID</th>
                                     <th>Name</th>
                                     <th>Location</th>
                                     <th>Scheduled Delivery Date</th>
                                     <th>Scheduled Delivery Time</th>
                                     <th>Population</th>
                                     <th>Action</th>
                                  </tr>
                               </thead>
                               <tbody>
                                  @foreach ($fuelstations as $fuelstation)
                                  <tr>
                                     <td>{{ $fuelstation->Fuel_Station_ID }}</td>
                                     <td>{{ $fuelstation->Fuel_Station_Name }}</td>
                                     <td>{{ $fuelstation->Fuel_Station_Location	 }}</td>
                                     @if ($fuelstation->Scheduled_Delivery_Date == null)
                                         <td><span class="badge badge-pill badge-info">Not Set</span></td>
                                     @else
                                         <td>{{ $fuelstation->Scheduled_Delivery_Date }}</td>
                                     @endif
                                     @if ($fuelstation->Scheduled_Delivery_Time == null)
                                         <td><span class="badge badge-pill badge-info">Not Set</span></td>
                                     @else
                                         <td>{{ $fuelstation->Scheduled_Delivery_Time }}</td>
                                     @endif
                                     <td>{{ $fuelstation->Population_density	 }}</td>
                                     <td>
                                      <div class="btn-group" role="group">
                                        <a type="button" href="{{url('/station/'.$fuelstation->Fuel_Station_ID.'/viewupdate')}}" class="btn btn-success btn-sm" title="Update"><i class="bi bi-arrow-repeat"></i></a>
                                        <a type="button" href="{{url('/station/delete/'.$fuelstation->Fuel_Station_ID.'')}}" class="btn btn-danger btn-sm" title="Delete"><i class="bi bi-trash"></i></a>
                                      </div>
                                     </td>
                                  </tr>
                                  @endforeach
                               </tbody>
                            </table>
                         </div>
                    </div>
                </div>
            </div>
        
        </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>FuelIn</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->


  <!-- Add new Modal -->
    <div class="modal fade" id="aaa" tabindex="-1" role="dialog" aria-labelledby="fuelstationregmodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fuelstationregmodalTitle">Add new Fuel Station</h5>
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('fuelstations.addnew')}}" method="post">
                {{csrf_field()}}
                    <label>Station Name</label>
                    <input type="text" name="Fuel_Station_Name" class="form-control" required>
                    <br>
                    <label>Location</label>
                    <input type="text" name="Fuel_Station_Location" class="form-control" required>
                    <br>
                    <label>Population Density</label>
                    <input type="number" name="Population_density" class="form-control" required>
                    <br>
                    <div class="row">
                      <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                      <div class="d-grid gap-2 col-8 mx-auto">
                        <button type="submit" class="btn btn-primary">Add</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>

    <!--Update Fuel station modal-->
    @if (Session::get('uptodatestation'))
      <input type="hidden" name="hidden" value="{{$fuelstation = Session::get('uptodatestation')}}">
      <div class="modal fade" id="viewdriver" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="successModalLabel">Updadte Fuel Station {{$fuelstation->Fuel_Station_ID}}</h5>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('fuelstations.update')}}" method="post">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-6">
                          <label>Station ID</label>
                          <input type="number" name="Fuel_Station_ID" class="form-control" required min="1" value="{{ $fuelstation->Fuel_Station_ID }}" readonly>
                        </div>
                        <div class="col-6">
                          <label>Station Name</label>
                          <input type="text" name="Fuel_Station_Name" class="form-control" required value="{{ $fuelstation->Fuel_Station_Name }}">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-6">
                          <label>Location</label>
                          <input type="text" name="Fuel_Station_Location" class="form-control" required value="{{ $fuelstation->Fuel_Station_Location	 }}">
                        </div>
                        <div class="col-6">
                          <label>Population Density</label>
                          <input type="number" name="Population_density" class="form-control" min="1" required value="{{ $fuelstation->Population_density	 }}">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-6">
                          <label>Scheduled Delivery Date</label>
                          <input type="date" name="Scheduled_Delivery_Date" class="form-control" required value="{{ $fuelstation->Scheduled_Delivery_Date }}">
                        </div>
                        <div class="col-6">
                          <label>Scheduled Delivery Time</label>
                          <input type="time" name="Scheduled_Delivery_Time" class="form-control" required value="{{ $fuelstation->Scheduled_Delivery_Time }}">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-12">
                          <div class="d-grid gap-2 col-12 mx-auto">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>
          $(document).ready(function() {
            $('#viewdriver').modal('show');
          });
      </script> 
    @endif

    @if ($message = Session::get('success'))
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Success</h5>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
              $('#successModal').modal('show');
              setTimeout(function() {
                $('#successModal').modal('hide');
              }, 2000);
            });
        </script> 
    @endif

    @if ($msg = Session::get('error'))
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger">
                            {{ $msg }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
              $('#errorModal').modal('show');
              setTimeout(function() {
                $('#errorModal').modal('hide');
              }, 2000);
            });
        </script>          
    @endif

    @if (count($errors)>0)
        <div class="modal fade" id="valModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="errorModalLabel">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                <a href="#"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a></button>
                            @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
              $('#valModal').modal('show');
              setTimeout(function() {
                $('#valModal').modal('hide');
              }, 5000);
            });
        </script> 
    @endif 
    <!-- Latest compiled JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Assets/apexcharts/apexcharts.min.js"></script>
  <script src="Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assets/chart.js/chart.umd.js"></script>
  <script src="Assets/echarts/echarts.min.js"></script>
  <script src="Assets/quill/quill.min.js"></script>
  <script src="Assets/simple-datatables/simple-datatables.js"></script>
  <script src="Assets/tinymce/tinymce.min.js"></script>
  <script src="Assets/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>