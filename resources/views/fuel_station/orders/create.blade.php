
  <h1>Create New Order</h1>
  <form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="Fuel_Station_ID">Fuel Station:</label>
    <select name="Fuel_Station_ID" id="Fuel_Station_ID" class="form-control">
      <option value="">Select Fuel Station</option>
      @foreach ($fuelStations as $fuelStation)
        <option value="{{ $fuelStation->Fuel_Station_ID }}">{{ $fuelStation->Fuel_Station_Name }}</option>
      @endforeach
    </select>
  </div>
    <div class="form-group">
      <label for="Fuel_Type_ID">Fuel Type:</label>
      <select name="Fuel_Type_ID" id="Fuel_Type_ID" class="form-control">
        <option value="">Select Fuel Type</option>
        @foreach ($fuelTypes as $fuelType)
          <option value="{{ $fuelType->Fuel_Type_ID }}">{{ $fuelType->Type_Name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="liters_quantity">Liters Quantity:</label>
      <input type="text" name="liters_quantity" id="liters_quantity" class="form-control" placeholder="Enter liters quantity">
    </div>
 
    <button type="submit" class="btn btn-primary">Create Order</button>
  </form>
