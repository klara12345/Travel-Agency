<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tirana</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	body
	{
		background: #069370;
	}
	.wrapper { 
    /*  border : 2px solid #000;  */
      overflow:hidden;
}

.wrapper div {
   min-height: 850px;
   padding: 10px;
}
#one {
  background-color: white;
  float:left; 
  margin-right:20px;
  width:850px;
  border-right:2px solid #000;
}
#two { 
  background-color: white;
  overflow:hidden;
  margin:10px;
  /* border:2px dashed #ccc */
    min-height:300px;
}
#three { 
  background-color: white;
  overflow:hidden;
  margin:10px;
  /* border:2px dashed #ccc; */
  min-height:500px;
}

@media only screen and (max-width: 400px) {
   #one { 
    float: none;
    margin-right:0;
    width:auto;
    border:0;
    border-bottom:2px solid #000;    
  }
}
 #one img
{
	max-width: 100%;
	 height: auto;
	 border-radius: 10px;
	 box-shadow: 5px 5px 5px black;
}
#one h2
{
	padding-left: 30px;
	font-family: 'Indie Flower', cursive;
}
#two h2,#three h2
{
	padding-left: 30px;
	font-family: 'Indie Flower', cursive;
}
#three
{
  
  text-align: center;
}

.contact-form-txt
{
  width: 50%;
  height: 5px;
  color: #000;
  border: 1px solid #bcbcbc;
  outline: none;
  margin-bottom: 20px;
  padding: 15px;
}
.contact-form-txt::placeholder
{
  color: #aaa;
}
.contact-form-textarea
{
  width: 50%;
  height: 130px;
  color: #000;
  border: 1px solid #bcbcbc;
  outline: none;
  margin-bottom: 20px;
  padding: 15px;
  font-family: 'Poppins', sans-serif;
}
.contact-form-textarea::placeholder
{
  color: #aaa;
}

.contact-form-btn
{
  width: 50%;
  border:none;
  outline: none;
  background: #069370;
  color: #fff;
  text-transform: uppercase;
  padding: 10px 0;
  cursor: pointer;
  font-size: 18px;
}
.contact-form-btn:hover
{
  background: #12876f;
}
</style>
<body>
<div class="wrapper">
    <div id="one">
    	<h2>Tirana </h2>
    		<img src="images/6.jpg">
    	<h4>Tirana Event</h4>
        <p>Spend an amazing weekend in Tirana with your friends.</p>
        <p>It is not easy to describe Tirana in a few words. Descriptions such as “a vibrant city”, “colorful city” are merely an attempt to give some sort of impression of the culture, passion and enjoyment to be found in the city. Whether it is a visit in one of the attractions, museums and surrounding castles or an evening at clubs and bars in the most trendiest parts of the city, allow yourself to be inspired by the joys that await you in Tirana. We hope you have a fantastic time here in Tirana.</p>
        <hr>
    	</div>
    <div id="two">
    	<h2>Vizito guidat e tjera te ofruara ....</h2>
    	<b>Skrapari </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>Thethi</b><br><a href="skrapari.php" target="_blank"><img src="images/7.jpg" width="200px" height="200px"></a>
    	<a href="thethi.php" target="_blank"><img src="images/2.jpg" width="200px" height="200px"></a>
    </div>
    <div id="three">
    	<h2>Rezervo bileten tende tani!</h2>
    	<form action="#" method="post">
    		<input type="text" name="name" placeholder="Name*" required="" class="contact-form-txt">
            <input type="text" name="email" placeholder="Email*" required=""class="contact-form-txt">
            <input type="text" name="telephone" placeholder="Telephone*" required="" class="contact-form-txt">
            <input type="text" name="country" placeholder="Country" class="contact-form-txt">
            <input type="text" name="city" placeholder="City" class="contact-form-txt">
            <textarea placeholder="Message"class="contact-form-textarea" name="message"></textarea>
            <input type="submit" name="submit" class="contact-form-btn">
    	</form>
    </div>
</div>
</body>
<?php
include "footer.php";
?>
<?php

  if(isset($_POST['submit']))
  {
    if(isset($_SESSION[login_user]))
    {
    $sql = mysqli_query($db,"INSERT into  `guida` values('$_SESSION[login_user]','$_POST[name]','$_POST[email]',
      '$_POST[telephone]','$_POST[country]','$_POST[city]','$_POST[message]');"); 
      ?>
      <script type="text/javascript">
        alert("Rezervimi u krye me sukses! Faleminderit!")
      </script>
      <?php
   
   }  
   else
   {
     ?>
     <script type="text/javascript">
        alert("Rezervimi nuk mund te kryhet!")
        alert("Duhet te logoheni fillimisht!");
        window.location = 'login.php';
      </script>
     <?php
   }
   }
?>
</html>