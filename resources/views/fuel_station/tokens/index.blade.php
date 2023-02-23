
<div class="container">
    <h1>Tokens</h1>
    <a href="{{ route('tokens.create',$request->fuel_request_id) }}" class="btn btn-primary">Create Token</a> 

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
                <th>Actions</th>
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
                <td>
                    <a href="{{ route('tokens.show', $token->Token_ID) }}" class="btn btn-info">View</a>
                    <a href="{{ route('tokens.edit', $token->Token_ID) }}" class="btn btn-warning">Edit</a>
                    <form method="POST" action="{{ route('tokens.destroy', $token->Token_ID) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this token?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
