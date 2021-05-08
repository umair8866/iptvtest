@include('admin/includes/header')
@include('admin/includes/sidebar')        

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <a href="{{url('/admin/addmovie')}}"><button class="btn btn-info">Add Movie</button></a>
            <br><br>
            <div class="table-responsive m-b-40">
            <table id="movietable" class="table table-borderless table-data3">
            <thead class="white">
            <tr>
            <td>Name</td>
            <td>Category</td>
            <td>Movie</td>
            <td>Poster</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($movies as $movie)
            <tr>
            <td>{{$movie->name}}</td>
            <td>{{$movie->getcat->name}}</td>
            {{-- <td><video src="{{asset('videos/'.$movie->movie)}}" height="150px" width="150px" controls></td> --}}
            <td>{{$movie->movie}}</td>
            <td><img src="{{asset('images/'.$movie->poster)}}" class="img-100"/></td>
            <td><a href="{{url('/admin/editmovie/'.$movie->id)}}"><button class='btn btn-success'>Edit</button></a></td>
            <td><a href="{{url('/admin/deletemovie/'.$movie->id)}}" onclick="return confirm('Are you Sure?')"><button class='btn btn-danger' >Delete</button></a></td>
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
    $('#movietable').DataTable();
});
</script>