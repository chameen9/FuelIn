<!-- resources/views/vehicles/create.blade.php -->
@include('headoffice._navigation')

<h1>New Vehicle Registration</h1>

<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf

    <div>
        <label for="registration_number">Registration Number</label>
        <input type="text" name="registration_number" id="registration_number">
    </div>

  

    <div>
        <label for="Vehicle_Type_ID">Vehicle Type ID</label>
        <input type="text" name="Vehicle_Type_ID" id="Vehicle_Type_ID">
    </div>

    <button type="submit">Register</button>
</form>
