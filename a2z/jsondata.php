<?php
	session_start();
function get_data(){ 
	include('db.php');
	$json_data = array();

	$data = "select * from user";
	$qry = mysqli_query($con,$data);

	while($row = mysqli_fetch_assoc($qry)){
		$json_data[] = array(
			'serial No.' => $row['id'],
			'First_name' => $row['first_name'],
			'Last_name' => $row['last_name'],
			'Email' => $row['email'],
			'Address' => $row['address']
		);
		
	}
	return json_encode($json_data);
}
	 echo '<pre>';
	print_r(get_data());
	 echo '</pre>';

		$new_file = date('d-m-y').'.json';
		if(file_put_contents($new_file, get_data())){
			//header('location:userdetail.php');
			echo $new_file."  ".'data exported';
		}else{
			echo 'Something went wrong to export Data';
		}

 ?>