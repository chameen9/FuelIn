<form action="{{ route('vehicle_types.store') }}" method="POST">
  @csrf

  <div class="form-group">
    <label for="Type_Name">Type Name</label>
    <input type="text" name="Type_Name" id="Type_Name" class="form-control">
  </div>

  <div class="form-group">
    <label for="Description">Description</label>
    <input type="text" name="Description" id="Description" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Create Vehicle Type</button>
</form>
