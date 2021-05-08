@include('admin/includes/header')
@include('admin/includes/sidebar')        

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <a href="{{url('/admin/addproduct')}}"><button class="btn btn-info">Add Product</button></a>
            <br><br>
            <div class="table-responsive m-b-40">
            <table id="producttable" class="table table-borderless table-data3">
            <thead class="white">
            <tr>
            <td>Name</td>
            <td>Category</td>
            <td>Price</td>
            <td>Picture</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->getpcat->name}}</td>
            <td>{{$product->price}}</td>
            <td><img src="{{asset('images/'.$product->picture)}}" class="img-100"/></td>
            <td><a href="{{url('/admin/editproduct/'.$product->id)}}"><button class='btn btn-success'>Edit</button></a></td>
            <td><a href="{{url('/admin/deleteproduct/'.$product->id)}}" onclick="return confirm('Are you Sure?')"><button class='btn btn-danger' >Delete</button></a></td>
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
    $('#producttable').DataTable();
});
</script>