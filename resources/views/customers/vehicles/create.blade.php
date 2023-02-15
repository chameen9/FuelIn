<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vehicle Registration Form</title>
    </head>
    <body>
        <h1>Vehicle Registration Form</h1>
        <form action="{{ route('customers.vehicles.store') }}" method="post">
            @csrf
            <div>
                <label for="registration_number">Registration Number:</label>
                <input type="text" id="registration_number" name="registration_number">
            </div>
          
            <div>
            <label for="vehicle_type_id">Vehicle Type:</label>
            <select id="vehicle_type_id" name="vehicle_type_id">
                @foreach ($vehicleTypes as $vehicleType)
                    <option value="{{ $vehicleType->Vehicle_Type_ID }}">{{ $vehicleType->Type_Name }}</option>
                @endforeach
            </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </body>
</html>
