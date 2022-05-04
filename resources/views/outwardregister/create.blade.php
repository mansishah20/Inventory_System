@extends("layout.adminmaster")

@section("contain")


<h1>Outward Details</h1>
<form action="/outwardregister/store" method="post"  enctype="multipart/form-data">
@csrf

<input type="hidden" value="{{$item->id}}" name="itemid"/><br><br>
<input type="hidden" value="{{$inward->id}}" name="inwid"/><br><br>
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
Expire Date:-<br>
<input type="date" name="expiredate"><br><br>
<br><br>
<input type="submit" value="submit" >

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
