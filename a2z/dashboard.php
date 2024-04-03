<?php
	session_start();
	 include('db.php');
      if(isset($_SESSION['USER_ID'])){
		  echo "";
	  }else{
		  header('location:login.php');
	  }
 
?>

 <?php
  //session_start();



?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="logout.php">Logout</a>

</div>

<div style="padding-left:16px">
	<i><h1 align="center" style="color:green;"> A2Z SAAS Pvt. Ltd. </h1></i></div>
 <div  align="center"><img src="a2z.jpg" height="70px" width="70">
  <h2 align="center" style="color:green;"> Welcome To Dashboard. </h2>
  
</div>

	
	<div class="dashboard">
	     <table style="width:50%"align="center">
	     	<tr>
	     		<th>Name</th>
	     		<th>Email Address</th>
	     		<th>Address</th>
	     		<th>Contact no.</th>
	     	</tr>
	     	<?php
	     	$id = $_SESSION['USER_ID'];

	     	$data = "select * from user where `id`='$id'";

	     	$qry = mysqli_query($con,$data);
	     	if($qry){
	     	$res = mysqli_fetch_assoc($qry);
	     	?>
	     	<tr>
	     		<td align="center"><?php echo $res['first_name'];echo " ".$res['last_name'];?></td>
	     		<td align="center"><?php echo $res['email'];?></td>
	     		<td align="center"><?php echo $res['address'];?></td>
	     		<td align="center"><?php echo $res['phone_no.'];?></td>
	     	</tr>
	     <?php } ?>
		 </table>
	</div>
</body>
</html>