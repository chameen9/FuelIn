
    <div class="container">
        <h1>Fuel Quotas</h1>
        <a href="{{ route('fuelquotas.create') }}" class="btn btn-primary">Create Fuel Quota</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Vehicle Type</th>
                    <th>Liters Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fuelquotas as $fuelquota)
                    <tr>
                        <td>{{ $fuelquota->Fuel_Quota_ID }}</td>
                        <td>{{ $fuelquota->vehicle_type->Type_Name }}</td>
                        <td>{{ $fuelquota->liters_amount }}</td>
                        <td>
                            <a href="{{ route('fuelquotas.show', $fuelquota->Fuel_Quota_ID) }}" class="btn btn-sm btn-info">Show</a>
                            <a href="{{ route('fuelquotas.edit', $fuelquota->Fuel_Quota_ID) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('fuelquotas.destroy', $fuelquota->Fuel_Quota_ID) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

