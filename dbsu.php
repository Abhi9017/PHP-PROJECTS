<?php
 $host='localhost';
 $user='root';
 $password='';
 $dbname='mydatabase';
 if($mycon=@mysqli_connect($host,$user,$password)){
	   if(mysqli_select_db($mycon,$dbname)){
		   
	   }
		   else {
			    
		   }
	   
	 
	    }else{
		echo 'couldny servver and dtaabase';
	}

?>