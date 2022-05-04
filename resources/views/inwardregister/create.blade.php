@extends("layout.adminmaster")

@section("contain")
<style>
#inward-form{
	font-size:20px;
}
</style>

<h2>Inward Details</h2>
<form action="/inwardregister/store" method="post"  enctype="multipart/form-data" id="inward-form">
@csrf

<input type="hidden" value="{{$item->id}}" name="itemid"/><br><br>
Select Place :-<br>
<select name="pid" >
	@foreach($place as $p)
				<option value="{{$p->id}}">{{$p->landmark}}</option>
	@endforeach
</select>
<br><br>
Select Admin :-<br>
<select name="uid" >
	@foreach($user as $u)
				<option value="{{$u->id}}">{{$u->uname}}</option>
	@endforeach
</select>
<br><br>
Enter Quantity:-<br>
<input type="text" name="quantity"><br><br>

Enter Price :-<br>
<input type="text" name="price"><br><br>
Expire Date :-<br>
<input type="date" name="expiredate"><br><br>

<br><br>
<input type="submit" value="submit" >
<br>
@if(count($errors) > 0)
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif
		<!-- Success message -->
			@if(Session::has('success'))
				{{Session::get('success')}} 
			@endif

</form>
@stop