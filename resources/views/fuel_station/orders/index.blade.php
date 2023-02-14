<a href="{{ route('orders.create') }}" class="btn btn-success">Create New Order</a>
<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fuel Type</th>
      <th scope="col">Liters Quantity</th>
      <th scope="col">Request Date</th>
      <th scope="col">Approval Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $order)
      <tr>
        <th scope="row">{{ $order->Fuel_Request_ID }}</th>

        <td>{{ $order->fuelType->Fuel_Type_Name }}</td>
        <td>{{ $order->liters_quantity }}</td>
        <td>{{ $order->Request_Date }}</td>
        <td>{{ $order->Approval_Status }}</td>
        <td>
          <a href="{{ route('orders.edit', $order->Fuel_Request_ID) }}" class="btn btn-primary btn-sm">Edit</a>
          <form action="{{ route('orders.destroy', $order->Fuel_Request_ID) }}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>



