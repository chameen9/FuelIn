<form method="post" action="{{ route('customers.store') }}">
  @csrf
  <div class="form-group">
    <label for="first_name">First Name:</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name:</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
  </div>
  <div class="form-group">
    <label for="contact_number">Contact Number:</label>
    <input type="text" class="form-control" id="contact_number" name="contact_number">
  </div>
  <div class="form-group">
    <label for="national_identity_number">National Identity Number:</label>
    <input type="text" class="form-control" id="national_identity_number" name="national_identity_number">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
