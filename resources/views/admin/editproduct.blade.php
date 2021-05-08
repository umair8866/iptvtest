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
                <a href="{{url('/admin/products')}}"><button class="btn btn-info">Products</button></a>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <strong>Edit Product</strong>
                </div>
                <div class="card-body card-block">
                <form action="{{url('/admin/editnewproduct/'.$edit_product->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Product Name</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="productname" name="productname" value="{{$edit_product->name}}" placeholder="Product Name" class="form-control" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Product Price</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="text" id="productprice" name="productprice" value="{{$edit_product->price}}" placeholder="Product Price" class="form-control" required>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Product Category</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <select class="form-control" name="productcategory">
                            <option>Select Category</option>
                            @foreach ($productcategory as $pcat)
                            @if ($edit_product->pcat_id == $pcat->id)
                            <option selected value="{{$pcat->id}}">{{$pcat->name}}</option>
                            @else
                            <option value="{{$pcat->id}}">{{$pcat->name}}</option>  
                            @endif 
                            @endforeach
                        </select>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col col-md-5">
                        <label for="text-input" class=" form-control-label">Product Picture</label>
                    </div>
                    <div class="col-12 col-md-12">
                        <input type="file" id="productpic" name="productpic" class="form-control" >
                    </div>
                    <div class="col-12 col-md-12">
                        <img src="{{asset('images/'.$edit_product->picture)}}" height="100px" width="100px">
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
