<h2>My Vehicles</h2>
<table border="1">
    <thead>
        <tr>
            <th>Registration Number</th>
      
            
            <th>Vehicle Type</th>
            <th>Fuel Quota (liters)</th>
            <th>Fuel Quota Reset Day</th>
            <th>Days remaining</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($customer->vehicles as $vehicle)
    <tr>
        <td>{{ $vehicle->registration_number }}</td>
        <td>{{ $vehicle->vehicleType->Type_Name }}</td>
        <td>{{ $vehicle->vehicleType->fuelQuota->liters_amount }}</td>
        <td>{{ $vehicle->vehicleType->fuelQuota->fuel_reset_day }}</td>
        <td>
            @php
                $current_day = date('N');
                $reset_day = array_search($vehicle->vehicleType->fuelQuota->fuel_reset_day, array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')) + 1;
                $remaining_days = $reset_day - $current_day;
                if ($remaining_days <= 0) {
                    $remaining_days += 7;
                }
                echo $remaining_days;
            @endphp
        </td>
    </tr>
        @endforeach

    </tbody>
</table>
