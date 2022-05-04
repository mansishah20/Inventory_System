@extends("layout.adminmaster")

@section("contain")


<h1 >Category Details</h1>
<form action="/categorymaster/store" method="post">
@csrf
Enter Category Name :-<br>
<input type="text" name="cname"><br><br>
<br>
<input type="submit" value="submit" >
</form>
@stop