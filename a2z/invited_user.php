<?php

  include("db.php");
  session_start();
  if(isset($_SESSION['USER_ID'])){
    echo "";
  }else{
    header('location:login.php');
  }

  $data = "select * from user where id=".$_GET['id'];
  $qry = mysqli_query($con,$data);
  $res = mysqli_fetch_assoc($qry);
 
  $to = $res['email'];
  $subject = "invitation for joining.";
  $message = "Hello ! This is invitation from A2z saas pvt ltd.";
  if(mail($to, $subject, $message)){
    echo "mail sent";
  }else{
    echo "mail not sent";
  }

  

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body

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
  <a class="active" align="pull-right" href="adminhomepage.php">Home</a>
  <a class="active" align="pull-right"href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
</div>


<div style="padding-left:16px">
<i><h1 align="center"> A2Z SAAS Pvt. Ltd. </h1></i></div>
 <div  align="center"><a href="signup.php"> <img src="a2z.jpg" height="60px" width="60"></a>
</div>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <form action="" method="post" accept-charset="utf-8" class="form" role="form">
                <legend align="center">Send an Invitation.</legend>
                <div class="row">

                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="firstname" value="<?php echo $res['first_name'];?>" class="form-control input-lg" placeholder="First Name" required />
                    </div>

                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="lastname" value="<?php echo $res['last_name']; ?>" class="form-control input-lg" placeholder="Last Name" reuired />
                    </div>
                <br/>
                <input type="email" name="email" value="<?php echo $res['email'];?>" class="form-control input-lg" placeholder="Email" required />
               
              </div>

                    <div align="center">
                    <a href="signup.php"><input class="btn btn-primary" type="submit" name="submit" value="Send"></a>
                    </div>

            </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>