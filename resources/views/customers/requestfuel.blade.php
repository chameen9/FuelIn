<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card border-white" style="padding: 20px;">
                <h3 class="card-title">Request Fuel</h3>
                <hr>
                <div class="card-body">
                    <form method="post" action="{{ route('fuel-station.request-fuel') }}">
                        @csrf
                        <div class="form-group">
                            <label for="registration_number">Registration Number:</label>
                            <input type="text" class="form-control" id="registration_number" name="registration_number" placeholder="Enter your registration number">
                        </div>
                        <div class="form-group">
                        <label for="fuel_type">Fuel Type:</label>
                        <select class="form-control" id="fuel_type" name="fuel_type">
                            <option value="">-- Select Fuel Type --</option>
                            @foreach ($fuelTypes as $fuelType)
                                <option value="{{ $fuelType->id }}">{{ $fuelType->name }}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Request Fuel</button>
                        </div>
                    </form>
                    <hr>
                    @if (isset($token))
                        <div class="alert alert-success" role="alert">
                            Your fuel request has been successfully submitted. Your token is {{ $token->token }}, and you can expect to receive your fuel {{ $token->expected_delivery_time }} with a tolerance of 3 hours.
                        </div>
                    @endif
                    @if (isset($message))
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
