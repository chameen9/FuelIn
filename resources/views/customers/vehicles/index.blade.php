<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>List of Vehicles</title>
    </head>
    <body>
        <h1>List of My Vehicles</h1>
        <a href="{{ route('customers.vehicles.create') }}" class="btn btn-primary">Add New</a>

        <table>
            <thead>
                <tr>
                    <th>Registration Number</th>
                    <th>Customer ID</th>
                    <th>Vehicle Type</th>
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
    </body>
</html>
