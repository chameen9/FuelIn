<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lock Hood | Sales</title>
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
        <a class="nav-link">
            <i class="bi bi-box2-heart"></i>
            <span>Sales & Marketing</span>
        </a>
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
      <h1>Sales & Marketing</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Dashboard</a></li>
          <li class="breadcrumb-item active">Sales & Marketing</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        
        <!-- Left side columns -->
        <!-- Top Selling -->
        <div class="col-lg-8 md-8">
            <div class="card top-selling overflow-auto">

              <div class="filter"> <!--pdf,excel and filters for top 10 selling-->
                
                <a class="icon" href="" data-bs-toggle="dropdown" title="Filters and Downloald options" data-toggle="tooltip" data-placement="top"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter By</h6>
                  </li>

                  <li>
                    <form action="{{ url('/viewsalesandmarketing') }}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="username" value="{{$username}}">
                      <input type="hidden" name="role" value="{{$userRole}}">
                      <input type="hidden" name="top10ProductFilterstaus" value="Top 10">
                      <button class="dropdown-item" type="submit">Top 10</button>
                    </form>
                  </li>

                  <li>
                    <form action="{{ url('/viewsalesandmarketingbytop20') }}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="username" value="{{$username}}">
                      <input type="hidden" name="role" value="{{$userRole}}">
                      <input type="hidden" name="top10ProductFilterstaus" value="Top 20">
                      <button class="dropdown-item" type="submit">Top 20</button>
                    </form>
                  </li>

                  <li class="dropdown-header text-start">
                    <h6>Downloald</h6>
                  </li>
                  <li>
                    <form action="{{ url('/downloadtopsellingproductspdf') }}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="created_by" value="{{$username}}">
                      <input type="hidden" name="role" value="{{$userRole}}">
                      <input type="hidden" name="top10ProductFilterstaus" value="{{$top10ProductFilterstaus}}">
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
                    @if($top10ProductFilterstaus == 'Top 10')
                    <form action="{{ url('/downloadtopsellingproductsexcel') }}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="created_by" value="{{$username}}">
                      <input type="hidden" name="role" value="{{$userRole}}">
                      <input type="hidden" name="top10ProductFilterstaus" value="{{$top10ProductFilterstaus}}">
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
                    @else
                    <form action="{{ url('/download20topsellingproductsexcel') }}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="created_by" value="{{$username}}">
                      <input type="hidden" name="role" value="{{$userRole}}">
                      <input type="hidden" name="top10ProductFilterstaus" value="{{$top10ProductFilterstaus}}">
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
                    @endif
                  </li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Selling Products<span>| By {{$top10ProductFilterstaus}}</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Actual Price($)</th>
                      <th scope="col">Sold Price($)</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Revenue($)</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($topSellingProducts as $topSellingProduct)
                        <tr>
                            <td scope="row">{{$topSellingProduct->product_id}}</td>
                            <td><a class="text-primary fw-bold">{{Illuminate\Support\Str::limit($topSellingProduct->name, 30)}}</a></td>
                            <td align="center">{{$topSellingProduct->price}}</td>
                            <td align="center">{{$topSellingProduct->sold_price}}</td>
                            <td class="fw-bold" align="center">{{$topSellingProduct->quantity}}</td>
                            <td align="center">{{$topSellingProduct->sold_price * $topSellingProduct->quantity}}</td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>

              </div>

            </div>
          </div>
          <!-- End Top Selling -->
          
          <!--bar chart-->
          <div class="col-lg-4 md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Products Top 10</h5>
                <div id="barChart"></div>
         
                    <script>

                    //var array1 = $productsPrices;
                    //var array2 = $productsIds;
                    var productIds = JSON.parse('<?= json_encode($productIds);?>');
                    var productQtys = JSON.parse('<?= json_encode($productQtys);?>');

                    document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#barChart"), {
                        series: [{
                            name: "Quantity",
                            data: [productQtys[0], productQtys[1], productQtys[2], productQtys[3]
                            , productQtys[4], productQtys[5], productQtys[6], productQtys[7], productQtys[8]
                            , productQtys[9]
                            ]
                        }],
                        chart: {
                            type: 'bar',
                            height: 388
                        },
                        plotOptions: {
                            bar: {
                            borderRadius: 4,
                            horizontal: false,
                            }
                        },
                        dataLabels: {
                            enabled: true
                        },
                        xaxis: {
                            type:"Product Id",
                            categories: [productIds[0], productIds[1], productIds[2], productIds[3]
                            , productIds[4], productIds[5], productIds[6], productIds[7], productIds[8]
                            , productIds[9]
                            ],
                        }
                        }).render();
                    });
                    </script>

                </div>
              </div>
          </div>
          <!--End bar chart-->
      </div>
          


          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Quantity</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$totalQuantity}}</h6>
                      <!--<span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>-->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- products Card -->
            <div class="col-xxl-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Products <span>| Total Active</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$totalProducts}}</h6>
                      <!--<span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>-->

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End products Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| Total</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      @foreach($topSellingProducts as $topSellingProduct)
                        <input type="hidden" name="totrevenue" value="{{$totalRevenue = $totalRevenue + $topSellingProduct->quantity * $topSellingProduct->sold_price}}">
                      @endforeach
                      <h6>${{$totalRevenue}}</h6>
                      <!--<span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>-->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Best Sales Execetives -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="" data-bs-toggle="dropdown" title="Filters and Downloald options" data-toggle="tooltip" data-placement="top"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter By</h6>
                    </li>

                    <li>
                      <form action="{{ url('/viewsalesandmarketing') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="username" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="BeastSalesExecetivesFilterstaus" value="Sold Quantity">
                        <button class="dropdown-item" type="submit">Sold Quantity</button>
                      </form>
                    </li>

                    <li>
                      <form action="{{ url('/viewsalesandmarketingbyempstatus') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="username" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="BeastSalesExecetivesFilterstaus" value="Status">
                        <button class="dropdown-item" type="submit">Status</button>
                      </form>
                      <form action="{{ url('/viewsalesandmarketingbyempdepartment') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="username" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="BeastSalesExecetivesFilterstaus" value="Department">
                        <button class="dropdown-item" type="submit">Department</button>
                      </form>
                    </li>

                    <li class="dropdown-header text-start">
                      <h6>Downloald</h6>
                    </li>
                    <li>
                      <form action="{{ url('/downloadbestsalesexecetivespdf') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="created_by" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="BeastSalesExecetivesFilterstaus" value="{{$BeastSalesExecetivesFilterstaus}}">
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

                      @if($BeastSalesExecetivesFilterstaus == 'Sold Quantity')
                      <form action="{{ url('/download/excel/bestsalesexecetives/bysoldquantity') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="created_by" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="BeastSalesExecetivesFilterstaus" value="{{$BeastSalesExecetivesFilterstaus}}">
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


                      @elseif($BeastSalesExecetivesFilterstaus == 'Status')
                      <form action="{{ url('/download/excel/bestsalesexecetives/bystatus') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="created_by" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="BeastSalesExecetivesFilterstaus" value="{{$BeastSalesExecetivesFilterstaus}}">
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


                      @else
                      <form action="{{ url('/download/excel/bestsalesexecetives/bydepartment') }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="created_by" value="{{$username}}">
                        <input type="hidden" name="role" value="{{$userRole}}">
                        <input type="hidden" name="BeastSalesExecetivesFilterstaus" value="{{$BeastSalesExecetivesFilterstaus}}">
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
                      @endif
                    </li>
                  </ul>


                </div>

                <div class="card-body">
                  <h5 class="card-title">Best Sales Execetives <span>| By {{$BeastSalesExecetivesFilterstaus}}</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Department</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($saleEmployees as $employee)
                      <tr>
                        <th scope="row"><a>#{{$employee->sold_by}}</a></th>
                        <td>{{$employee->first_name}} {{$employee->last_name}}</td>
                        <td><a class="text-primary">{{$employee->name}}</a></td>
                        <td>{{$employee->count}}</td>
                        <td>
                          @if($employee->status == "ACTIVE")
                            <span class="badge bg-success">ACTIVE</span>
                          @else
                            <span class="badge bg-danger">NONE</span>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Best Sales Execetives -->

          </div>
        </div><!-- End Left side columns -->

        

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