<!-- resources/views/customers/dashboard.blade.php -->

<h1>Customer Dashboard</h1>

<p>Welcome to your dashboard, {{ Auth::user()->first_name }}!</p>
<a href="{{ route('customers.vehicles.index') }}" class="btn btn-primary">Manage My Vehicles</a>