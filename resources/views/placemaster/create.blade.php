@extends("layout.adminmaster")

@section("contain")


<h1>Place Details</h1>
<form action="/placemaster/store" method="post">
@csrf
Enter Mark :-<br>
<input type="text" name="landmark"><br><br>
Enter Location :-<br>
<input type="text" name="location"><br><br>
Enter Contact No. :-<br>
<input type="text" name="contact"><br><br>
<br><br>
<input type="submit" value="submit" >
</form>
@stop