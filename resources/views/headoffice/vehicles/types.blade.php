<!-- File: resources/views/vehicle_types/index.blade.php -->

<!-- Import the required stylesheet -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Create a container for the table -->
<div class="container">
    <h1>Vehicle Type Management</h1>

    <!-- Create a table to display the vehicle types -->
    <table class="table">
        <thead>
            <tr>
                <th>Vehicle Type ID</th>
                <th>Type Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through each vehicle type -->
            @foreach($vehicleTypes as $vehicleType)
                <tr>
                    <td>{{ $vehicleType->Vehicle_Type_ID }}</td>
                    <td>{{ $vehicleType->Type_Name }}</td>
                    <td>{{ $vehicleType->Description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Import the required JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
