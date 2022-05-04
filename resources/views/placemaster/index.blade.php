@extends("layout.adminmaster")

@section("contain")


<center><h1 style="text-decoration:underline">Place Data :-</h1>
<a href="/placemaster/create" style="font-size:20px"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Landmark</th>
	<th>Location</th>
	<th>Contact No.</th>
	<th>Action</th>
	</tr>
	@foreach($placemaster as $place)
	<tr>
	<td>{{$place->landmark}}</td>
	<td>{{$place->location}}</td>
	<td>{{$place->contact}}</td>
	<td>
	<a href="/placemaster/{{$place->id}}/edit">Edit</a> / <a href="/placemaster/{{$place->id}}/destroy">Delete</a>
	</td>
	</tr>
	@endforeach
</table></center>
@stop