
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Fuel Stock</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('fuel-stocks.update', $fuelStock->id) }}">
                            @csrf
                            @method('PUT')
<!-- 
                            <div class="form-group row">
                                <label for="fuel_type_id" class="col-md-4 col-form-label text-md-right">Fuel Type</label>

                                <div class="col-md-6">
                                    <select id="fuel_type_id" class="form-control @error('fuel_type_id') is-invalid @enderror" name="fuel_type_id" required>
                                        @foreach($fuelTypes as $fuelType)
                                            <option value="{{ $fuelType->id }}" @if($fuelStock->fuel_type_id === $fuelType->Fuel_Type_ID) selected @endif>{{ $fuelType->Type_Name }}</option>
                                        @endforeach
                                    </select>

                                    @error('fuel_type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <label for="liters" class="col-md-4 col-form-label text-md-right">Liters</label>

                                <div class="col-md-6">
                                    <input id="liters" type="number" class="form-control @error('liters') is-invalid @enderror" name="liters" value="{{ old('liters', $fuelStock->liters) }}" required autocomplete="liters" autofocus>

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
                                        Update Fuel Stock
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

