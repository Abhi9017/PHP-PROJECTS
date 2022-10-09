<?php
 $host='localhost';
 $user='root';
 $password='';
 $dbname='mydatabase1';
 if($mycon=mysqli_connect($host,$user,$password)){
	   if(mysqli_select_db($mycon,$dbname)){
		   echo 'securly connected to database and server';
	   }
		   else {
			   echo 'connected to serever not connectedn to database ';
		   }
	   
	 
	    }else{
		echo 'couldny servver and dtaabase';
	}

?>