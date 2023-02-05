<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lock Hood | Purchasing</title>
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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{URL::asset('/images/logo1.png')}}" alt="">
        <span class="d-none d-lg-block">Lock Hood</span>
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

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
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

            <li class="message-item">
              <a href="#">
                <img src="{{URL::asset('/images/messages-2.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{URL::asset('/images/messages-3.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
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
            <span class="d-none d-md-block dropdown-toggle ps-2">{{$userLastName}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>{{$userFirstName}} {{$userLastName}}</h6>
                <span>{{$userRole}} ({{$userLevel}})</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
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
        <form action="{{ url('/viewdashboard') }}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="username" value="{{$username}}">
            <button class="btn btn-navstyle" type="submit">
                <i class="bi bi-grid"></i>&nbsp;&nbsp;&nbsp;Dashboard
            </button>
        </form>
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
                  <button type="submit"  class="btn btn-navstyle">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-buildings"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Factory</span>
                  </button>
                </form>
              </li>
              <li>
                <form action="{{url('/viewpurchasing')}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="username" value="{{$username}}">
                  <button type="submit"  class="btn btn-navstyle">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="bi bi-cart-plus"></i>
                    &nbsp;&nbsp;&nbsp;
                    <span>Purchasing</span>
                  </button>
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
      <h1>Purchasing</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Dashboard</a></li>
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Purchasing</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">


          <!--stock level chart-->
            <div class="col-lg-7 md-7">
                <div class="card">

                    <div class="card-body">
                    <h5 class="card-title">Stock Levels <span>| Current</span></h5>

                    <div class="filter"> <!--pdf,excel -->
                
                      <a class="icon" href="" data-bs-toggle="dropdown" title="Filters and Downloald options" data-toggle="tooltip" data-placement="top"><i class="bi bi-three-dots"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                        <li class="dropdown-header text-start">
                          <h6>Downloald</h6>
                        </li>
                        <li>
                          <form action="{{ url('/download/pdf/stocks') }}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="created_by" value="{{$username}}">
                            <input type="hidden" name="role" value="{{$userRole}}">
                            <input type="hidden" name="reportstatus" value="Current">
                            @if(2 >= $userLevel)
                            <button type="submit" class="dropdown-item" title="Downloald as pdf" data-toggle="tooltip" data-placement="top">
                              <i class="bi bi-filetype-pdf"></i>pdf
                            </button>
                            @else
                            <button type="submit" disabled class="dropdown-item" title="Downloald Disabled" data-toggle="tooltip" data-placement="top">
                              <i class="bi bi-filetype-pdf"></i>pdf
                            </button>
                            @endif
                          </form>
                        </li>
                        <li>
                          <form action="{{ url('/download/excel/stock') }}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="created_by" value="{{$username}}">
                            <input type="hidden" name="role" value="{{$userRole}}">
                            <input type="hidden" name="reportstatus" value="Current">
                            @if(2 >= $userLevel)
                            <button type="submit" class="dropdown-item" title="Downloald as Excel sheet" data-toggle="tooltip" data-placement="top">
                              <i class="bi bi-filetype-xls"></i>Excel (.xlsx)
                            </button>
                            @else
                            <button type="submit" disabled class="dropdown-item" title="Downloald Disabled" data-toggle="tooltip" data-placement="top">
                              <i class="bi bi-filetype-xls"></i>Excel (.xlsx)
                            </button>
                            @endif
                          </form>
                        </li>
                      </ul>
                    </div>

                    <!-- Line Chart -->
                    <div id="reportsChart"></div>

                    <script>
                        var stocksmetidstoarray = JSON.parse('<?= json_encode($stocksmetidstoarray);?>');
                        var stocksmaxleveltoarray = JSON.parse('<?= json_encode($stocksmaxleveltoarray);?>');
                        var stockscurrentleveltoarray = JSON.parse('<?= json_encode($stockscurrentleveltoarray);?>');
                        var stocksreorderleveltoarray = JSON.parse('<?= json_encode($stocksreorderleveltoarray);?>');
                        document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                            series: [{
                            name: 'Max Limit',
                            data: stocksmaxleveltoarray,
                            }, {
                            name: 'Current Level',
                            data: stockscurrentleveltoarray
                            }, {
                            name: 'Re-Order Level',
                            data: stocksreorderleveltoarray
                            }],
                            chart: {
                            height: 432,
                            type: 'area',
                            toolbar: {
                                show: true
                            },
                            },
                            markers: {
                            size: 4
                            },
                            colors: ['#4154f1', '#2eca6a', '#FF4069'],
                            fill: {
                            type: "gradient",
                            gradient: {
                                shadeIntensity: 1,
                                opacityFrom: 0.3,
                                opacityTo: 0.4,
                                stops: [0, 90, 100]
                            }
                            },
                            dataLabels: {
                            enabled: false
                            },
                            stroke: {
                            curve: 'smooth',
                            width: 2
                            },
                            xaxis: {
                                categories: stocksmetidstoarray
                            },
                            tooltip: {
                            x: {
                                formatter: function(val) {
                                    return "Material ID : " + val
                                }
                            },
                            }
                        }).render();
                        });
                    </script>
                    <!-- End Line Chart -->

                    </div>

                </div>
            </div>
          <!--End stock level chart-->

          <!--Material names-->
          <div class="col-lg-5 md-5">
            <div class="card recent-sales overflow-auto">

              <div class="filter">
              </div>

              <div class="card-body">
                <h5 class="card-title">Materials <span>| By Id</span></h5>
                <div class="filter"> <!--pdf,excel -->
                
                  <a class="icon" href="" data-bs-toggle="dropdown" title="Filters and Downloald options" data-toggle="tooltip" data-placement="top"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li class="dropdown-header text-start">
                      <h6>Downloald</h6>
                    </li>
                    <li>
                      <form action="{{ url('/download/pdf/marerials') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="created_by" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="reportstatus" value="By Id">
                        @if(2 >= $userLevel)
                        <button type="submit" class="dropdown-item" title="Downloald as pdf" data-toggle="tooltip" data-placement="top">
                          <i class="bi bi-filetype-pdf"></i>pdf
                        </button>
                        @else
                        <button type="submit" disabled class="dropdown-item" title="Downloald Disabled" data-toggle="tooltip" data-placement="top">
                          <i class="bi bi-filetype-pdf"></i>pdf
                        </button>
                        @endif
                      </form>
                    </li>
                    <li>
                      <form action="{{ url('/download/excel/marerials') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="created_by" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="reportstatus" value="By Id">
                        @if(2 >= $userLevel)
                        <button type="submit" class="dropdown-item" title="Downloald as Excel sheet" data-toggle="tooltip" data-placement="top">
                          <i class="bi bi-filetype-xls"></i>Excel (.xlsx)
                        </button>
                        @else
                        <button type="submit" disabled class="dropdown-item" title="Downloald Disabled" data-toggle="tooltip" data-placement="top">
                          <i class="bi bi-filetype-xls"></i>Excel (.xlsx)
                        </button>
                        @endif
                      </form>
                    </li>
                  </ul>
                </div>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Material Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($materials as $matitem)
                    <tr>
                      <th scope="row"><a>#{{$matitem->id}}</a></th>
                      <td>{{$matitem->name}}</td>
                      <td align="center">
                        @if($matitem->reorder_level >= $matitem->available_qty)
                        <form action="{{url('/send/mail/purchasingorder/request')}}" method="post">
                          {{csrf_field()}}
                          <input type="hidden" name="matid" value="{{$matitem->id}}">
                          <input type="hidden" name="supid" value="{{$matitem->sup_id}}">
                          <input type="hidden" name="username" value="{{$username}}">
                          <button type="submit" class="btn btn-danger badge badge-pill border-0">ORDER</button>
                        </form>
                        @else
                            <button class="btn btn-success badge badge-pill border-0">Active</button>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Best Sales Execetives -->
          <!--END-Material names-->

        </div>
        <div class="row">
            <!-- Suppliers -->
            <div class="col-lg-8 md-8">
                <div class="card top-selling overflow-auto">
                <div class="card-body pb-0">

                <div class="filter"> <!--pdf,excel -->
                
                  <a class="icon" href="" data-bs-toggle="dropdown" title="Filters and Downloald options" data-toggle="tooltip" data-placement="top"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li class="dropdown-header text-start">
                      <h6>Downloald</h6>
                    </li>
                    <li>
                      <form action="{{ url('/download/pdf/suppliers') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="created_by" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="reportstatus" value="Default">
                        @if(2 >= $userLevel)
                        <button type="submit" class="dropdown-item" title="Downloald as pdf" data-toggle="tooltip" data-placement="top">
                          <i class="bi bi-filetype-pdf"></i>pdf
                        </button>
                        @else
                        <button type="submit" disabled class="dropdown-item" title="Downloald Disabled" data-toggle="tooltip" data-placement="top">
                          <i class="bi bi-filetype-pdf"></i>pdf
                        </button>
                        @endif
                      </form>
                    </li>
                    <li>
                      <form action="{{ url('/download/excel/suppliers') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="created_by" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="reportstatus" value="Default">
                        @if(2 >= $userLevel)
                        <button type="submit" class="dropdown-item" title="Downloald as Excel sheet" data-toggle="tooltip" data-placement="top">
                          <i class="bi bi-filetype-xls"></i>Excel (.xlsx)
                        </button>
                        @else
                        <button type="submit" disabled class="dropdown-item" title="Downloald Disabled" data-toggle="tooltip" data-placement="top">
                          <i class="bi bi-filetype-xls"></i>Excel (.xlsx)
                        </button>
                        @endif
                      </form>
                    </li>
                  </ul>
                </div>

                    <h5 class="card-title">Suppliers<span> | Default  </span></h5>

                    <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Supplier Name</th>
                        <th scope="col">Material Type</th>
                        <th scope="col">Quantity(Kg)</th>
                        <th scope="col">Price($)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($defaultsuppliers as $sup)
                        <tr>
                        <th scope="row"><a>#{{$sup->supplier_id}}</a></th>
                        <td>{{$sup->supplier_name}}</td>
                        <td>({{$sup->id}}) {{$sup->name}}</td>
                        <td>1</td>
                        <td>{{$sup->price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div>

                </div>
            </div>
            <!-- End Suppliers -->

            <div class="col-lg-4 md-4">
                <!-- Supplier Payment -->
                <div class="card">
                    <div class="filter">
                        
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Supplier Payments Count <span>| Current</span></h5>

                        <div id="paymentschart" style="min-height: 455px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#paymentschart")).setOption({
                                tooltip: {
                                trigger: 'item'
                                },
                                legend: {
                                top: '1%',
                                left: 'center'
                                },
                                series: [{
                                name: 'Payments',
                                type: 'pie',
                                radius: ['40%', '70%'],
                                avoidLabelOverlap: false,
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                emphasis: {
                                    label: {
                                    show: true,
                                    fontSize: '18',
                                    fontWeight: 'bold'
                                    }
                                },
                                labelLine: {
                                    show: false
                                },
                                data: [{
                                    value: '{{$paidsupplierscount}}',
                                    name: 'Completed'
                                    },
                                    {
                                    value: '{{$activesupplierscount}}',
                                    name: 'Active'
                                    },
                                    {
                                    value: '{{$unpaidsupplierscount}}',
                                    name: 'Unpaid'
                                    }
                                ]
                                }]
                            });
                            });
                        </script>
                    </div>
                </div>
                <!-- End Supplier Paymen -->
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>E-Apartments</span></strong>. All Rights Reserved
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