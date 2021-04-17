<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Berati</title>
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
    	<h2>Berati </h2>
    		<img src="images/5.jpg">
    	<h4>Berati Event</h4>
        <p>Spend an amazing weekend in Berat with your friends.</p>
        <ul>
          <li>Wood crafting experience in Berat.</li>
          <li>Fast guide to the fields</li>
          <li>A visit to Artisan's handmade workshop.</li>
        </ul>
        <p>It is the distinctive traditional architecture of this so-called “City of 1000 windows” that has placed Berat in UNESCO’s list of world Heritage Sites. Beautifully split by the Osum River into two historic neighborhoods, the city is joined by the grandiose bridge of Gorica. The characteristic windows of the traditional houses mirror one another beautifully from across the river. Flanked on both sides by Tomorr and Shpirag, two of the most mythical mountains in Albania, Berat is also a nature lover’s paradise. Mountain climbing, cycling, hiking, rafting and kayaking are only some of the preferred outdoor activities around this city. The medieval Castle of Berat houses old churches, museums and iconography by the greatest Albanian artists as well as old bazaars, cafes, and a surprisingly vibrant local life.</p>
        <hr>
    	</div>
    <div id="two">
    	<h2>Vizito guidat e tjera te ofruara ....</h2>
    	<b>Skrapari </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>Thethi</b><br><a href="skrapari.php" target="_blank"><img src="images/7.jpg" width="200px" height="200px"></a>
    	<a href="thethi.php" target="_blank"><img src="images/2.jpg" width="200px" height="200px"></a>
    </div>
    <div id="three">
    	<h2>Rezervo bileten tende tani!</h2>
    	<form action="" method="post">
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
</body><br><br>
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
   else if(isset($_POST['submit']))
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