<?php
       session_start();
	if(isset($_SESSION['unique_id'])){
		include_once "config.php";
		$outgoing_id = mysqli_real_escape_string($con,$_POST['outgoing_id']);
		$incoming_id = mysqli_real_escape_string($con,$_POST['incoming_id']);
		$output="";
		
	
		
		$sql="SELECT * FROM message LEFT JOIN users ON users.unique_id = message.incoming_msg_id
			 
							     WHERE (outcoming_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                                     OR (outcoming_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
							$query = mysqli_query($con,$sql);
							if(mysqli_num_rows($query) > 0){
								while($row = mysqli_fetch_assoc($query)){
								if($row['outcoming_msg_id'] === $outgoing_id){
								
									$output .='  <div class="chat outgoing">
	                               <div class="details">
	                                 <p>'.$row['message'].'</p>
	                                     </div>
	                                   </div>';
		 						}else{
								$output .=  '<div class="chat incoming">
			                              <img src="uimages/'.$row['img'].'"  alt="">
	                           <div class="details">
	                             <p>'.$row['message'].'</p>
	                               </div>
	                                 </div>' ;
									
								}
								}
								echo $output;
							}/*if($row['outcoming_msg_id'] === $incoming_id) || ($row['incoming_msg_id'] === $incoming_id)*/
		
	}else{
		header("../loginchat.php");
	}


  
  
?>