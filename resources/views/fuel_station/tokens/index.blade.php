<div class="container">
    <h1>Tokens</h1>

    @if ($tokens->isNotEmpty())
        <table class="table mt-3" border=1>
            <thead>
                <tr>
                    <th>Token ID</th>
                    <th>Customer ID</th>
                    <th>Payment Status ID</th>
                    <th>Fuel Type ID</th>
                    <th>Liters</th>
                    <th>Scheduled Filling Time</th>
                    <th>Scheduled Filling Date</th>
                    <th>Request ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tokens as $token)
                    <tr>
                        <td>{{ $token->Token_ID }}</td>
                        <td>{{ $token->Customer_ID }}</td>
                        <td>{{ $token->Payment_Status_ID }}</td>
                        <td>{{ $token->Fuel_Type_ID }}</td>
                        <td>{{ $token->Liters }}</td>
                        <td>{{ $token->Scheduled_Filling_Time }}</td>
                        <td>{{ $token->Scheduled_Filling_Date }}</td>
                        <td>{{ $token->request_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <form method="POST" action="{{ route('tokens.store') }}">
            @csrf
            <input type="hidden" id="Fuel_Request_ID" name="Fuel_Request_ID" value="{{$request->fuel_request_id}}"/>
            <input type="submit" value="Create Token">
        </form>
    @endif
</div>