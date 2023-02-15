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
        <th scope="row">{{ $order->order_id }}</th>

        <td>{{ $order->fuelType->Type_Name }}</td>
        <td>{{ $order->liters_quantity }}</td>
        <td>{{ $order->created_at }}</td>
        <td>{{ $order->Approval_Status }}</td>
        <td>
          <!-- <a href="{{ route('orders.edit', $order->order_id) }}" class="btn btn-primary btn-sm">Edit</a> -->
          <form action="{{ route('orders.destroy', $order->order_id) }}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>



