@extends("layout.adminmaster")

@section("contain")



<center><h1 >Outward Register Data :-</h1>
<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">filter</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Filter</h4>
        </div>
        
        <form class="form-inline" action="/outwardregister/ofilter" method="post">
      
        @csrf
        <div class="modal-body">
      	  <input type="checkbox" name="date" id="date">  By Time Duration<br><br>
		  From :- <input type="date" name="sdate" pattern="\d{4}-\d{2}-\d{2}">
		  <br><br>
		  To :-<input type="date" name="edate" pattern="\d{4}-\d{2}-\d{2}"><br><br>
    <button class="btn btn-outline-success" type="submit" id="seabtn">Filter</button>
    </div>
        </form>   
      
        
      </div>
      
    </div>
  </div>
  
</div><br>


<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>Item Name</th>
	<th>Admin Name</th>
	<th>Quantity</th>
	<th>Expire Date</th>
	<th> Order Date & Time</th>
	</tr>
	@foreach($outward->sortByDesc('id') as $out)
	<tr>
    <td>{{$out->iname}}</td>
	<td>{{$out->uname}}</td>
    <td>{{$out->quantity}}</td>
	<td>{{$out->expiredate}}</td>
	<td>{{$out->created_at}}</td>
	</tr>
	@endforeach
</table></center>


@stop