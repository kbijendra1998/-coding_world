<?php

	include('db.php');

	$data = "delete from user_detail where id=".$_GET['id'];
	$qry = mysqli_query($con,$data);
	if($qry){
		header("location:user_detail.php");
	}else{
		echo "user not deleted";
			}
?>