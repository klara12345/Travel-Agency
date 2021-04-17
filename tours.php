<?php
include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tours</title>
</head>
<style type="text/css">
	body
	{
		background: #069370;
	}
	@import url('https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap');
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  background: white;

}
div .desc a  {
	text-decoration: none;
	color: black;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
.pyetje
{
	background: #069370;
	height: 150px;
	width: 500px;
	margin: 0 auto;
	padding-top: 20px;
	padding-left: 45px;
  box-shadow: 10px 10px 5px black;
}

.f1
{ 
  padding: 0 15px;
  float: left;
  width: 24.99999%;
  height: 200px;
  background-color: #069370;
  margin: 0 auto;
  box-sizing: border-box;
  font-family: 20px;


}
div.f1 {
  border: 1px solid #777;
}
div.f1:hover {
  border: 1px solid #ccc;
}

@media only screen and (max-width: 1200px) {
  .f1 {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 600px) {
  .f1 {
    width: 70%;
  }
}
@media only screen and (max-width: 600px) {
  .pyetje {
    width: 70%;
  }
}
@media only screen and (max-width: 1200px) {
  .pyetje{
    width: 49.99999%;
    margin: 6px auto;
  }
}
.f2{
  text-align: center;
  top:50%;
  left: 50%;

}
.heading
{
  font-family: 'RocknRoll One', sans-serif;
  color: white;
  margin-left: 15px;
  background-color: #069370;
  width: 50%;
  height: 100px;
  text-align: center;
  margin:0 auto;
  box-shadow: 10px 10px 5px black;
}
.h
{
  padding-top: 30px;
}

</style>
<body>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="berati.php">
      <img src="images/5.jpg" alt="Berati" width="600" height="400">
    </a>
    <div class="desc">
    	<a target="_blank" href="berati.php"> <b>Berati </b></a><br>
    	<a href="berati.php"> >>Kliko ketu per me shume informacion </a>
    </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="tirana.php">
      <img src="images/9.jpg" alt="Tirana" width="600" height="400">
    </a>
    <div class="desc">
    <a target="_blank" href="tirana.php"><b>Tirana </b>
    	<br>>>Kliko ketu per me shume informacion</a>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="skrapari.php">
      <img src="images/7.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">
     <a target="_blank" href="skrapari.php"> <b>Skrapari </b>
     <br>>>Kliko ketu per me shume informacion</a>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="thethi.php">
      <img src="images/4.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">
    <a target="_blank" href="skrapari.php"><b>Thethi </b>
    <br>>>Kliko ketu per me shume informacion</a>
    </div>
  </div>
</div>
<div class="clearfix"></div><br><br>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="vlore.php">
      <img src="images/vlore.jpg" alt="Vlore" width="600" height="400">
    </a>
    <div class="desc">
     <a target="_blank" href="vlore.php"><b> Vlore</b>
     <br>>>Kliko ketu per me shume informacion </a>
    </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="tropoje.php">
      <img src="images/tropoje.jpg" alt="Tropoje" width="600" height="400">
    </a>
    <div class="desc">
     <a target="_blank" href="tropoje.php"> <b>Tropoje</b>
     <br>>>Kliko ketu per me shume informacion </a>
    </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="lepushe.php">
      <img src="images/lepushe.jpg" alt="Lepushe" width="600" height="400">
    </a>
    <div class="desc">
     <a target="_blank" href="skrapari.php"> <b>Lepushe</b>
     <br>>>Kliko ketu per me shume informacion </a>
    </div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="sarande.php">
      <img src="images/sarande.jpg" alt="Sarande" width="600" height="400">
    </a>
    <div class="desc">
     <a target="_blank" href="sarande.php"> <b>Sarande</b>
     <br>>>Kliko ketu per me shume informacion </a>
    </div>
  </div>
</div>

<div class="clearfix"></div><br><br>
</body>
<?php
include "footer.php";

?>
</html>