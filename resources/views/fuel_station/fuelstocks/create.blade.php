
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Create New Fuel Stock</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('fuel-stocks.store') }}">
                            @csrf

                            <div class="form-group row">
                            <label for="fuel_station_id" class="col-md-4 col-form-label text-md-right">Fuel Station</label>

                            <div class="col-md-6">
                                <select id="fuel_station_id" name="fuel_station_id" class="form-control @error('fuel_station_id') is-invalid @enderror">
                                    <option value="">-- Select Fuel Station --</option>
                                    @foreach ($fuelStations as $fuelStation)
                                        <option value="{{ $fuelStation->Fuel_Station_ID }}">{{ $fuelStation->Fuel_Station_Name }}</option>
                                    @endforeach
                                </select>

                                @error('fuel_station_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="fuel_type_id" class="col-md-4 col-form-label text-md-right">Fuel Type</label>

                                <div class="col-md-6">
                                    <select name="fuel_type_id" id="fuel_type_id" class="form-control @error('fuel_type_id') is-invalid @enderror" required>
                                        <option value="">-- Select Fuel Type --</option>
                                        @foreach($fuelTypes as $fuelType)
                                            <option value="{{ $fuelType->Fuel_Type_ID }}" {{ old('Fuel_Type_ID') == $fuelType->Fuel_Type_ID ? 'selected' : '' }}>{{ $fuelType->Type_Name }}</option>
                                        @endforeach
                                    </select>

                                    @error('fuel_type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="liters" class="col-md-4 col-form-label text-md-right">Liters</label>

                                <div class="col-md-6">
                                    <input id="liters" type="number" class="form-control @error('liters') is-invalid @enderror" name="liters" value="{{ old('liters') }}" required>

                                    @error('liters')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create Fuel Stock
                                    </button>
                                    <a href="{{ route('fuel-stocks.index') }}" class="btn btn-link">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
