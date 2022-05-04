@extends("layout.adminmaster")

@section("contain")


<h1>User Details</h1>
<form action="/usermaster/store" method="post">
@csrf
Enter User Name :-<br>
<input type="text" name="uname"><br><br>
Enter Email Id :-<br>
<input type="text" name="uemail" pattern="[^ @]*@[^ @]*" required><br><br>
Enter Password :-<br>
<input type="password" name="upassword" required><br><br>
Confirm Password :-<br>
<input type="passeord" name="cpassword" required><br><br>
Enter Contact No. :-<br>
<input type="text" name="ucontact" pattern="[0-9]{10}" required><br><br>
User Type :-<br>
<input type="text" name="utype" required><br><br>

<br><br>
<input type="submit" value="submit" >

	<!-- Error -->
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