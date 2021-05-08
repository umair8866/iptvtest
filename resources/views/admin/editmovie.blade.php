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
                <a href="{{url('/admin/movies')}}"><button class="btn btn-info">Movies</button></a>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <strong>Edit Movie</strong>
                </div>
                <div class="card-body card-block">
                <form action="{{url('/admin/editnewmovie/'.$edit_movie->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Movie Name</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="moviename" name="moviename" value="{{$edit_movie->name}}" placeholder="Movie Name" class="form-control" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Category</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <select class="form-control" name="category">
                            <option>Select Category</option>
                            @foreach ($catgory as $cat)
                            @if ($edit_movie->cat_id == $cat->id)
                            <option selected value="{{$cat->id}}">{{$cat->name}}</option>
                            @else
                            <option value="{{$cat->id}}">{{$cat->name}}</option>  
                            @endif 
                            @endforeach
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Movie Poster</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="poster" name="poster" class="form-control" >
                    </div>
                    <div class="col-12 col-md-12">
                        <img src="{{asset('images/'.$edit_movie->poster)}}" height="100px" width="100px">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Movie</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="movie" name="movie" class="form-control" >
                    </div>
                    <div class="col-12 col-md-12">
                        <video src="{{asset('videos/'.$edit_movie->movie)}}" height="150px" width="150px" controls>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-12 col-md-12">
                        <input type="submit" id="submit" name="submit" class="btn btn-block btn-primary" value="Save">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>

@include('admin/includes/footer')
