<?php


           session_start();
           include_once"config.php";
		   $fname=mysqli_real_escape_string($con,$_POST['fname']);
		   $lname=mysqli_real_escape_string($con,$_POST['lname']);
		   $email=mysqli_real_escape_string($con,$_POST['email']);
		   $password=mysqli_real_escape_string($con,$_POST['password']);
		   		   

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
	  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		  $sql=mysqli_query($con,"SELECT email FROM users WHERE  email ='{$email}'");
		  if(mysqli_num_rows($sql) > 0){
			  echo "$email . already exist!";
		  }else{
			  if(isset($_FILES['image'])){
				  $img_name=$_FILES['image']['name'];
				  $img_type=$_FILES['image']['type'];
				  $tmp_name=$_FILES['image']['tmp_name'];
				  $img_explode = explode('.',$img_name);
				  $img_ext=end($img_explode);
				  $extension=['png','jpeg','jpg','jpge'];
				  if(in_array($img_ext,$extension)===true){
					  $time=time();
					  $new_img_name=$time.$img_name;
					  if(move_uploaded_file($tmp_name,"uimages/".$new_img_name)){
					  $status="Active now";
					  $random_id=rand(time(),1000000);
					  $sql2=mysqli_query($con,"INSERT INTO users (unique_id,fame,lname,email,password,img,status)
					               VALUES({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");
								if($sql2){
									$sql3 = mysqli_query($con,"SELECT * FROM users WHERE email = '{$email}'");
									if(mysqli_num_rows($sql3) > 0){
										$row = mysqli_fetch_assoc($sql3);
										$_SESSION['unique_id']=$row['unique_id'];
										echo 'success';
									}
								}else{
									echo 'somethnig went wrong';
								}
					  }
				  }else{
					  echo 'Please upload jpg or png format images';
				  }
				  
			  }else{
				  echo "please select an image file!";
			  }
		  }
		  
	  }else{
		  echo "$email . is not validate email ";
	  }
	  
	  
	  
	
}else{
	echo "All inputs are required";
}

?>