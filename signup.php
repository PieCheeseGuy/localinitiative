<html>
  <head>
<link rel="stylesheet" type="text/css" href="style.css">

<ul>
<li><img src="communaseed.png" alt="Communaseed Logo" style="width:150px;height:40px;margin-top:0;margin-bottom:0;margin-left:15px;margin-right:10px;"></li>
<li><a href="home.html">Home</a></li>
<li><a href="#Plant">Start a Project</a></li>
<li><a href="#Grow">Fund a Project</a></li>

<li style="float:right"><a class="active" href="signup.html">Sign Up</a></li>
<li style="float:right"><a href="signin.html">Log In</a></li>

</ul>
</head>
<body>

<h2>Signup Form</h2>

<form action="signup.php" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
