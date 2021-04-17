<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  <header>
  	<a href="index.php" class="logo">My Albania</a>
  	<div class="menu-toggle"></div>
    <?php
if( isset($_SESSION['login_user']))
 {
  ?>
  <nav>
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="aboutUs.php">About Us</a></li>
          <li><a href="tours.php">Tours</a></li>
          <li><a href="media.php">Media</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="logout.php">Log Out</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
      </nav>
      <?php
}
else {
  ?>
  <nav>
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="aboutUs.php">About Us</a></li>
          <li><a href="tours.php">Tours</a></li>
          <li><a href="media.php">Media</a></li>
          <li><a href="login.php">Log In</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
      </nav>
      <?php
 }
?>	
  <div class="clearfix"></div>
  </header>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    
      $('.menu-toggle').click(function(){
        $('.menu-toggle').toggleClass('active')
        $('nav').toggleClass('active')
      })
    })
  </script>
</body>
</html>