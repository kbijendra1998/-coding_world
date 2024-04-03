<?php
    include("db.php");

    if(isset($_POST['update'])){
        session_start();
        $err = "";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $add = $_POST['address'];
        $phone = $_POST['phone'];
        if(isset($_FILES['img']['name']) && ($_FILES['img']['name']!=="")){
        $tmp_name = $_FILES['img']['tmp_name'];
        $profile_name = $_FILES['img']['name'];
        unlink("profile/$old_image");
        move_uploaded_file($tmp_name, "profile/$profile_name");
        }else{
            $profile_name = $old_image;
        }
      //  $data = ;
        $qry = mysqli_query($con,"UPDATE `user_detail` SET first_name ='".$firstname."',last_name = '".$lastname."',email = '".$email."', address = '".$add."', phone = '".$phone."', profile = '".$profile."' where `id` = ".$_GET['id']);
        if ($qry) {
            header("location:user_detail.php");
        }else{
            echo "something  wrong to update";
        }

}
?>

<?php 
   $qry = "select * from user_detail where id =".$_GET['id'];
   $res = mysqli_query($con,$qry);
   $data = mysqli_fetch_assoc($res);
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
                <div class="control-group normal_text" align="center"> 
            <img src="a2z.jpg" height="60px" width="60px"></br> 
         </div>
                <legend>Update Details</legend>
                
                <div class="row">

                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="firstname" value="<?php echo $data['first_name'] ; ?>" class="form-control input-lg" placeholder="First Name" required />
                    </div>

                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="lastname" value="<?php echo $data['last_name'] ; ?>" class="form-control input-lg" placeholder="Last Name" required />
                    </div>

                </div>
                <br/>
                <input type="email" name="email" value="<?php echo $data['email'] ;?>" class="form-control input-lg" placeholder="Your Email" required />
                <br/>

                <input type="text" name="address" value="<?php echo $data['address']; ?>" class="form-control input-lg" placeholder="Your Address" required />
                <br/>

                <input type="text" name="phone" value="<?php echo $data['phone'] ;?>" class="form-control input-lg" placeholder="Mobile No." required />
                <br/>

                <img src="profile/<?php echo $data['profile'] ; ?>" width="150px" height="100px">
                <input type="file" name="img" value="<?php echo $data['profile'] ;?>" class="form-control input-lg"  required />
                <br/>


                <div class="row">
                    <br />

                    <div align="center">
                    <input class="btn btn-primary" type="submit" name="update" value="Update">
                    </div>

            </form>
            </div>
        </div>
    </div>
</div>