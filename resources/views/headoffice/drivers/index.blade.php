<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Driver License Number</th>
      <th>Phone Number</th>
      <th>Address</th>
      <th>Date of Birth</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($drivers as $driver)
      <tr>
        <td>{{ $driver->driver_id }}</td>
        <td>{{ $driver->first_name }}</td>
        <td>{{ $driver->last_name }}</td>
        <td>{{ $driver->driver_license_number }}</td>
        <td>{{ $driver->phone_number }}</td>
        <td>{{ $driver->address }}</td>
        <td>{{ $driver->date_of_birth }}</td>
        <td>
          <a href="{{ route('drivers.show', $driver->driver_id) }}" class="btn btn-info btn-sm">Show </a>
          <a href="{{ route('drivers.edit', $driver->driver_id) }}" class="btn btn-primary btn-sm"> Edit </a>
          <form action="{{ route('drivers.destroy', $driver->driver_id) }}" method="POST" style="display:inline-block;">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
