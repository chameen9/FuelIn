<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FuelIn | Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Assets/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Assets/quill/quill.snow.css" rel="stylesheet">
  <link href="Assets/quill/quill.bubble.css" rel="stylesheet">
  <link href="Assets/remixicon/remixicon.css" rel="stylesheet">
  <link href="Assets/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.0/dist/umd/popper.min.js" integrity="sha384-aMk7v90ZgPWxgK5x5xzD5kvry8Wyj4/lQbKzm5fvh8Wm7OMz/MnHx9XtLk2c1Nj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-e/ai8Z5fKQCMgj/nLhZpvAv0dh/FZjmS48NDx5jv+X9NM/8mOh4KjfncJgvBmK5" crossorigin="anonymous"></script>

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{url('/login')}}" class="logo d-flex align-items-center w-auto">
                  <img src="{{URL::asset('/images/Logo&Text.png')}}" alt="FeulIn" style="width: auto; height: 300px;">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post"  action="{{ route('login') }}">
                    {{csrf_field()}}

                    <div class="col-12 position-relative">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="email" required minlength="1">
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12 position-relative">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="Password" required minlength="1">
                      <div class="invalid-feedback">Please enter a proper password!</div>
                    </div>

                    <div class="col-12">
                        @if(count($errors)>0 || $message = Session::get('error'))
                            @if(count($errors)>0)
                                <div class="alert border-warning alert-dismissible fade show">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        <a href="{{ url('/login') }}"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a></button>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                                
                            @if($message = Session::get('error'))
                                <div class="alert border-danger alert-dismissible fade show">
                                    {{$message}}
                                    <a href="{{ url('/login') }}"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a></button>
                                </div>
                                <br>
                                <br>
                            @endif
                        @else
                            <br>
                        @endif
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="{{url('/register')}}">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="https://facebook.com/">FuelIn</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>