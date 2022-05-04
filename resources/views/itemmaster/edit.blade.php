@extends("layout.adminmaster")

@section("contain")


<h1> Edit Item Details</h1>
<form action="/itemmaster/{{$item->id}}/update" method="post" enctype="multipart/form-data">
@method('POST')
@csrf
Enter Category Id:-<br>
<input type="text" name="catid" value="{{$item->catid}}" ><br><br>
Enter Item Name :-<br>
<input type="text" name="iname" value="{{$item->iname}}"><br><br>
Enter Current Stock :-<br>
<input type="text" name="currentstock" value="{{$item->currentstock}}"><br><br>
Enter Min Stock :-<br>
<input type="text" name="minstock" value="{{$item->minstock}}"><br><br>
Enter Item Image :-<br>
<input type="file" name="image" ><br><br>
Enter Price :-<br>
<input type="text" name="mrp" value="{{$item->mrp}}"><br><br>

<input type="submit" value="submit" >
</form>
@stop