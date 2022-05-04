@extends("layout.adminmaster")

@section("contain")


<center><h1 style="text-decoration:underline">Category Data :-</h1>
<a href="/categorymaster/create" style="font-size:20px;"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Category Name</th>
	<th>Action</th>
	</tr>
	@foreach($category as $cat)
	<tr>
	<td>{{$cat->cname}}</td>
	<td>
	<a href="/categorymaster/{{$cat->id}}/edit">Edit</a> / <a href="/categorymaster/{{$cat->id}}/destroy">Delete</a>
	</td>
	</tr>
	@endforeach
</table></center>
@stop