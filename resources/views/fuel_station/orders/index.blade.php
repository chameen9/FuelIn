<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FuelIn | Orders</title>
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
        <a class="nav-link collapsed" href="{{route('fuel_station_dashboard')}}">
            <i class="bi bi-grid"></i></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li><br></li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('orders.index') }}">
            <i class="bi bi-card-checklist"></i>
            <span>Orders</span>
        </a>
      </li><!-- End Orders Nav -->
      <li><br></li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('fuel-stocks.index') }}">
            <i class="bi bi-fuel-pump"></i>
            <span>Fuel Stocks</span>
        </a>
      </li><!-- End View Available Fuel Quotas Nav -->
      <li><br></li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('fuel_requests.index') }}">
            <i class="bi bi-qr-code"></i>
            <span>Fuel Tokens</span>
        </a>
      </li><!-- End Fuel tokens Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Orders</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('fuel_station_dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                <div class="card" style="padding: 20px;">
                    <div class="card-body">
                        <div class="d-grid gap-0 col-12 mx-auto">
                            <br>
                            <a href="{{ route('orders.create') }}" class="btn btn-primary btn-md">New Order</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            @foreach ($orders as $order)
              <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                  <div class="card" style="padding: 20px;">
                      <h3 class="card-title"># {{ $order->order_id }}<span> | Order</span></h3>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6">
                            Fuel Type :
                          </div>
                          <div class="col-6">
                            {{ $order->fuelType->Type_Name }}
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-6">
                            Liters Quantity :
                          </div>
                          <div class="col-6">
                            {{ $order->liters_quantity }}
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-6">
                            Requested Date :
                          </div>
                          <div class="col-6">
                            {{ $order->created_at }}
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-6">
                            Order Status :
                          </div>
                          <div class="col-6">
                            @if($order->Approval_Status == 'pending')
                              <span class="badge badge-primary">{{ $order->Approval_Status }}</span>
                            @elseif($order->Approval_Status == 'approved')
                              <span class="badge badge-success">{{ $order->Approval_Status }}</span>
                            @else
                              <span class="badge badge-danger">{{ $order->Approval_Status }}</span>
                            @endif
                          </div>
                        </div>
                        
                        <br>

                        <form action="{{ route('orders.destroy', $order->order_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="row">
                                <div class="col-6">
                                  @if($order->Approval_Status == 'pending')
                                    <div class="d-grid gap-0 col-12 mx-auto">
                                        <a href="{{ route('orders.edit', $order->order_id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </div>
                                  @elseif($order->Approval_Status == 'approved')
                                    
                                  @else

                                  @endif
                                </div>
                                <div class="col-6">
                                    <div class="d-grid gap-0 col-12 mx-auto">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>
                </div>

              
            @endforeach

        </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>FuelIn</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

 <!--Update Fuel qouta modal-->
 @if (Session::get('uptodateOrder'))
      <div class="modal fade" id="updateOrder" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="successModalLabel">Update Fuel Order</h5>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="{{ route('orders.update', ['order' => $order]) }}">
                      @csrf
                      @method('PUT')
                      <div class="row">
                        <div class="col-12">
                          <label for="">Fuel Type</label>
                          <input type="text" class="form-control" name="Fuel_Type" id="Fuel_Type" value="{{$order->fuelType->Type_Name}}" disabled>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-12">
                          <label for="">Requested Liters</label>
                          <input type="number" class="form-control" name="liters_quantity" id="liters_quantity" value="{{$order->liters_quantity}}" required>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Update</button>
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
            $('#updateOrder').modal('show');
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