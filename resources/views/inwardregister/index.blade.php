@extends("layout.adminmaster")

@section("contain")
<center><h1>Inward Register Data :-</h1><br>

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
        
        <form class="form-inline" action="/inwardregister/filter" method="post">
      
        @csrf
        <div class="modal-body">
      <input type="checkbox" name="item" id="item">  By Item Name<br><br>
		  <input type="text" name="iname"><br><br><hr>
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