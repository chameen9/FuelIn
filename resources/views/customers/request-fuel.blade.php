<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card border-white" style="padding: 20px;">
                <h3 class="card-title">Request Fuel</h3>
                <hr>
                <div class="card-body">
                    <form method="post" action="{{ route('customer.request-fuel') }}">
                        @csrf
                        <div class="form-group">
                        <label for="vehicle_id">Vehicle:</label>
                        <select class="form-control" id="vehicle_id" name="vehicle_id">
                            <option value="">-- Select Vehicle --</option>
                            @foreach ($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}">{{ $vehicle->registration_number }}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="fuel_type">Fuel Type:</label>
                            <select class="form-control" id="fuel_type_id" name="fuel_type_id">
                                <option value="">-- Select Fuel Type --</option>
                                @foreach ($fuelTypes as $fuelType)
                                    <option value="{{ $fuelType->Fuel_Type_ID }}">{{ $fuelType->Type_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="fuel_station">Fuel Station:</label>
                        <select class="form-control" id="station_id" name="station_id">
                            <option value="">-- Select Fuel Station --</option>
                            @foreach ($fuelStations as $fuelStation)
                                <option value="{{ $fuelStation->Fuel_Station_ID }}">{{ $fuelStation->Fuel_Station_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="liters_required">Liters Required:</label>
                        <input type="number" step="0.1" class="form-control" id="liters_required" name="liters_required" placeholder="Enter liters required">
                    </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Request Fuel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
