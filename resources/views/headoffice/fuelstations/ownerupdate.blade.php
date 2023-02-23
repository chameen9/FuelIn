<section class="section dashboard">
<div class="form-group">
    <label for="owner_id">Current Owner:</label>
    <div>{{ $firstName }} {{ $lastName }}</div>
</div>
   
<div class="row">

        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card border-white" style="padding: 20px;">
                <h3 class="card-title">Fuel Station Owner Update<span> </span></h3>
                <hr>
                <div class="card-body">
                    <form action="{{ route('fuelstation.confirmUpdate', $fuel_station_id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="owner_id">Select Owner:</label>
                            <select class="form-control" id="owner_id" name="owner_id">
                                <option value="">-- Select Owner --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" @if ($user->id == old('owner_id', $fuelstation->Owner_ID)) selected @endif>{{ $user->first_name }} {{ $user->last_name }} ({{ $user->email }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Owner</button>
                        </div>
                    </form>
                    <hr>
                    <form action="{{ route('fuelstation.ownerupdate', $fuelstation->Fuel_Station_ID) }}" method="POST">
                    @csrf  
                    <div class="form-group">
                            <label for="search">Search:</label>
                            <input type="text" class="form-control" id="search" name="search" value="{{ $search }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                    <hr>
                    <div class="table-responsive" style="margin:8px">
                        <table class="table table-striped table-hover">
                            <thead class="thead-secondary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->type }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination justify-content-center">
                        {{ $users->appends(['search' => $search])->links() }}
                    </div>
                </div>
            </div>
        </div>
    
    </div>

</section>
