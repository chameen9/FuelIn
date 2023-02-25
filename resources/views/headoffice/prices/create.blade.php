
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Create Fuel Price</h1>
                <form method="POST" action="{{ route('fuelprices.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="fuel-type-id">Fuel Type</label>
                        <select name="fuel_type_id" id="fuel-type-id" class="form-control">
                            @foreach ($fuelTypes as $fuelType)
                                <option value="{{ $fuelType->Fuel_Type_ID }}">{{ $fuelType->Type_Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Fuel Price</button>
                </form>
            </div>
        </div>
    </div>

