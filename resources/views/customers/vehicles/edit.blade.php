<!--vehicle_types/edit.blade.php-->
<h1>Edit Vehicle</h1>

<form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="Vehicle_Number">Vehicle Number:</label>
        <input type="text" name="Vehicle_Number" id="Vehicle_Number" class="form-control" value="{{ $vehicle->Vehicle_Number }}">
    </div>

    <!-- Add more form fields as per your needs -->

    <button type="submit" class="btn btn-primary">Update</button>
</form>
