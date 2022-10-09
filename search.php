<?php
             session_start();
                    include_once "config.php";
	            $outgoing_id=  $_SESSION['unique_id'];
					
			     $sterm=mysqli_real_escape_string($con,$_POST['searchTerm']);
				$output ="";
				
		$sql = mysqli_query($con,"SELECT * FROM users WHERE NOT unique_id={$outgoing_id} AND (fame LIKE '%{$sterm}%' OR lname LIKE '%{$sterm}%')");
				if(mysqli_num_rows($sql) > 0){
			        include "data.php";

				}else{
					$output.="Sorry!no user found";
				}
				echo $output;
				
				
				
				
?>