
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
    <label for="fuel_reset_day">Fuel Reset Day</label>
    <select name="fuel_reset_day" id="fuel_reset_day" class="form-control">
        <option value="Monday" @if($fuel_quota->fuel_reset_day === 'Monday') selected @endif>Monday</option>
        <option value="Tuesday" @if($fuel_quota->fuel_reset_day === 'Tuesday') selected @endif>Tuesday</option>
        <option value="Wednesday" @if($fuel_quota->fuel_reset_day === 'Wednesday') selected @endif>Wednesday</option>
        <option value="Thursday" @if($fuel_quota->fuel_reset_day === 'Thursday') selected @endif>Thursday</option>
        <option value="Friday" @if($fuel_quota->fuel_reset_day === 'Friday') selected @endif>Friday</option>
        <option value="Saturday" @if($fuel_quota->fuel_reset_day === 'Saturday') selected @endif>Saturday</option>
        <option value="Sunday" @if($fuel_quota->fuel_reset_day === 'Sunday') selected @endif>Sunday</option>
    </select>
</div>
            <div class="form-group">
                <label for="liters_amount">Liters Amount</label>
                <input type="text" name="liters_amount" id="liters_amount" class="form-control" value="{{ $fuel_quota->liters_amount }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

