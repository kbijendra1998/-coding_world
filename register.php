<?php
   include_once('db.php');
     session_start();
    if(isset($_POST['submit'])){
       
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $add = $_POST['add'];
        $phone = $_POST['phone'];
        $profile = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];

        move_uploaded_file($tmp_name, "profile/".$profile);

        $data = "INSERT INTO `user_detail` (`first_name`,`last_name`,`email`,`phone`,`address`,`profile`) VALUES ('".$firstname."','".$lastname."','".$email."','".$phone."','".$add."','".$profile."') ";
        
        $qry = mysqli_query($con,$data);
        
        if($qry){
           echo "successfully registered.";
        }else {

        echo "Something went wrong!";
    }
}
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div style="padding-left:16px">
  <i><h2 align="center" style="color:blue;"> Welcome To A2Z SAAS Pvt. Ltd. </h2></i></div>
 <div  align="center"><a href="#"> <img src="a2z.jpg" height="60px" width="60"></a>
</div>
<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <form action="" method="post" accept-charset="utf-8" class="form" role="form" enctype="multipart/form-data">
                <legend>Please Register Here!</legend>
                <h4>It's free and always will be.</h4>
                <div class="row">

                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name" required />
                    </div>

                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" required />
                    </div>

                </div>
                <br/>
                <input type="email" name="email" value="" class="form-control input-lg" placeholder="Your Email" required />
                <br/>

                <input type="text" name="add" value="" class="form-control input-lg" placeholder="Your Address" required />
                <br/>

                <input type="text" name="phone" value="" class="form-control input-lg" placeholder="Mobile no." required />
                <br/>

                <input type="file" name="img" value="" class="form-control input-lg" placeholder="Your Profile" required />
                <br/>

                    <div align="center">
                    <input class="btn btn-primary" type="submit" name="submit" value="Register">
                     <a class="btn btn-primary" align="center" href="user_detail.php" role="button">Registered Users</a>
                    </div>


            </form>
            </div>
        </div>
    </div>
</div>