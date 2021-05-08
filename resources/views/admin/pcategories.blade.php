@include('admin/includes/header')
@include('admin/includes/sidebar')        

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <a href="{{url('/admin/addpcategory')}}"><button class="btn btn-info">Add Product Category</button></a>
            <br><br>
            <div class="table-responsive m-b-40">
            <table id="categorytable" class="table table-borderless table-data3">
            <thead class="white">
            <tr>
            <td>Name</td>
            <td>Time</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($pcategories as $pcat)
            <tr>
            <td>{{$pcat->name}}</td>
            <td>{{$pcat->time}}</td>
            <td><a href="{{url('/admin/editpcategory/'.$pcat->id)}}"><button class='btn btn-success'>Edit</button></a></td>
            <td><a href="{{url('/admin/deletepcategory/'.$pcat->id)}}" onclick="return confirm('Are you Sure?')"><button class='btn btn-danger' >Delete</button></a></td>
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
    $('#categorytable').DataTable();
});
</script>