@include('admin/includes/header')
@include('admin/includes/sidebar')   

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <a href="{{url('/admin/pcategoires')}}"><button class="btn btn-info">All Product Categories</button></a>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <strong>Edit Category</strong>
                </div>
                <div class="card-body card-block">
                <form action="{{url('/admin/editnewpcategory/'.$edit_pcategory->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Product Category Name</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="pcategoryname" name="pcategoryname" value="{{$edit_pcategory->name}}" placeholder="Category Name" class="form-control" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Time</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="pcategorytime" name="pcategorytime" value="{{$edit_pcategory->time}}" placeholder="Category Name" class="form-control" required>
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
