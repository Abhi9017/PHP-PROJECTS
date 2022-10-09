<?php
while($row = mysqli_fetch_assoc($sql)){
             $sql2 =" SELECT * FROM message WHERE (incoming_msg_id = {$row['unique_id']}
			 OR outcoming_msg_id={$row['unique_id']}) AND (outcoming_msg_id= {$outgoing_id}
			 OR outcoming_msg_id={$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
			 $query2 = mysqli_query($con,$sql2);
			 $row2 = mysqli_fetch_assoc($query2);
			 if(mysqli_num_rows($query2) > 0){
				 $result = $row2['message'];
			 }else{
				 $result = "no messages availble";
			 }
			// trimming message if word are mmore  than 28
			 (strlen($result) > 28) ? $message = substr($result,0,28).'...': $message = $result;
			 ($outgoing_id == $row2['outcoming_msg_id']) ? $you = "You: " : $you = "";
			 //online or offline
			 
			 
			 ($row['status'] == "Offline now") ? $offline = "offline" : $offline  ="";
		$output .= ' <a href="chatin.php?user_id='.$row['unique_id'].'">
				      <div class="content">
					  <img  src="uimages/'.  $row['img'] .' "alt="">
					  <div class="details">
					  <span>'.$row['fame']." ".$row['lname'].' </span>
					  <p>'.$you .$message.'</p>
					  </div>
					  </div>
				   <div class="status-dot '.$offline.'"><i class="fas fa-circle"></i></div>
				   </a>';
	}
	?>