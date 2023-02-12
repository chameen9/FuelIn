
<div class="container">
    <h1>Edit Driver</h1>
    <form action="{{ route('drivers.update', $driver->driver_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $driver->first_name }}">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $driver->last_name }}">
        </div>
        <div class="form-group">
            <label for="driver_license_number">Driver License Number:</label>
            <input type="text" class="form-control" id="driver_license_number" name="driver_license_number" value="{{ $driver->driver_license_number }}">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $driver->phone_number }}">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $driver->address }}">
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $driver->date_of_birth }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
