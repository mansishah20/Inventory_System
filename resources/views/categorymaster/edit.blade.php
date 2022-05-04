@extends("layout.adminmaster")

@section("contain")


<h1 > Edit Category Details</h1>
<form action="/categorymaster/{{$category->id}}/update" method="post">
@method('POST')
@csrf
Enter User Name :-<br>
<input type="text" name="cname" value="{{$category->cname}}"><br><br>

<input type="submit" value="submit" >
</form>
@stop