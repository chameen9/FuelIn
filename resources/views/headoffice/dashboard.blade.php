<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FuelIn | Dashboard</title>
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
        <a class="nav-link" href="/head_office_dashboard">
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
        <a class="nav-link collapsed" href="/fuelstations">
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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/head_office_dashboard"></a>Home</li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card" style="padding: 20px;">
                    <h3 class="card-title">Fuel Orders<span> </span></h3>
                    <hr>
                    <div class="card-body">
                        <div class="table-responsive" style="margin:8px">
                          <table class="table table-striped table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Fuel Station</th>
                                      <th>Fuel Type</th>
                                      <th>Liters</th>
                                      <th>Created At</th>
                                      <th>Status</th>
                                      <th>Approved Date</th>
                                      <th>Approved By</th>
                                      <th style="text-align: center;">Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($orders as $order)
                                  <tr>
                                      <th>{{ $order->order_id }}</th>
                                      <td>{{ $order->Fuel_Station_ID }}</td>
                                      <td>{{ $order->Fuel_Type_ID }}</td>
                                      <td>{{ $order->liters_quantity }}</td>
                                      <td>{{ $order->created_at }}</td>
                                      <td>
                                        @if($order->Approval_Status == 'pending')
                                          <span class="badge badge-primary">{{ $order->Approval_Status }}</span>
                                        @elseif($order->Approval_Status == 'approved')
                                          <span class="badge badge-success">{{ $order->Approval_Status }}</span>
                                        @else
                                          <span class="badge badge-danger">{{ $order->Approval_Status }}</span>
                                        @endif
                                        
                                      </td>
                                      <td>{{ $order->Approval_Date }}</td>
                                      <td>{{ $order->Approval_By }}</td>
                                      <td style="text-align: center;">
                                        @if($order->Approval_Status == 'pending')
                                          <a href="{{ route('head_office_orders.edit', $order->order_id) }}" class="btn btn-sm btn-primary">Approve</a>
                                          <a href="{{ route('head_office_orders.decedit', $order->order_id) }}" class="btn btn-sm btn-warning">Decline</a>
                                        @else
                                          <form action="{{ route('head_office_orders.destroy', $order->order_id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                          </form>
                                        @endif
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

  <!--Confirm modal-->
  @if (Session::get('order'))
  <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-body">
                <h3 style="text-align: center;">Confirm</h3>
                <hr>
                <form method="POST" action="{{ route('head_office_orders.update', ['id' => $order->order_id]) }}">
                  @csrf
                  <div class="container">
                    <div class="row">
                      <div class="col-6">
                        <label for="">Order ID:</label>
                        <input type="text" class="form-control" name="order_id" id="order_id" value="{{$order->order_id}}" readonly>
                      </div>
                      <div class="col-6">
                        <label for="">Filling Station ID:</label>
                        <input type="text" class="form-control" name="Fuel_Station_ID" id="Fuel_Station_ID" value="{{$order->Fuel_Station_ID}}" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label for="">Liters:</label>
                        <input type="text" class="form-control" name="liters_quantity" id="liters_quantity" value="{{$order->liters_quantity}}" readonly>
                      </div>
                      <div class="col-6">
                        <label for="">Fuel Type ID:</label>
                        <input type="text" class="form-control" name="Fuel_Type_ID" id="Fuel_Type_ID" value="{{$order->Fuel_Type_ID}}" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label for="driver_id">Driver:</label>
                        <select name="driver_id" id="driver_id" class="form-control" required>
                          @foreach ($drivers as $driver)
                              <option name="{{$driver->driver_id}}" id="{{$driver->driver_id}}" value="{{ $driver->driver_id }}">{{ $driver->first_name }}</option>
                          @endforeach
                      </select>
                      <input type="hidden" name="ordered_date" value="{{$order->created_at}}">
                      </div>
                    </div>
                    
                    <br>
                    <div class="row">
                      <div class="d-grid gap-0 col-12 mx-auto">
                        <button type="submit" class="btn btn-primary">Approve</button>
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
        $('#confirm').modal('show');
      });
  </script> 
  @endif

  <!--Decline modal-->
  @if ($odr = Session::get('Decorder'))
  <div class="modal fade" id="decline" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-body">
                <h3 style="text-align: center;">Confirm</h3>
                <hr>
                <form method="POST" action="{{ route('head_office_orders.decline', ['id' => $odr->order_id]) }}">
                  @csrf
                  <div class="container">
                    <div class="row">
                      <div class="col-6">
                        <label for="">Order ID:</label>
                        <input type="text" class="form-control" name="order_id" id="order_id" value="{{$odr->order_id}}" readonly>
                      </div>
                      <div class="col-6">
                        <label for="">Filling Station ID:</label>
                        <input type="text" class="form-control" name="Fuel_Station_ID" id="Fuel_Station_ID" value="{{$odr->Fuel_Station_ID}}" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label for="">Liters:</label>
                        <input type="text" class="form-control" name="liters_quantity" id="liters_quantity" value="{{$odr->liters_quantity}}" readonly>
                      </div>
                      <div class="col-6">
                        <label for="">Fuel Type ID:</label>
                        <input type="text" class="form-control" name="Fuel_Type_ID" id="Fuel_Type_ID" value="{{$odr->Fuel_Type_ID}}" readonly>
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <!-- <label for="driver_id">Driver:</label>
                        <select name="driver_id" id="driver_id" class="form-control" required>
                          @foreach ($drivers as $driver)
                              <option name="{{$driver->driver_id}}" id="{{$driver->driver_id}}" value="{{ $driver->driver_id }}">{{ $driver->first_name }}</option>
                          @endforeach
                      </select> -->
                      <input type="hidden" name="ordered_date" value="{{$order->created_at}}">
                      </div>
                    </div>
                    
                    <br>
                    <div class="row">
                      <div class="d-grid gap-0 col-12 mx-auto">
                        <button type="submit" class="btn btn-danger">Decline</button>
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
        $('#decline').modal('show');
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