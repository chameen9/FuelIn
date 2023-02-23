<form method="POST" action="{{ route('headoffice.fuelrequests.store', $fuelstation->Fuel_Station_ID) }}">
    @csrf
    <div class="form-group">
        <label for="fuel_type_id">Fuel Type:</label>
        <select class="form-control" id="fuel_type_id" name="fuel_type_id">
            <option value="">-- Select Fuel Type --</option>
            @foreach ($fueltypes as $fueltype)
                <option value="{{ $fueltype->Fuel_Type_ID }}">{{ $fueltype->Fuel_Type_Name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="{{ $fuelstation->Fuel_Station_Stock }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Request Fuel</button>
</form>
