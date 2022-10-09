<?php

    require 'dbconnect.php';
	 echo '<br>kindly you are not register please contact 8309169464 or use below link for register';

       if(isset($_POST['ruser'])
		   &&isset($_POST['email'])
	       &&isset($_POST['rpass'])
	       &&isset($_POST['rpass2']))
		   {
		    $ruser=$_POST['ruser'];
			$email=$_POST['email'];
			$rpass=$_POST['rpass'];
		   $rpass2=$_POST['rpass2'];
			
			
			if(!empty($ruser)&&!empty($email)&&!empty($rpass)&&!empty($rpass2)){
				 $query="SELECT `username` FROM `users1` WHERE `username`='$ruser'"; 
				 if($queryrun=mysqli_query($mycon,$query)){
					 $nrows=mysqli_num_rows($queryrun);
					 if($nrows==1){
						 echo '<br>username already exist ';
						 
					  }
						 else if($nrows==0){
				   if($rpass==$rpass2){
							 $rquery="INSERT INTO `users1`(`id`,`username`,`password`,`email`) VALUES(NULL,'$ruser','$rpass','$email')";
							 if($rqueryrun=mysqli_query($mycon,$rquery)){
								 ob_start();
								 header('Location:afterregister.php');
								 ECHO '';
							 }
							 
						 }else{
							 echo '<br>password not match';
						 }
					 }
				 }
			}else{
				echo '<br> ALL FILEDS REQUIRED';
			}
	    

		  }



?>



<form action="register.php" method="POST">
username:
<br><input type="text" name="ruser" ><br>


email:
<br><input type="text" name="email" ><br>
password:

<br><input type="password" name="rpass"><br>

Confirm--password:

<br><input type="password" name="rpass2"><br>

<input type="submit" value="signup"><br>

</form>