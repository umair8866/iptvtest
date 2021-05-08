@include('admin/includes/header')
@include('admin/includes/sidebar')        

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <a href="{{url('/admin/addguest')}}"><button class="btn btn-info">Add Guest</button></a>
            <br><br>
            <div class="table-responsive m-b-40">
            <table id="guesttable" class="table table-borderless table-data3">
            <thead class="white">
            <tr>
            <td>Guest ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Floor/Room</td>
            <td>CheckIn</td>
            <td>CheckOut</td>
            <td>View Details</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($guests as $guest)
            <tr>
            <td>{{$guest->userid}}</td>
            <td>{{$guest->firstname}} &nbsp; {{$guest->lastname}}</td>
            <td>{{$guest->phone}}</td>
            <td>{{$guest->getfloornum->floornum}}  /  {{$guest->getroomnum->roomnum}}</td>
            <td>{{$guest->checkin}}</td>
            <td>{{$guest->checkout}}</td>
            <td><a href="{{url('/admin/viewguest/'.$guest->id)}}"><button class='btn btn-success'><i class="fa fa-eye"></i></button></a></td>
            <td><a href="{{url('/admin/editguest/'.$guest->id)}}"><button class='btn btn-success'>Edit</button></a></td>
            <td><a href="{{url('/admin/deleteguest/'.$guest->id)}}" onclick="return confirm('Are you Sure?')"><button class='btn btn-danger' >Delete</button></a></td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>

@include('admin/includes/footer')
<script>
$(document).ready(function(){
    $('#guesttable').DataTable();
});
</script>