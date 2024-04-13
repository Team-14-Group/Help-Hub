<html>
<Head>
<style>
aside {
  width: 30%;
  padding-left: 15px;
  margin-left: 15px;
  float: right;
  font-style: italic;
  background-color: lightgray;
  position: absolute;
  left: 900px;
  top: 200px;
}
form{
  position: absolute;
  left: 300px;
  top: 400px;
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #04AA6D;} /* Green */

</style>
<body style="background-color:#e6ffcc;">
<h1 style="font-size:30px; position: absolute; left: 225px; top: 100px;">Log in to your account</h1>
<h2 style="font-size:20px; position: absolute; left: 250px; top: 150px;">Log in using social networks</h2>
<h3 style="font-size:15px; position: absolute; left: 350px; top: 300px;">or</h3>
<h4 style="font-size:15px; position: absolute; left: 50px; top: 30px;">help hub</h4>
<p>
<div class="row">
<a href="https://www.facebook.com">
  <div class="column">
    <img style="position: absolute; left: 300px; top: 225px;" src="img_snow.jpg" alt="fb" width="50" height="50">
  </div>
</a>
<a href="https://www.instagram.com">
<div class="column">
    <img style="position: absolute; left: 350px; top: 225px;"src="img_snow.jpg" alt="ins" width="50" height="50">
  </div>
</a>
<a href="https://www.whatsapp.com">
<div class="column">
    <img style="position: absolute; left: 400px; top: 225px;"src="img_snow.jpg" alt="wa" width="50" height="50">
  </div>
</a>
</div>
</p>
<form method="POST" action="">
  Email:<br><input type="text" name ="email" required><br><br>
  Password:<br><input type="password" name= "password" required><br><br><input type = "submit" value = "Sign in"></form>
  <?php
 if($_SERVER["REQUEST_METHOD"]== "POST"){
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 $valid_email = "user123@gmail.com";
	 $valid_password = "password123";
	 if($email===$valid_email&& $password=== $valid_password){echo "Welcome, " . htmlspecialchars($email). "! You are successfully logged in.";
	 }
 }
	 ?>
<aside>
<h1>New Here?</h1>
<h2>Sign up and discover a great amount of new opportunities!</h2>
<button class="button button1">Sign up</button>
</aside>
</body>
</html>