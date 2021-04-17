<?php
include "connection.php";
include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Contact Us</title>
</head>
<style type="text/css">
 /*	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');  */
body
{
  background: #069370;
}
section
{
  width: 100%;
  height: 100vh;
  display: grid;
  align-items: center;
  font-family: 'Poppins', sans-serif;
}

.contact-in
{ 
  width: 60%;
  height: auto;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  padding: 10px;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0px 0px 10px 0px #666;
}

.contact-map
{
  width: 100%;
  height: auto;
  flex: 50%;
}
.contact-map iframe
{
  width: 100%;
  height: 100%;
}
.contact-form
{
  width: 100%;
  height: auto;
  flex: 50%;
  padding: 30px;
  text-align: center;
}
.contact-form h1
{
  margin-bottom: 10px;
  color: #069370;
}

.contact-form-txt
{
  width: 100%;
  height: 30px;
  color: #000;
  border: 1px solid #bcbcbc;
  border-radius: 50px;
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
  width: 100%;
  height: 130px;
  color: #000;
  border: 1px solid #bcbcbc;
  border-radius: 10px;
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
  width: 100%;
  border:none;
  outline: none;
  border-radius: 50px;
  background: #069370;
  color: #fff;
  text-transform: uppercase;
  padding: 10px 0;
  cursor: pointer;
  font-size: 18px;
}

	</style>
	<body>
    <section>
		<div class="contact-in">
      <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47935.685088205595!2d19.782803608117636!3d41.33104134482293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1350310470fac5db%3A0x40092af10653720!2sTirana%2C%20Albania!5e0!3m2!1sen!2s!4v1618229734279!5m2!1sen!2s" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="contact-form">
        <h1>Contact Us</h1>
        <form action="#" method="post">
          <input type="text" name="name" placeholder="Name*" class="contact-form-txt" required="" >
           <input type="text" name="email" placeholder="Email*" class="contact-form-txt" required="">
           <textarea placeholder="Message*"class="contact-form-textarea" name="message" required=""></textarea>
            <input type="submit" name="submit" class="contact-form-btn">
        </form>
      </div>
    </div>
    </section>
    <?php
   if(isset($_POST['submit']))
   {
      $sql = mysqli_query($db,"INSERT into `comments` (id,name,email,message) values ('','$_POST[name]','$_POST[email]','$_POST[message]');");
      ?>
      <script type="text/javascript">
        alert("Submited successfully!Thank you for you message!");
        window.location = 'index.php';
      </script>
      <?php
   }
  ?>
</body>
</html>