<?php
  session_start();
  if(isset($_SESSION['USER_ID'])){
    echo "";
  }else{
    header('location:login.php');
  }

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
  
  <a class="active" align="pull-right" href="signup.php"><button type="button" class="btn btn-primary">Register A New User</button></a>

  <a class="active" align="pull-right" href="userdetail.php"><button type="button" class="btn btn-primary">Manage Users</button></a>

  <a class="active" align="pull-right" href="invite_user.php"><button type="button" class="btn btn-primary">invite user</button></a>

  <a class="active" align="pull-right"href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
</div>


<div style="padding-left:16px">
<i><h1 align="center"> A2Z SAAS Pvt. Ltd. </h1></i></div>
 <div  align="center"><a href="signup.php"> <img src="a2z.jpg" height="60px" width="60"></a>

  <h2> Welcome <?php echo $_SESSION['USER_NAME'];?></h2>
</div>

</body>
</html>