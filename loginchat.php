<?php include_once "header.php"; 
?>   
  <body>
         <div class="wrapper">
             <section class="form login">
                 <header>Real time chatting appp </header>
                 <form action="#">
                     <div class="error-txt"></div>
          <div class="field input">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password"  name="password" placeholder="First Name" required>
                            <i class="fas fa-eye"></i>

                        </div>
                       
                        <div class="field button">
                            <input type="submit"  value="continue to chat">

                        </div>
                     
                 </form>
                 <div class="link">Not yet Signed up? <a href="chatting.php" >Signup now</a></div>
             </section>
         </div>
		 <script src="passshowhide.js"></script>
		 		 <script src="login.js"></script>
				 

     </body>
</html>