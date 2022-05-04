@extends("layout.adminmaster")

@section("contain")


<h1> Edit PLace Details</h1>
<form action="/placemaster/{{$place->id}}/update" method="post">
@method('POST')
@csrf
Enter LandMark :-<br>
<input type="text" name="landmark" value="{{$place->landmark}}"><br><br>
Enter Location :-<br>
<input type="text" name="location" value="{{$place->location}}"><br><br>
Enter Contact No. :-<br>
<input type="text" name="contact" value="{{$place->contact}}"><br><br>
<br><br>
<input type="submit" value="submit" >
</form>
@stop