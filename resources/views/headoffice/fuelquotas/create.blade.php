
    <div class="container">
        <h1>Create Fuel Quota</h1>
        <form action="{{ route('fuelquotas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="vehicle_type_id">Vehicle Type</label>
                <select class="form-control" id="Vehicle_Type_ID" name="Vehicle_Type_ID">
                    @foreach ($vehicle_types as $vehicle_type)
                        <option value="{{ $vehicle_type->Vehicle_Type_ID }}">{{ $vehicle_type->Type_Name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
        <label for="fuel_reset_day">Fuel Reset Day:</label>
        <select name="fuel_reset_day" id="fuel_reset_day" class="form-control">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
    </div>
            <div class="form-group">
                <label for="liters_amount">Liters Amount</label>
                <input type="text" class="form-control" id="liters_amount" name="liters_amount">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

