<?php
    include("db.php");

    if(isset($_POST['submit'])){
        session_start();
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $add = $_POST['add'];
        $phone = $_POST['phone'];
        $pass = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($pass == $confirm_password){
            //$pass = md5($password);

        $data = "insert into `user` (`first_name`,`last_name`,`email`,`address`,`phone_no.`,`password`,`confirm_pass`) values ('$firstname','$lastname','$email','$add','$phone','$pass','$confirm_password')";
        $qry = mysqli_query($con,$data);
        
        if($qry){
           $_SESSION['message'] = "successfully registered.";
           $_SESSION['email'] = $email;
           header("location:home.php");
        }else {

        echo "Something went wrong!";
    }
    }else{
        echo "Password do no match!";
    }
}
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container" id="wrap">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <form action="" method="post" accept-charset="utf-8" class="form" role="form">
                <legend>Sign Up</legend>
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

                <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" required />
                <br/>

                <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" required />
                <div class="row">
                    <br />

                    <div align="center">
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    <a  class="btn btn-primary" href="login.php" role="button">Login</a>
                    </div>

            </form>
            </div>
        </div>
    </div>
</div>