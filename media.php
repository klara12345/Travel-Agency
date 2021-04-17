<?php
include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Media</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	body
	{
		background: #069370;
	}
	section
	{
		 box-sizing: border-box;
	}
	.media h2
	{
		text-align: center;
		color: #fff;
		font-family: 'Lobster', cursive;
	}
	.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;

}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
  margin:0 auto;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<body>
	<div class="media">
   <h2>Take a look at photos & videos from previous journeys.<br>
    Read testimonials from our new & regular clients.</h2></div>
    <section>
    <div class="row"> 
  <div class="column">
    <img src="images/media/foto1.jpg" style="width:100%">
    <img src="images/media/foto2.jpg" style="width:100%">
    <img src="images/media/foto3.jpg" style="width:100%">
    <img src="images/media/foto4.jpg" style="width:100%">
    <img src="images/media/foto5.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="images/media/foto6.jpg" style="width:100%">
    <img src="images/media/foto7.jpg" style="width:100%">
    <img src="images/media/foto8.jpg" style="width:100%">
    <img src="images/media/foto9.jpg" style="width:100%">
    <img src="images/media/foto10.jpg" style="width:100%">
    <img src="images/media/foto11.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="images/media/foto5.jpg" style="width:100%">
    <img src="images/media/foto2.jpg" style="width:100%">
    <img src="images/media/foto3.jpg" style="width:100%">
    <img src="images/4.jpg" style="width:100%">
    <img src="images/media/foto5.jpg" style="width:100%">
    
  </div>
  
</div>
</section>
</body><br><br>
<?php
include "footer.php";

?>

</html>