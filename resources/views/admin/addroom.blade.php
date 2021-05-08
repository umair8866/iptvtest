@include('admin/includes/header')
@include('admin/includes/sidebar')   

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="{{url('/admin/rooms')}}"><button class="btn btn-info">Rooms</button></a>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <strong>Add Room</strong>
                </div>
                <div class="card-body card-block">
                <form action="{{url('/admin/addnewroom')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Room Number</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="roomnum" name="roomnum" placeholder="Room Number" class="form-control" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Floor</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <select class="form-control" name="floor">
                            <option>Select Floor</option>
                            @foreach ($floor as $flor)
                            <option value="{{$flor->id}}">{{$flor->floornum}}</option>  
                            @endforeach
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-12 col-md-12">
                        <input type="submit" id="submit" name="submit" class="btn btn-block btn-primary" value="Save">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('admin/includes/footer')