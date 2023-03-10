


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="/head_office_dashboard" >Home</a>
  <a href="/vehicles" class="active">Vehicles</a>
  <a href="/fuelstations">Fuel Station</a>
  <a href="#contact">Contact</a>
  <a href="/logout_admin">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<br> 
<h1>New Vehicle Registration</h1>

<form action="{{ route('vehicles.create') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="registration_number">Registration Number</label>
        <input type="text" name="registration_number" id="registration_number" class="form-control">
    </div>

    <div class="form-group">
        <label for="Vehicle_Type_ID">Vehicle Type</label>
        <select name="Vehicle_Type_ID_Title" id="Vehicle_Type_ID_Title" class="form-control">
            @foreach ($vehicleTypes as $vehicleType)
                <option name="{{$vehicleType->Vehicle_Type_ID}}" id="{{$vehicleType->Vehicle_Type_ID}}" value="{{ $vehicleType->Vehicle_Type_ID }}">{{ $vehicleType->Type_Name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>
<div class="form-group">
  <a href="{{ route('vehicle_types.index') }}" class="btn btn-info">Manage Vehicle Types</a>
</div>

</body>
</html>