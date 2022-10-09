<?php
session_start();
if(!isset($_SESSION['unique_id'])){
	header('location:loginchat.php');
}
?>
<?php include_once "header.php"; ?>

     <body>
	   <div class="wrapper">
	   <section class="chat-area">
	   <header>
	  <?php
				 include_once "config.php";
				 $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
				  $sql=mysqli_query($con,"SELECT * FROM users WHERE unique_id={$user_id}");
				  if(mysqli_num_rows($sql) > 0){
					  $row = mysqli_fetch_assoc($sql);
				  }
				  
				 ?>
                   
	   <a href="chatlogout.php"  class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="uimages/<?php echo $row['img'] ?>" alt="">
	   <div class="details">
	   <b><span><?php echo $row['fame']." ".$row['lname']?></span></b>
	   <p><?php echo $row['status']?></p>
	   </div>
	  
	   </header> 
	   <div class="chat-box">
	   <div class="chat outgoing">
	                               <div class="details">
	                                 <p>Abhilash Chinnala</p>
	                                     </div>
	                                   </div>
									   '<div class="chat incoming">
			                              <img src="ch.jpg"  alt="">
	                           <div class="details">
	                             <p>visit my website  </p>
	                               </div>
	                                 </div>
									
	   
	   
	 
	   
	   	 

        </div>
		<form action="#" class="typing-area" autocomplete="off">
		<input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
		<input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden >
        <input type="text" name="message" class="input-field" placeholder="Type a Message here....">
		<button> <i class="fab fa-telegram-plane"></i></button>
		</form>
		
		
	   </section>
	   </div>
	 <script src="dynchat.js"> </script>
	 </body>
	 </html>