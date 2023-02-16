
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Fuel Stocks</h4>
                    <a href="{{ route('fuel-stocks.create') }}" class="btn btn-primary btn-rounded float-right">
                        <i class="fa fa-plus"></i> Add New Fuel Stock
                    </a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="table-responsive">
                    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fuel Type</th>
            <th>Fuel Station</th>
            <th>Liters</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($fuelStocks as $fuelStock)
        <tr>
            <td>{{ $fuelStock->id }}</td>
            <td>{{ $fuelStock->fuelType->Type_Name }}</td>
            <td>{{ $fuelStock->fuelStation->Fuel_Station_Name }}</td>
            <td>{{ $fuelStock->liters }}</td>
            <td>
                <a href="{{ route('fuel-stocks.edit', $fuelStock->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('fuel-stocks.destroy', $fuelStock->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

                    </div>
                </div>
            </div>
        </div>
    </div>

