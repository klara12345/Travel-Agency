<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="">
		#slider{
      overflow: hidden;
	}
	#slider figure
	{
		position: relative;
		width: 500%;
		margin: 0;
        left: 0;
        animation: 20s slider infinite;
	}
	#slider figure img
	{
		width: 20%;
		float: left;
	}
	@keyframes slider
	{
		0%
		{
			left: 0;
		}
		20%
		{
			left: 0;
		}
		25%
		{
			left: -100%;
		}
		45%
		{
			left: -100%;
		}
		50%
		{
			left: -200%;
		}
		70%
		{
			left: -200%;
		}
		75%
		{
			left: -300%;
		}
		95%
		{
			left: -300%;
		}
		100%
		{
			left: -400%;
		}
	}
	</style>
</head>
<body>
<!-------------------------  Carousel ---------------------- >
	<div id="slider">
		<figure>
			<img src="images/1.jpg">
			<img src="images/2.jpg">
			<img src="images/3.jpg">
			<img src="images/4.jpg">
			<img src="images/4.jpg">
		</figure>
	</div>
</body>
</html>