<?php
session_start();
if(!isset($_SESSION['unique_id'])){
	header('location:loginchat.php');
}
?>

<?php include_once "header.php"; 
?>
   <body>
         <div class="wrapper">
             <section class="users">
                 <header>
				 <?php
				 include_once "config.php";
				  $sql=mysqli_query($con,"SELECT * FROM users WHERE unique_id={$_SESSION['unique_id']}");
				  if(mysqli_num_rows($sql) > 0){
					  $row = mysqli_fetch_assoc($sql);
				  }
				  
				 ?>
                     <div class="content">
                         <img src="uimages/<?php echo $row['img'] ?>" alt="this is a picture">
                         <div class="details">
                             <span><?php echo $row['fame']." ".$row['lname']?></span>
                             <p><?php echo $row['status']?></p>

                     </div>
                    </div>
					

                     
                    <a href= "logout3.php?logout_id=<?php echo $row['unique_id']?>" class="logout">Logout</a>
                 </header>
                   <div class="search">
                       <span class="text">Select user to chat</span>
                       <input type="text" id="search" placeholder="Enter name to search">
                       <button><i class="fas fa-search"></i></button>
                   </div>
				   <div class="users-list">
				   

				   </div>
                   
             </section>
         </div>
		 <script src="searchbar.js"></script>
     </body>
</html>