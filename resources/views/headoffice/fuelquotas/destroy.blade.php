
    <div class="container">
        <h1>Delete Fuel Quota</h1>
        <p>Are you sure you want to delete this fuel quota?</p>
        <form method="POST" action="{{ route('fuelquotas.destroy', ['id' => $fuel_quota->Fuel_Quota_ID]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
