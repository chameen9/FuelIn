<div class="container">
        <h1>Create Token</h1>
        <form method="POST" action="{{ route('tokens.save',$request->fuel_request_id) }}">
            @csrf
            <div class="form-group">
            <label for="customer_id">Customer ID</label>
            <input type="number" readonly="readonly" class="form-control" id="customer_id" name="customer_id" value="{{ $fuelRequest->Customer_ID }}" required>
        </div>

        <br>
            <div class="form-group">
                <label for="payment_status_id">Payment Status ID</label>
                <input type="number" readonly="readonly" class="form-control" id="payment_status_id" name="payment_status_id" value="1" required>
            </div>
            <br>
            <div class="form-group">
                <label for="fuel_type_id">Fuel Type</label>
                <select class="form-control" id="fuel_type_id" name="fuel_type_id">
                @foreach($fuelTypes as $fuelType)
                    @if($fuelType->Fuel_Type_ID == $fuelRequest->Fuel_Type_ID)
                        <option value="{{ $fuelType->Fuel_Type_ID }}" selected>{{ $fuelType->Type_Name }}</option>
                    @endif
                @endforeach
            </select>

            </div>
            <br>
            <div class="form-group">
            <label for="liters">Liters</label>
            <input type="number" readonly="readonly" class="form-control" id="liters" name="liters" step="0.01" value="{{ $fuelRequest->Requested_Liters }}" required>
        </div>
        <br>
            <div class="form-group">
                <label for="scheduled_filling_time">Scheduled Filling Time</label>
                <input type="time" class="form-control" id="scheduled_filling_time" name="scheduled_filling_time" required>
            </div>
            <br>
            <div class="form-group">
                <label for="scheduled_filling_date">Scheduled Filling Date</label>
                <input type="date" class="form-control" id="scheduled_filling_date" name="scheduled_filling_date" required>
            </div>
            <br>
            <div class="form-group">
                <label for="request_id">Fuel Request ID</label>
                <input type="number" class="form-control" readonly="readonly" id="request_id" name="request_id" value="{{$fuelRequest->Fuel_Request_ID}}" required>
            </div>
            <br>
            <div class="form-group">
            <label for="tolerance_hours">Tolerance Hours</label>
            <input type="number" class="form-control" id="tolerance_hours" name="tolerance_hours" value="{{ $fuelRequest->tolerance_hours }}" required>
        </div>
        <br>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>