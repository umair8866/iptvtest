@include('admin/includes/header')
@include('admin/includes/sidebar')        

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
            <div class="table-responsive m-b-40">
            <table id="companytable" class="table table-borderless table-data3">
            <thead class="white">
            <tr>
            <td>Name</td>
            <td>Logo</td>
            <td>Edit</td>
            <td>Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
            <tr>
            <td>{{$company->cname}}</td>
            <td><img src="{{asset('images/'.$company->clogo)}}" class="img-101"/></td>
            <td><a href="{{url('/admin/editcompany/'.$company->id)}}"><button class='btn btn-success'>Edit</button></a></td>
            <td><a href="{{url('/admin/deletecompany/'.$company->id)}}" onclick="return confirm('Are you Sure?')"><button class='btn btn-danger' >Delete</button></a></td>
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
    $('#companytable').DataTable();
});
</script>