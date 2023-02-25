
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Edit Fuel Price</h1>
                <form action="{{ route('fuelprices.update', ['fuelprice' => $fuelPrice->Fuel_Type_ID]) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $fuelPrice->Fuel_Type_ID }}">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ $fuelPrice->Price }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Fuel Price</button>
                </form>
            </div>
        </div>
    </div>

