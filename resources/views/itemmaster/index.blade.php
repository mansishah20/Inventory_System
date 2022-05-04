@extends("layout.adminmaster")

@section("contain")

<center><h1 style="text-decoration:underline">Item Data :-</h1>
<a href="/itemmaster/create" style="font-size:20px"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Category Name</th>
	<th>Item Name</th>
	<th>Current Stock</th>
	<th>Min Stock</th>
	<th>Item Image</th>
	<th>Price</th>
	<th>Action</th>
	</tr>
	@foreach($item->sortByDesc('id') as $it)
	<tr>
	<td>{{$it->cname}}</td>
	<td>{{$it->iname}}</td>
	<td>{{$it->currentstock}}</td>
	<td>{{$it->minstock}}</td>
	<td>
		<img src="{{'itemimages/' . $it->image}}" width="100px" height="100px"/>
	</td>
	<td>{{$it->mrp}}</td>
	<td>
	<a href="/itemmaster/{{$it->id}}/edit">Edit</a> / <a href="/itemmaster/{{$it->id}}/destroy">Delete</a>
	</td>
	</tr>
	@endforeach
</table></center>
@stop