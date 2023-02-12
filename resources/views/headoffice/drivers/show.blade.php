
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2> Show Driver Details</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('drivers.index') }}"> Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>ID:</strong>
        {{ $driver->driver_id }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>First Name:</strong>
        {{ $driver->first_name }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Last Name:</strong>
        {{ $driver->last_name }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Driver License Number:</strong>
        {{ $driver->driver_license_number }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Phone Number:</strong>
        {{ $driver->phone_number }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Address:</strong>
        {{ $driver->address }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Date of Birth:</strong>
        {{ $driver->date_of_birth }}
      </div>
    </div>
  </div>

