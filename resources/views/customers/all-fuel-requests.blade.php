<table border=1>
  <thead>
    <tr>
      <th>Fuel Request ID</th>
      <!-- <th>Customer ID</th> -->
      <th>Vehicle Registration Number</th>
      <th>Fuel Type</th>
      <th>Requested Liters</th>
      <th>Scheduled Filling Date</th>
      <th>Scheduled Filling Time</th>
      <th>Tolerance Hours</th>
      <th>Status</th>
      <th>Fuel Station</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($fuelRequests as $request)
      <tr>
        <td>{{ $request->Fuel_Request_ID }}</td>
        <!-- <td>{{ $request->Customer_ID }}</td> -->
        <td>{{ $request->Vehicle_Registration_Number }}</td>
        <td>{{ $request->Type_Name }}</td>

        <td>{{ $request->Requested_Liters }}</td>
        <td>{{ $request->Scheduled_Filling_Date }}</td>
        <td>{{ $request->Scheduled_Filling_Time }}</td>
        <td>{{ $request->Tolerance_Hours }}</td>
        <td>{{ $request->status }}</td>
        <td>{{ $request->Fuel_Station_Name	 }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
