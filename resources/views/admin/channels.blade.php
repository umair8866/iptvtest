@include('admin/includes/header')
@include('admin/includes/sidebar')        

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <a href="{{url('/admin/addchannel')}}"><button class="btn btn-info">Add Channel</button></a>
            <br><br>
            <div class="table-responsive m-b-40">
            <table id="channeltable" class="table table-borderless table-data3">
            <thead class="white">
            <tr>
            <td>Name</td>
            <td>Url</td>
            <td>Logo</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($channels as $channel)
            <tr>
            <td>{{$channel->name}}</td>
            <td>{{$channel->url}}</td>
            <td><img src="{{asset('images/'.$channel->logo)}}" class="img-100"/></td>
            <td><a href="{{url('/admin/editchannel/'.$channel->id)}}"><button class='btn btn-success'>Edit</button></a></td>
            <td><a href="{{url('/admin/deletechannel/'.$channel->id)}}" onclick="return confirm('Are you Sure?')"><button class='btn btn-danger' >Delete</button></a></td>
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
    $('#channeltable').DataTable();
});
</script>