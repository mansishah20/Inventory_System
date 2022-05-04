@extends("layout.adminmaster")

@section("contain")


<h1>Item Details</h1>
<form action="/itemmaster/store" method="post"  enctype="multipart/form-data">
@csrf
Enter Category :-<br>
<select name="catid" >
	@foreach($category as $c)
				<option value="{{$c->id}}">{{$c->cname}}</option>
	@endforeach
</select>
<br><br>
Enter Item Name :-<br>
<input type="text" name="iname"><br><br>
Enter Current stock :-<br>
<input type="text" name="currentstock"><br><br>
Enter Minimum Stock :-<br>
<input type="text" name="minstock"><br><br>
Enter Item Image :-<br>
<input type="file" name="image" ><br><br>
Enter Price :-<br>
<input type="text" name="mrp"><br><br>

<br><br>
<input type="submit" value="submit" >
</form>
@stop