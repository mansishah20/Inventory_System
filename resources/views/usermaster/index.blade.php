@extends("layout.adminmaster")

@section("contain")


<center><h1 style="text-decoration:underline">User Data :-</h1>
<a href="/usermaster/create" style="font-size:20px"> Add New Data</a><br><br>
<table border="2" class="table table-hover" height="100%" width="100%">
	<tr>
	<th>User Name</th>
	<th>Email Id</th>
	<th>Contact No. </th>
	<th>User Type</th>
	<th>Action</th>
	</tr>
	@foreach($usermaster as $user)
	<tr>
	<td>{{$user->uname}}</td>
	<td>{{$user->uemail}}</td>
	<td>{{$user->ucontact}}</td>
	<td>{{$user->utype}}</td>
	
	<td>
	<a href="/usermaster/{{$user->id}}/edit">Edit</a> / <a href="/usermaster/{{$user->id}}/destroy">Delete</a>
	
	</td>
	</tr>
	@endforeach
</table></center>
@stop