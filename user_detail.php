<?php
	
	include("db.php");
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
  <a class="active" align="pull-right" href="register.php"><button type="button" class="btn btn-primary">Register A New User</button></a>
  
</div>

<div style="padding-left:16px">
  <i><h2 align="center" style="color:blue;"> Welcome To A2Z SAAS Pvt. Ltd. </h2></i></div>
 <div  align="center"><a href="#"> <img src="a2z.jpg" height="60px" width="60"></a>
</div>
	<div class="dashboard">
	     <table border="1" style="width:50%"align="center">
		    <tr>
		    	<th>Sr. No.</th>
		    	<th>Name</th>
		    	<th>Email</th>
		    	<th>Address</th>
		    	<th>Contact no.</th>
		    	<th>Profile</th>
		    	<th colspan="2">Action</th>
		    </tr>
		    <?php 
		    	$i = "1";
		    	$data = " select * from user_detail";
		    	$qry = mysqli_query($con,$data);
		    	//if($data){
		    		while($res = mysqli_fetch_assoc($qry)){
		    	
		    ?>
		    <tr>
		    	<td align="center"><?php echo $i++;?></td>
		    	<td align="center"><?php echo $res['first_name']; echo " ".$res['last_name'];?></td>
		    	<td align="center"><?php echo $res['email'];?></td>
		    	<td align="center"><?php echo $res['address'];?></td>
		    	<td align="center"><?php echo $res['phone'];?></td>
		    	<td align="center"><image src="Profile/<?php echo $res['profile'];?>" width="50px" height="50px"></td>
		    	<td align="center"><a href="edit.php?id=<?php echo $res['id'] ;  ?>"><input type="button" name="button" value="Edit"></a></td>
		    	<td align="center"><a href="delete.php?id=<?php echo $res['id'] ;  ?>"><input type="button" name="button" value="Delete"></a></td>
		    </tr>
		<?php }?>
		 </table>
	</div>
</body>
</html>