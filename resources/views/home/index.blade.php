@extends("layout.adminmaster")

@section("contain")
.<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: #1a1a37;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;

 
}


/* Darker background on mouse-over */
.btn:hover {
  background-color:#ffbc3b;
}
</style>

<center><h2 style="">Stock Data :-</h2><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr id="i2">
	
	<th><center>Item Name</center></th>
	<th><center>Current Stock</center></th>
	<th><center>min Stock</center></th>
	
	<th colspan="2"><center>Action</center></th>
	
	</tr>
	@foreach($item->sortByDesc('id') as $it)
	
	<tr>
	<td>{{$it->iname}}</td>
	<td>{{$it->currentstock}}
	@if ($it->currentstock < $it->minstock) 
	<i class="fa fa-arrow-down fa-lg" style="color:red;padding-left:5px;"></i>
 	@endif
</td>
	<td>
	{{$it->minstock}}

		</td>
	<td>
	<a href="/inwardregister/{{$it->id}}"><button class="btn btn-sm"><b>+</b></button></a> 
	</td>
	<td> 
	<a href="/outwardregister/{{$it->id}}"><button class="btn btn-sm"><b>-</b></button></a>

	</td>
	</tr>
	@endforeach
</table></center>
@stop