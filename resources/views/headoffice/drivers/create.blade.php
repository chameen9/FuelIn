<form action="{{ route('drivers.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" id="first_name" name="first_name" required>
    </div>
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required>
    </div>
    <div class="form-group">
        <label for="driver_license_number">Driver's License Number:</label>
        <input type="text" class="form-control" id="driver_license_number" name="driver_license_number" required>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="form-group">
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
