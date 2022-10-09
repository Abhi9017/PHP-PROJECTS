<?php          

        session_start();
		if(isset($_session['unique_id'])){
			header("location : chatlogout.php");
		}


?>


<?php include_once "header.php"; 
?>
     <body>
         <div class="wrapper">
             <section class="form signup">
                 <header>Real time chatting appp </header>
                 <form action="#" enctype="multipart/form-data" autocomplete="off">
                     <div class="error-txt"></div>
                     <div class="name-details">
                         <div class="field input">
                             <label>First Name</label>
                             <input type="text" name="fname" placeholder="First Name" required>
                         </div>
                         <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="First Name" required>
                            <i class="fas fa-eye"></i>

                        </div>
                        <div class="field image">
                            <label>select image</label>
                            <input type="file" name="image" placeholder="First Name"  required>
                        </div>
                        <div class="field button">
                            <input type="submit"  value="continue to chat">

                        </div>
                     </div>
                 </form>
                 <div class="link">Already  signed up? <a href="loginchat.php" >Login NOW</a></div>
             </section>
         </div>
		 <script src="passshowhide.js"></script>
		 		 <script src="signup.js"></script>

     </body>
</html>