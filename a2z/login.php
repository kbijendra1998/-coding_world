<?php 
  include("db.php");
  
  session_start();
  $msg="";
    if(isset($_POST['email']) && isset($_POST['password'])){
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $pass=mysqli_real_escape_string($con,$_POST['password']);

      //$pass = md5($password);
          $data = "select * from user where email='$email' and password='$pass'";
          $res = mysqli_query($con,$data);
          $count = mysqli_num_rows($res);
      if($count>0){
        $row = mysqli_fetch_assoc($res);
        if($row['role']==1){
          $_SESSION['USER_ID'] = $row['id'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['USER_NAME'] = "Yo Super Admin";
        header('location:adminhomepage.php');
        }elseif ($row['role']==0) {
          $_SESSION['USER_ID'] = $row['id'];
          $_SESSION['USER_NAME'] = $row['first_name']['last_name'];
        header('location:dashboard.php');
      }else{
       echo $msg = "Please Enter Correct Details!";
      }
    }
  }
 
?>



<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Login Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/maruti-login.css" />
    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="" method="POST">
         <div class="control-group normal_text"> 
            <img src="a2z.jpg" height="60px" width="60px"></br> 
         </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
              <input name="email" type="text" placeholder="email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
              <input name="password" type="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                   <a class="btn btn-primary" align="center" href="signup.php" role="button">signup</a>
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
           
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/maruti.login.js"></script> 
    </body>
</html>