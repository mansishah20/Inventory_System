@extends("layout.adminmaster")

@section("contain")
<center><table border="2" class="table table-hover" height="100%" width="100%">

<tr><h3>Filtered Inward Data :</h3><br></tr>	
<tr>
	<th>Item Name</th>
	<th>place Name</th>
	<th>Admin Name</th>
	<th>Quantity</th>
	<th>Price</th>
  	<th>Expire Date</th>
	</tr>
@foreach($inward->sortByDesc('id') as $in)
   		
	<tr>
    <td>{{$in->iname}}</td>
	<td>{{$in->landmark}}</td>
    <td>{{$in->uname}}</td>
    <td>{{$in->currentstock}}</td>
	<td>{{$in->mrp}}</td>
    <td>{{$in->expiredate}}</td>
	</tr>
	
    				
@endforeach
				
</table></center>
@stop
