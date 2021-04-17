<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<style type="text/css">
    body
    {
        background: #069370;
    }
    .container
    {
      display: grid;
      height: 100%;
      place-items: center;
    }
		.wrapper{
			width: 450px;
      background: #fff;
      border-radius: 5px;
      height: 350px;
      margin-top: 10px;
			
		}
    .wrapper .title
{
  line-height: 100px;
  background: #16a085;
  text-align: center;
  color: white;
  margin-top: -20px;
  margin-bottom: -20px;
}
    .btn 
    {
      margin-left: 200px;
     background: #16a085;
     border: 1px solid #16a085;
     border-radius: 15px;
     color: white;
     text-transform: uppercase;
     cursor: pointer;
     font-size: 18px;
     font-weight: 500;
    }
    .btn:hover
    {background: #12876f;}
    
    .table 
    {
      padding-left: 130px;
    }
	</style>
</head>
<body>
  <div class="container">
  	
  	<div class="wrapper" >
  		<?php
      if(isset($_POST['submit1']))
      {
        ?>
        <script type="text/javascript">
          window.location = "edit.php";
        </script>
        <?php
      }
  		$q = mysqli_query($db,"SELECT * from `user` where username = '$_SESSION[login_user]';");
  		?>
      <div class="title">
      <h2 style="text-align: center;">My Profile</h2></div><hr>
  		<?php
  		$row = mysqli_fetch_assoc($q);
  		?>
  		<div style="text-align: center;">
  			<b>Welcome,</b>
  			<h4>
  				<?php
  				echo $_SESSION['login_user'];
  				?>
  			</h4><hr>
  		</div>

  		<?php
  		echo "<b>";
  		 echo "<table class= 'table table-bordered'>";
  		 echo "<tr>"; 
  		 echo "<td>";echo "<b>First Name: </b>"; echo "</td>";
  		 echo "<td>"; echo "$row[name]"; echo "</td>";
  		 echo "</tr>";
  		 echo "<tr>";
  		 echo "<td>";echo "<b>Username: </b>"; echo "</td>";
  		 echo "<td>";echo "$row[username]"; echo "</td>";
  		  echo "</tr>";
  		 echo "<tr>";
  		 echo "<td>";echo "<b>Password: </b>"; echo "</td>";
  		 echo "<td>";echo "$row[password]"; echo "</td>";
  		  echo "</tr>";
  		 echo "<tr>";
  		 echo "<tr>";
  		 echo "<td>";echo "<b>Email: </b>"; echo "</td>";
  		 echo "<td>";echo "$row[email]"; echo "</td>";
  		  echo "</tr>";
  		 echo "</table>";
  		 echo "</b>";
  		?><br>
  	 		<form action="" method="post">
      <button class="btn btn-default" name="submit1" type="submit">Edit</button>
    </form>
  	</div>
    
  </div>
</body>
</html>