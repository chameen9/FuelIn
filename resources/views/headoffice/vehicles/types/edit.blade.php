<form action="{{ route('vehicle_types.update', $vehicleType->Vehicle_Type_ID) }}" method="POST">
  @csrf
  @method('PATCH')

  <div class="form-group">
    <label for="Type_Name">Type Name</label>
    <input type="text" name="Type_Name" id="Type_Name" class="form-control" value="{{ $vehicleType->Type_Name }}">
  </div>

  <div class="form-group">
    <label for="Description">Description</label>
    <input type="text" name="Description" id="Description" class="form-control" value="{{ $vehicleType->Description }}">
  </div>

  <button type="submit" class="btn btn-primary">Update Vehicle Type</button>
</form>
