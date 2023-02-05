<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FuelIn</title>
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
      <a href="index.html" class="logo d-flex align-items-center">
        &nbsp;
        <img src="{{URL::asset('/images/Logo.png')}}" alt="Logo">
        <span class="d-none d-lg-block">  FuelIn</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
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
            <span class="badge bg-success badge-number">3</span>
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
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$userLastName}}</span> <!--{{$userLastName}}-->
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{$userFirstName}} {{$userLastName}}</h6>
              <span>{{$userRole}} ({{$userLevel}})</span><br>
              <span>[{{$userdepartment}}]</span>
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
              <a class="dropdown-item d-flex align-items-center" href="{{url('/signout')}}">
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
        <a class="nav-link">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li><br></li>
      <li class="nav-item">
        <button class="btn btn-navstyle" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-nut"></i></i>
            <span>&nbsp;&nbsp;Engineering</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="bi bi-chevron-down ms-auto"></i>
        </button>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <button type="submit"  class="btn btn-navstyle">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="bi bi-pen-fill"></i>
                &nbsp;&nbsp;&nbsp;
              <span>Design</span>
            </button>
          </li>
          <li>
            <button type="submit"  class="btn btn-navstyle">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="bi bi-wrench"></i></i></i>
                &nbsp;&nbsp;&nbsp;
              <span>Engineering</span>
            </button>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      <li><br></li>
      <li class="nav-item">
        <button class="btn btn-navstyle" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-building-gear"></i>
            <span>&nbsp;&nbsp;Management</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="bi bi-chevron-down ms-auto"></i>
        </button>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
                <form action="{{url('/viewfactory')}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="username" value="{{$username}}">
                  <!-- @if($userdepartment == 'Factory Management') -->
                  <button type="submit"  class="btn btn-navstyle" style="border: none;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-buildings"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Factory</span>
                  </button>
                  <!-- @elseif($userLevel == 1) -->
                  <button type="submit"  class="btn btn-navstyle" style="border: none;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-buildings"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Factory</span>
                  </button>
                  <!-- @else -->
                  <button type="submit"  class="btn btn-navstyle" style="border: none;" Disabled>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-buildings"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Factory</span>
                  </button>
                  <!-- @endif -->
                </form>
              </li>
              <li>
                <form action="{{url('/viewpurchasing')}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="username" value="{{$username}}">
                  <!-- @if($userdepartment == 'Purchasing') -->
                  <button type="submit"  class="btn btn-navstyle" style="border: none;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-cart-plus"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Purchasing</span>
                  </button>
                  <!-- @elseif($userLevel == 1) -->
                  <button type="submit"  class="btn btn-navstyle" style="border: none;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-cart-plus"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Purchasing</span>
                  </button>
                  <!-- @else -->
                  <button type="submit"  class="btn btn-navstyle" style="border: none;" Disabled>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-cart-plus"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Purchasing</span>
                  </button>
                  <!-- @endif -->
                </form>
              </li>
        </ul>
      </li><!-- End test Nav -->

      <li><br></li>
      <!--<li class="nav-heading">Pages</li>-->

      <li class="nav-item">
        <form action="{{ url('/viewhr') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-person-vcard"></i>&nbsp;&nbsp;&nbsp;Human Resources
            </button>
        </form>
      </li><!-- End hr Nav -->

      <li><br></li>
      <li class="nav-item">
        <form action="{{ url('/viewsalesandmarketing') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-box2-heart"></i>&nbsp;&nbsp;&nbsp;Sales & Marketing
            </button>
        </form>
      </li><!-- End s & m Nav -->
      <li><br></li>
      <li class="nav-item">
        <form action="{{ url('/viewfinance') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-cash-coin"></i>&nbsp;&nbsp;&nbsp;Finance
            </button>
        </form>
      </li><!-- End finance Nav -->
      <li><br></li>
      <li class="nav-item">
        <form action="{{ url('/viewradnd') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-graph-up-arrow"></i>&nbsp;&nbsp;&nbsp;R & D
            </button>
        </form>
      </li><!-- End r & d Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
            <div class="card border-secondary" style="background-color: transparent;">
              <div class="container">
                <h5 class="card-title">To Do <span>| cards</span></h5>
                <hr>
                <div class="card-body">
                    @foreach($todokanbancards as $card)
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title">#{{$card->card_id}} <span>| {{$card->department_name}}</span></h5>
                        <div class="row">
                          <div class="col-12">
                            <b>{{Illuminate\Support\Str::limit($card->card_name, 32)}}</b>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            Started Date :
                          </div>
                          <div class="col-6">
                            <i>{{$card->card_date}}</i>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: {{$card->card_progress}}%" aria-valuenow="{{$card->card_progress}}" aria-valuemin="0" aria-valuemax="100">
                                {{$card->card_progress}} %
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
                
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
          <div class="card border-secondary" style="background-color: transparent;">
            <div class="container">
              <h5 class="card-title">In Progress <span>| cards</span></h5>
              <hr>
              <div class="card-body">
                
                @foreach($activekanbancards as $card)
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">#{{$card->card_id}} <span>| {{$card->department_name}}</span></h5>
                    <div class="row">
                      <div class="col-12">
                        <b>{{Illuminate\Support\Str::limit($card->card_name, 32)}}</b>
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        Started Date :
                      </div>
                      <div class="col-6">
                        <i>{{$card->card_date}}</i>
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: {{$card->card_progress}}%" aria-valuenow="{{$card->card_progress}}" aria-valuemin="0" aria-valuemax="100">
                            {{$card->card_progress}} %
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12">
          <div class="card border-secondary" style="background-color: transparent;">
            <div class="container">
              <h5 class="card-title">In Review <span>| cards</span></h5>
              <hr>
              <div class="card-body">
                @foreach($inreviewkanbancards as $card)
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">#{{$card->card_id}} <span>| {{$card->department_name}}</span></h5>
                    <div class="row">
                      <div class="col-12">
                        <b>{{Illuminate\Support\Str::limit($card->card_name, 32)}}</b>
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        Started Date :
                      </div>
                      <div class="col-6">
                        <i>{{$card->card_date}}</i>
                      </div>
                    </div>
                    <div class="row">
                      <br>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: {{$card->card_progress}}%" aria-valuenow="{{$card->card_progress}}" aria-valuemin="0" aria-valuemax="100">
                            {{$card->card_progress}} %
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
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
    <div class="credits">
    </div>
  </footer><!-- End Footer -->

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