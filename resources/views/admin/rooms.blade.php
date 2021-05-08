@include('admin/includes/header')
@include('admin/includes/sidebar')        

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <a href="{{url('/admin/addroom')}}"><button class="btn btn-info">Add Room</button></a>
            <br><br>
            <div class="table-responsive m-b-40">
            <table id="roomtable" class="table table-borderless table-data3">
            <thead class="white">
            <tr>
            <td>Room Number</td>
            <td>Floor Number</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms as $room)
            <tr>
            <td>{{$room->roomnum}}</td>
            <td>{{$room->getfloor->floornum}}</td>
            <td><a href="{{url('/admin/editroom/'.$room->id)}}"><button class='btn btn-success'>Edit</button></a></td>
            <td><a href="{{url('/admin/deleteroom/'.$room->id)}}" onclick="return confirm('Are you Sure?')"><button class='btn btn-danger' >Delete</button></a></td>
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
    $('#roomtable').DataTable();
});
</script>