


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

@include('headoffice._navigation')

<br>
<button type="button" class="btn btn-success"  style="
  background-color: green;
  border: 1px solid green;
  border-radius: 5px;
  color: white;
  padding: 10px 20px;
  margin: 8px;
  font-size: 16px;
  margin-bottom: 10px;" onclick="location.href='/login'">Register a New Vehicle</button>

<div class="table-responsive" style="margin:8px">
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

</div>

</body>
</html>