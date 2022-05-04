<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inventory System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa
  }

  input[type=submit]{
  background-color:lightgreen;
  color: black;
  font-weight:bold;
  font-size:16px;
  padding: 5px 5px;
  margin: 8px 0;
  
}
input[type=submit]:hover {
  opacity: 0.8;
}
input[type=text], input[type=password] {
  width: 30%;
  padding: 5px 5px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
  border-radius: 10px;
}
#f1 {
  border: 2px solid black;
  padding:20px 10px 20px 10px;
  margin:30px;
  width:70%;
  border-radius: 15px;
  box-shadow:0 1px 0 #cfcfcf;
  background:transparent!important;
  font-size: 18px!important;

}


  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0px">
	

	<h1 style="color:red"><b>Inventory System</b></h1><br>
 <div class="container" style="margin-top:10px">
  <div class="row">
   
    <div class="col-sm-12" >
    <br>
    <center>	<h2 style="color:green;">Log-in </h2>
    <form action="{{ route('check','') }}" method="post" id="f1">
    @method('post')
    @csrf
    <div class="container">
	  <b>Enter Email-id :-</b><br>
    <input type="text" name="uemail" required><br><br>
      <b>Enter Password :-</b><br>
    <input type="password" name="upassword" required><br><br> 
    &nbsp;&nbsp;&nbsp;<input type="submit" value="Create " id="submit"><br>
    <br>
    </div>
  
    </form>
    </center>
			<br><br><br>
	  </div>
  </div>
</div>
<br><br><br>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>

     
      
