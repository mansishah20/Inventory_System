@extends("layout.adminmaster")

@section("contain")
<center><table border="2" class="table table-hover" height="100%" width="100%">
<tr><h3>Filtered Outward Data :</h3><br></tr>
    <tr>
	<th>Item Name</th>
	<th>Admin Name</th>
	<th>Quantity</th>
	<th>Expire Date</th>
	<th> Order Date & Time</th>
	</tr>
	@foreach($outward->sortByDesc('id') as $ou)
	<tr>
    <td>{{$ou->iname}}</td>
	<td>{{$ou->uname}}</td>
    <td>{{$ou->quantity}}</td>
	<td>{{$ou->expiredate}}</td>
	<td>{{$ou->created_at}}</td>
	</tr>
	@endforeach
</table></center>


@stop