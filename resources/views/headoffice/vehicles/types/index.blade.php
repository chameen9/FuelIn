<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type Name</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($vehicleTypes as $vehicleType)
      <tr>
        <th scope="row">{{ $vehicleType->Vehicle_Type_ID }}</th>
        <td>{{ $vehicleType->Type_Name }}</td>
        <td>{{ $vehicleType->Description }}</td>
        <td>
          <a href="{{ route('vehicle_types.edit', $vehicleType->Vehicle_Type_ID) }}" class="btn btn-primary">Edit</a>
          <form action="{{ route('vehicle_types.destroy', $vehicleType->Vehicle_Type_ID) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<a href="{{ route('vehicle_types.create') }}" class="btn btn-success">Add New Vehicle Type</a>
