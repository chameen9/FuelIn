<!DOCTYPE html>
<html>
    <head>
        <title>FuelIn | Update Fuel Stations</title>
        <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body style="overflow-x: hidden;">
        @include('headoffice._navigation')
        <br><br>
        
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Update Fuel Station</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('fuelstations.update')}}" method="post">
                        @foreach ($uptodatestation as $fuelstation)
                        {{csrf_field()}}
                            <label>Station ID</label>
                            <input type="number" name="Fuel_Station_ID" class="form-control" required min="1" value="{{ $fuelstation->Fuel_Station_ID }}" readonly>
                            <br>
                            <label>Station Name</label>
                            <input type="text" name="Fuel_Station_Name" class="form-control" required value="{{ $fuelstation->Fuel_Station_Name }}">
                            <br>
                            <label>Location</label>
                            <input type="text" name="Fuel_Station_Location" class="form-control" required value="{{ $fuelstation->Fuel_Station_Location	 }}">
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <label>Scheduled Delivery Date</label>
                                    <input type="date" name="Scheduled_Delivery_Date" class="form-control" required value="{{ $fuelstation->Scheduled_Delivery_Date }}">
                                </div>
                                <div class="col-6">
                                    <label>Scheduled Delivery Time</label>
                                    <input type="time" name="Scheduled_Delivery_Time" class="form-control" required value="{{ $fuelstation->Scheduled_Delivery_Time }}">
                                </div>
                            </div>
                            <br>
                            <label>Population Density</label>
                            <input type="number" name="Population_density" class="form-control" min="1" required value="{{ $fuelstation->Population_density	 }}">
                            <br>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-secondary" href="{{route('fuelstations.index')}}">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
            

            @if ($message = Session::get('success'))
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Success</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function() {
                        $('#successModal').modal('show');
                    });
                </script>
            @endif

            @if ($msg = Session::get('error'))
                <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger">
                                    {{ $msg }}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function() {
                        $('#errorModal').modal('show');
                    });
                </script>
            @endif

            @if (count($errors)>0)
                <div class="modal fade" id="valModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        <a href="#"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a></button>
                                    @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function() {
                        $('#valModal').modal('show');
                    });
                </script>
            @endif


        </div>
        
     
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Latest compiled JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>