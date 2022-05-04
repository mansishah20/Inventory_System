@extends("layout.adminmaster")

@section("contain")


<h1> Edit Item Details</h1>
<form action="/inwardregister/{{$inward->id}}/update" method="post">
@method('POST')
@csrf
Enter Item Name:-<br>
<input type="text" name="iname" value="{{$inward->iname}}" ><br><br>
Enter Place Name :-<br>
<input type="text" name="landmark" value="{{$inward->landmark}}"><br><br>
Enter Admin Name :-<br>
<input type="text" name="uname" value="{{$inward->uname}}"><br><br>

Enter Current Stock :-<br>
<input type="text" name="currentstock" value="{{$inward->currentstock}}"><br><br>
Enter Price :-<br>
<input type="text" name="mrp" value="{{$inward->mrp}}"><br><br>
Enter Price :-<br>
<input type="text" name="expire" value="{{$inward->expiredate}}"><br><br>

<input type="submit" value="submit" >
</form>
@stop