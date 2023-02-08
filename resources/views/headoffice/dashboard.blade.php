<!DOCTYPE html>
<head>

</head>
<body>
@include('headoffice._navigation')

<p>{{$email}}</p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Driver</th>
            <th>Vehicle</th>
            <th>Fuel Requested</th>
            <th>Filling Station</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($deliveries as $delivery)
        <tr>
            <td>{{ $delivery->id }}</td>
            <td>{{ $delivery->driver->name }}</td>
            <td>{{ $delivery->vehicle->number_plate }}</td>
            <td>{{ $delivery->fuel_request->liters }} liters</td>
            <td>{{ $delivery->fuel_request->filling_station->name }}</td>
            <td>{{ $delivery->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>