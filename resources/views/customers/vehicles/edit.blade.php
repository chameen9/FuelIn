<!--vehicle_types/edit.blade.php-->
<h1>Edit Vehicle</h1>

<form action="{{ route('customers.vehicles.update', $vehicle->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="form-group">
    <label for="Vehicle_Number">Vehicle Number:</label>
    <input type="text" name="Vehicle_Number" id="Vehicle_Number" class="form-control" value="{{ $vehicle->registration_number }}">
</div>

<div class="form-group">
    <label for="Vehicle_Type_ID">Vehicle Type:</label>
    <select name="Vehicle_Type_ID" id="Vehicle_Type_ID" class="form-control">
        @foreach ($vehicleTypes as $vehicleType)
            <option value="{{ $vehicleType->Vehicle_Type_ID }}" {{ $vehicleType->id == $vehicle->Vehicle_Type_ID ? 'selected' : '' }}>{{ $vehicleType->Type_Name }}</option>
        @endforeach
    </select>
</div>

<!-- Add more form fields as per your needs -->

<button type="submit" class="btn btn-primary">Update</button>


    <!-- Add more form fields as per your needs -->

   
</form>
