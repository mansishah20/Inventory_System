<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
  <style>
  body {
        background-color: #ffbc3b;
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 620px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: #black;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 25px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 20px;
    letter-spacing: 1px;
    background: #edf6fa;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
    width: 76%;
    color: black;
    font-weight: 700;
    font-size: 20px;
    letter-spacing: 1px;
    background: #edf6fa;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
	#i1{
  font-size:40px;
  color:black;
} 

    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: white;
        background:#00008b;
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color:#00008b;
        padding-top: 15px;
    }
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #00008b;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
        
        
  </style>
</head>
<body>
  <div class="main">
  
    <p class="sign" align="center"><b>Create Account</b> | <a href="/login">Login</a></p>
    <form action="/usermaster/store" method="post" id="form1">
    @csrf
      <input class="un " type="text" align="center" placeholder="Name" name="uname">
      <input class="un " type="text" align="center" placeholder="Username" name="uemail">
      <input class="pass" type="password" align="center" placeholder="Password" name="upassword">
      <input class="pass" type="password" align="center" placeholder="Confirm Password" name="cpassword">
      <input class="un " type="text" align="center" placeholder="Contact" name="ucontact" pattern="[0-9]{10}" required>
      <input class="un " type="text" align="center" placeholder="User Type" name="utype">
      <input type="submit" class="submit" align="center" name="submit">
            
     </form>           
    </div>
     
</body>

</html>




0