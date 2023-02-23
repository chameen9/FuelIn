<table border=1>
  <thead>
    <tr>
      <th>Fuel Request ID</th>
      <th>Vehicle Registration Number</th>
      <th>Fuel Type</th>
      <th>Requested Liters</th>
      <th>Scheduled Filling Date</th>
      <th>Scheduled Filling Time</th>
      <th>Tolerance Hours</th>
      <th>Status</th>
      <th>Fuel Station</th>
      <th>Approve</th>
      <th>Decline</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($fuelRequests as $request)
      <tr>
        <td>{{ $request->Fuel_Request_ID }}</td>
        <td>{{ $request->Vehicle_Registration_Number }}</td>
        <td>{{ $request->Type_Name }}</td>
        <td>{{ $request->Requested_Liters }}</td>
        <td>{{ $request->Scheduled_Filling_Date }}</td>
        <td>{{ $request->Scheduled_Filling_Time }}</td>
        <td>{{ $request->Tolerance_Hours }}</td>
        <td>{{ $request->status }}</td>
        <td>{{ $request->Fuel_Station_Name }}</td>
     
          @if ($request->status == 'Pending')
          <td>
            <form>
              @csrf
              <button type="submit">Approve</button>
            </form>
        </td>
        <td>
            <form action="{{ route('fuel-requests.decline', $request->Fuel_Request_ID) }}" method="POST">
              @csrf
              <button type="submit">Decline</button>
            </form>
        </td>
        @elseif ($request->status == 'Approved')
        <td>
        <form action="{{ route('tokens.view', $request->Fuel_Request_ID) }}" method="POST">
            @csrf
             <input id="fuel_request_id" name="fuel_request_id" type="hidden" value="{{ $request->Fuel_Request_ID }}"/>
              <button type="submit">Create Token</button>
            </form>
        </td>
          @endif
        
      </tr>
    @endforeach
  </tbody>
</table>
