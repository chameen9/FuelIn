


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
  <a href="/fuelstations">Fuel Station</a>
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
<button type="button" class="btn btn-success"  style="
  background-color: green;
  border: 1px solid green;
  border-radius: 5px;
  color: white;
  padding: 10px 20px;
  margin: 8px;
  font-size: 16px;
  margin-bottom: 10px;" onclick="location.href='/register-vehicle'">Register a New Vehicle</button>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Registration Number</th>
            <th>Customer ID</th>
            <th>Vehicle Type ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->id }}</td>
            <td>{{ $vehicle->registration_number }}</td>
            <td>{{ $vehicle->Customer_ID }}</td>
            <td>{{ $vehicle->Vehicle_Type_ID }}</td>
            <td>
                <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display: inline-block;">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<!-- <div class="table-responsive" style="margin:8px">
<table class="table table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Registration Number</th>
            <th>Customer ID</th>
            <th>Vehicle Type ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->registration_number }}</td>
            <td>{{ $vehicle->Customer_ID }}</td>
            <td>{{ $vehicle->Vehicle_Type_ID }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div> -->

</body>
</html>