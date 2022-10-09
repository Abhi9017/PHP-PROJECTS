
	     <?php
		 
		 
	

require 'dbconnect.php';
                      
   if(isset($_POST['username'])&&isset($_POST['password'])){
	   $username=mysqli_real_escape_string($mycon,$_POST['username']);
	   $password=mysqli_real_escape_string($mycon,$_POST['password']);
	   if(!empty($username)&&!empty($password)){
		   
		      $query="SELECT `id` FROM `users1` WHERE `username`='$username' AND `password`='$password'";
	   if($queryrun=mysqli_query($mycon,$query)){
			   $numrows=mysqli_num_rows($queryrun);
				    if($numrows==0){
						echo '<br>invalid creditnals<br>';
						ob_start();
							header('Location:register.php');
						 echo 'kindly you are not register please contact 8309169464 or use below link for register';

						
					}else if($numrows==1){
						$row=mysqli_fetch_row($queryrun);
						echo $id =$row[0];
		                  
							ob_start();
							header('Location:afterlogin.php');
						
						
	  }
						
					}
			  }else{
		   echo '<br>ALL FILEDS REQUIRED';
	   }
	   }
   


















?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width", initial-scale=1.0">
	 <title>  abhilash </title>
	 <link rel="stylesheet" href="C:\bootstrap\css\bootstrap.css ">
	 <script src="C:\bootstrap\js\bootstrap.js"> </script>
	 <script src="C:\bootstrap\js\jquery.js"></script>
	 
	 </head>
	 <body>
	 <div id="ll"
	 <ol class="list-inline">
<li class="list-inline-item"> <a href="ff"> Home</a></li>
<li class="list-inline-item"> <a href="ff">Index</a></li>

<li class="list-inline-item"> <a href="ff"> Contact us</a></li>

<li class="list-inline-item"> <a href="ff">  About us</a></li></li>
</div>
	

	 
	 <div class="container">  
	 
<div class="text-center"  style= "border:4px double red">
     <div class="row align-items-center">
	    <div class="col-md-3"  style="background-color:white">
		<form action="loginl.php"method="POST">
    username:<br>
	<input class="text-center" type="text" name="username" ><br>
  password :<br><input type="password" name="password">
	
		 
		 </div>
		 		 </div>
</div>
		 </div>


	
	
	</body>
	 </html>

  	
  
 
 
  
  <input type= "submit" value="login">
   
</form>