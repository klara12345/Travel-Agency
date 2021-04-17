<?php
include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap');
	body
	{
		background: #069370;
	}
	
  .banner img
  {
  	max-width: 100%;

  }
  .banner 
  {
  	 position: relative;
  	 width: 88%;
  	 margin:0 auto;

  }
  .heading
  {
     color: black;
     position: absolute;
     top: 45%;
     width: 100%;
     font-size: 30px;
     text-align: center;
     font-family: 'Dela Gothic One', cursive;
  }
  .wrapper
  { /*
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: white;
    box-sizing: border-box; */
    font-family: 'Poppins', sans-serif; 
    display: flex;
    flex-flow: row wrap;
    text-align: center;
    color: white;
  }
  .wrapper > * {
    padding:10px;
    margin: 10px;
    flex: 1 100%;
    border-radius: 10px;
  }
 .main{
  text-align: left;
  background-color: black;
  font-size: 19px;
  box-shadow: 10px 10px 5px black;

}
.aside1
{
  background-color: black;
  box-shadow: 10px 10px 5px black;
}

</style>
<body>
 
 <div class="cotainer">
 	 <div class="row">
 	 	<div class="banner">
 	    <img src="images/hiking.jpg">
 	     <h2 class="heading">About MyAlbania</h2>
 	    </div>
 	 </div>
   <div class="wrapper">
     <article class="main">
       <h2 style="text-align: center;">About My Albania</h2>
       <p>My Albania Explorer is a travel company that has been born out of a passion to share life-changing experiences.</p>
       <p>Our team is different, dynamic, curious and always looking for ‘new and unique things’. We review each request as a new experience for every guest. None of our tour programs resemble each other, as we create unique and personalized itineraries according to the needs of their guests, their ideal travel experiences and experiences.Our goal is to provide a perfect harmony of balancing all the senses, giving the meaning of attention in detail to a whole new dimension.</p>
     </article><br>
     <aside class="aside1" >
      <h2 style="text-align: center;">Why Choose Us?</h2>
       <p>Getting Bored is not an option for us, because for each season you can pick and choose between our variation of activities and destinations.
      We will meet all your requirements from simple activities to the dazzling ones, from the mountain to the beach.
      Do you condition yourself not to go on vacation from time to time because you have to spend a lot of money? Not any more. We offer amazing experiences for just half the price.
      Sometimes some countries carry “incredible” treasures. We offer you the opportunity to explore and to be in love with them.</p>
     </aside>
   </div>
</body>
 <br><br><br>
<?php 
include "footer.php";
?>
</html>