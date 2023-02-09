<!DOCTYPE html>
<html>
    <head>
        <title>FuelIn | Fuel Stations</title>
        <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

        <!-- Google Fonts -->
        <!-- <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

        <!-- Vendor CSS Files -->
        <!-- <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="Assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="Assets/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="Assets/quill/quill.snow.css" rel="stylesheet">
        <link href="Assets/quill/quill.bubble.css" rel="stylesheet">
        <link href="Assets/remixicon/remixicon.css" rel="stylesheet">
        <link href="Assets/simple-datatables/style.css" rel="stylesheet"> -->

        <!-- Template Main CSS File -->
        <!-- <link href="/css/style.css" rel="stylesheet"> -->

        <!-- Javascript -->
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.0/dist/umd/popper.min.js" integrity="sha384-aMk7v90ZgPWxgK5x5xzD5kvry8Wyj4/lQbKzm5fvh8Wm7OMz/MnHx9XtLk2c1Nj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-e/ai8Z5fKQCMgj/nLhZpvAv0dh/FZjmS48NDx5jv+X9NM/8mOh4KjfncJgvBmK5" crossorigin="anonymous"></script> -->

        <!-- Latest compiled JavaScript -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    </head>
    <body style="overflow-x: hidden;">
        @include('headoffice._navigation')
     
        <div class="container">
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aaa">
               Add new Fuel Station
            </button>
         
            <div class="table-responsive" style="margin:8px">
               <table class="table table-striped table-hover">
                  <thead class="thead-secondary">
                     <tr>
                        <th>Station ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Scheduled Delivery Date</th>
                        <th>Scheduled Delivery Time</th>
                        <th>Population</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($fuelstations as $fuelstation)
                     <tr>
                        <td>{{ $fuelstation->Fuel_Station_ID }}</td>
                        <td>{{ $fuelstation->Fuel_Station_Name }}</td>
                        <td>{{ $fuelstation->Fuel_Station_Location	 }}</td>
                        <td>{{ $fuelstation->Scheduled_Delivery_Date }}</td>
                        <td>{{ $fuelstation->Scheduled_Delivery_Time }}</td>
                        <td>{{ $fuelstation->Population_density	 }}</td>
                        <td>
                            <a type="button" href="{{url('/station/viewupdate/'.$fuelstation->Fuel_Station_ID.'')}}" class="btn btn-success">Update</a>
                            <a type="button" href="{{url('/station/delete/'.$fuelstation->Fuel_Station_ID.'')}}" class="btn btn-danger">Delete</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         
            <!-- Add new Modal -->
            <div class="modal fade" id="aaa" tabindex="-1" role="dialog" aria-labelledby="fuelstationregmodalTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="fuelstationregmodalTitle">Add new Fuel Station</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form action="{{route('fuelstations.addnew')}}" method="post">
                        {{csrf_field()}}
                            <!-- <label>Station ID</label>
                            <input type="number" name="Fuel_Station_ID" class="form-control" required min="1">
                            <br> -->
                            <label>Station Name</label>
                            <input type="text" name="Fuel_Station_Name" class="form-control" required>
                            <br>
                            <label>Location</label>
                            <input type="text" name="Fuel_Station_Location" class="form-control" required>
                            <br>
                            <!-- <div class="row">
                                <div class="col-6">
                                    <label>Scheduled Delivery Date</label>
                                    <input type="date" name="Scheduled_Delivery_Date" class="form-control" required>
                                </div>
                                <div class="col-6">
                                    <label>Scheduled Delivery Time</label>
                                    <input type="time" name="Scheduled_Delivery_Time" class="form-control" required>
                                </div>
                            </div> -->
                            <br>
                            <label>Population Density</label>
                            <input type="number" name="Population_density" class="form-control" required>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                     </div>
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