
    <div class="container">
        <h1>Edit Fuel Quota</h1>
        <form method="POST" action="{{ route('fuelquotas.update', ['id' => $fuel_quota->Fuel_Quota_ID]) }}">
            @csrf
            @method('PUT')
            <!-- <div class="form-group">
                <label for="vehicle_type_id">Vehicle Type</label>
                <select name="vehicle_type_id" id="vehicle_type_id" class="form-control">
                    @foreach ($vehicle_types as $vehicle_type)
                        <option value="{{ $vehicle_type->Vehicle_Type_ID }}" {{ $fuel_quota->Vehicle_Type_ID == $vehicle_type->Vehicle_Type_ID ? 'selected' : '' }}>
                            {{ $vehicle_type->Type_Name }}
                        </option>
                    @endforeach
                </select>
            </div> -->
            <div class="form-group">
                <label for="liters_amount">Liters Amount</label>
                <input type="text" name="liters_amount" id="liters_amount" class="form-control" value="{{ $fuel_quota->liters_amount }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

