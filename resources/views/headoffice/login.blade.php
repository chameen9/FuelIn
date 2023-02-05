<!DOCTYPE html>
<!--resources/views/headoffice/login.blade.php-->
<html>
  <head>
    <title>Head Office Login</title>
    <!--bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="card">
            <div class="card-header">
              <h3>Head Office Login</h3>
            </div>
            <div class="card-body">
              <form action="{{ route('headoffice.login') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
