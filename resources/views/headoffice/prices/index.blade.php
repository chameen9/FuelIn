
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Fuel Prices</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Fuel Type</th>
                                    <th>Price (per liter)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fuelPrices as $fuelPrice)
                                    <tr>
                                    <td>{{ $fuelPrice->fuelType->Type_Name }}</td>

                                        <td>{{ $fuelPrice->Price }}</td>
                                        <td>
                                            <a href="{{ route('fuelprices.edit', $fuelPrice->Fuel_Type_ID) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('fuelprices.destroy', $fuelPrice->Fuel_Type_ID) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('fuelprices.create') }}" class="btn btn-primary">Add Fuel Price</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
