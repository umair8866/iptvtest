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
                <a href="{{url('/admin/company')}}"><button class="btn btn-info">Company</button></a>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <strong>Edit Company</strong>
                </div>
                <div class="card-body card-block">
                <form action="{{url('/admin/editnewcompany/'.$edit_company->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Company Name</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="companyname" name="companyname" value="{{$edit_company->cname}}" placeholder="Channel Name" class="form-control" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Company Logo</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="clogo" name="clogo" class="form-control" >
                    </div>
                    <div class="col-12 col-md-12">
                        <img src="{{asset('images/'.$edit_company->clogo)}}" height="100px" width="100px">
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
