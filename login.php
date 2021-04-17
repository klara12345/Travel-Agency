<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
body
{
	background: #069370;
}
section
{
	display: grid;
	height: 100%;
	place-items: center;
}
.wrapper
{
	width: 500px;
	background: #fff;
	border-radius: 5px;
	height: 450px;
	margin-top: 10px;
}
.wrapper .title
{
	line-height: 80px;
	background: #16a085;
	text-align: center;
	color: white;
	padding-left: 20px;
	border-radius: 5px 5px 0 0;
	font-size: 25px;
	font-weight: 600;
}
.wrapper form
{
	padding: 30px 20px 25px 20px;
}
.wrapper form .row
{
	height: 50px;
	margin-bottom: 45px;
	margin-top: 30px;
	position: relative;
}
.wrapper form .row input
{
	height: 100%;
	width: 80%;
	padding-left: 25px;
	 margin-left: 30px; 
	outline: none;
	border-radius: 5px;
	border: 1px solid lightgrey;
	transition: all 0.3s ease;
}
form .row input:focus
{
	border-color: #16a085;
	box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
.wrapper form .row i
{
	position: absolute;
	width: 47px;
	height: 103%;
	background: #16a085;
	border: 1px solid #16a085;
	display: flex;
	align-items: center;
	justify-content: center;
	color: white;
	font-size: 18px;
	border-radius: 5px 0 0 5px;
}
.wrapper form .button
{
	padding-left: 0px;
	background: #16a085;
	border: 1px solid #16a085;
	color: white;
	text-transform: uppercase;
	cursor: pointer;
	font-size: 18px;
	font-weight: 500;
}
form .button:hover
{
	background: #12876f;
}
.wrapper form .pass
{
	margin: -30px 0 20px 0;
}
.wrapper form .pass a
{
	color: #16a085;
	text-decoration: none;
	font-size: 17px;
}
.wrapper form .pass a:hover
{
	text-decoration: underline;
}
.wrapper form .signup-link
{
	text-align: center;

}
.wrapper form .signup-link a
{
	color: #16a085;
	text-decoration: none;
	font-size: 18px;
}
.wrapper form .signup-link a:hover
{
	text-decoration: underline;
}
</style>
<body>
	<section>
<div class="wrapper">
	<div class="title"><span>Login Form</span></div>
	<form action="#" method="post">
		<div class="row">
			<i class="fa fa-user"></i>
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="row">
			<i class="fa fa-lock"></i>
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="row">
			<div class="pass"><a href="update_password.php">Forgot Password?</a></div>
			<input type="submit" name="submit" value="Login" class="button">
		</div><br>
		<div class="signup-link">Not a member yet?<a href="signUp.php">Sign Up Now</a></div>
	</form>
</div>
</section>
<?php
  if(isset($_POST['submit']))
  {
    $count = 0;
    $res = mysqli_query($db,"SELECT * from user where username ='$_POST[username]'&& password ='$_POST[password]';");
    $row = mysqli_fetch_assoc($res);
    $count = mysqli_num_rows($res);
    if($count == 0)
    {
      ?>
      <script type="text/javascript">
        alert("The username and password doesnt match");
      </script>
      <?php
    }
    else {
      $_SESSION['login_user'] = $_POST['username']; 
      ?>
      <script type="text/javascript">
        window.location = "index.php";
      </script>
      <?php
    }
  }
  ?>
</body>
</html>