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
                <a href="{{url('/admin/guests')}}"><button class="btn btn-info">All Guests</button></a>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <strong>Add guest</strong>
                </div>
                <div class="card-body card-block">
                <form action="{{url('/admin/addnewguest')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="column col-6 col-md-6">
                            <div class="col col-md-5">
                            </div>
                            <div class="col-12 col-md-12">
                            <label for="text-input" class=" form-control-label">Guest Unique Number :</label>
                            <input type="text" name="userid" value="{{rand(1000,9999)}}" readonly style="font-weight: bold;">
                            </div>
                        </div>
                        <div class="column col-6 col-md-6">
                            <div class="col col-md-5">
                            <label for="text-input" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-12">
                            <input type="text" id="email" name="email" placeholder="email" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="column col-6 col-md-6">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">First Name</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="firstname" name="firstname" placeholder="First Name" class="form-control" required>
                    </div>
                    </div>
                    <div class="column col-6 col-md-6">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Last Name</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="form-control" required>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="column col-6 col-md-6">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Phone Number</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="guestphone" name="guestphone" placeholder="Phone Number" class="form-control" required>
                    </div>
                    </div>
                    <div class="column col-6 col-md-6">
                        <div class="col=12 col-md-12">
                            <label for="text-input" class=" form-control-label">Guest Login Password</label>
                        </div>
                        <div class="col-12 col-md-12">
                            <input type="text" id="guestpas" name="guestpas" class="form-control" placeholder="Guest Password" required>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="column col-6 col-md-6">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Select Floor</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <select class="form-control" name="floor" id="floor">
                            <option>Select Floor</option>
                            @foreach ($floor as $flor)
                            <option value="{{$flor->id}}">{{$flor->floornum}}</option>  
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="column col-6 col-md-6">
                        <div class="col col-md-5">
                            <label for="text-input" class=" form-control-label">Select Room</label>
                        </div>
                        <div class="col-12 col-md-12">
                            <select class="form-control" name="room" id="room">
                                <option>Select Room</option>
                            </select>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="column col-6 col-md-6">
                        <div class="col col-md-5">
                            <label for="text-input" class=" form-control-label">Check-In Date</label>
                        </div>
                        <div class="input-group col-12 col-md-12">
                            <input type="text" id="checkindate" name="checkindate" placeholder="Check-In Date" class="form-control" value="{{date('d-m-Y')}}" required>
                            <div class="input-group-addon">
                                <i class="fa fa-calendar-alt"></i>
                            </div>
                        </div>
                        </div>
                        <div class="column col-6 col-md-6">
                            <div class="col col-md-5">
                                <label for="text-input" class=" form-control-label">Check-Out Date</label>
                            </div>
                            <div class="input-group col-12 col-md-12">
                                <input type="text" id="checkoutdate" name="checkoutdate" class="form-control" placeholder="dd-mm-yy"  >
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar-alt"></i>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
                
                <div class="form-group">
                    <div class="row">
                        <div class="column col-6 col-md-6">
                        <div class="col col-md-5">
                            <label for="text-input" class=" form-control-label">Check-In Time</label>
                        </div>
                        <div class="col-12 col-md-12">
                            <input type="time" id="checkintime" name="checkintime" placeholder="Check-In Date" class="form-control" required>
                        </div>
                        </div>
                        <div class="column col-6 col-md-6">
                            <div class="col col-md-5">
                                <label for="text-input" class=" form-control-label">Check-Out Time</label>
                            </div>
                            <div class="col-12 col-md-12">
                                <input type="time" id="checkouttime" name="checkouttime" class="form-control"  >
                            </div>
                        </div>
                        </div>
                </div>

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
<script>
    $('#floor').on('change',function(){
        let fid=$('#floor').val();
        $.ajax({
            url:'{{route("getroom")}}',
            type:'post',
            dataType:'json',
            data:{
                _token:'{{csrf_token()}}',
                id:fid,
            },
            success:function(result){
                $('#room').html('<option value="">Select Room</option>');
                $.each(result.roomnum,function(key,value){
                $("#room").append('<option value="'+value.id+'">'+value.roomnum+'</option>');
                }); 
            }
        });
    });
</script>
<script>
  $(document).ready(function(){
    $( "#checkindate" ).datepicker();
    $( "#checkindate" ).on( "change", function() {
        $( "#checkindate" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
    });

    $( "#checkoutdate" ).datepicker();
    $( "#checkoutdate" ).on( "change", function() {
        $( "#checkoutdate" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
    });
  });
</script>
