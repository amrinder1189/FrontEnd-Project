<?php include("header.php"); ?>

<div class="login-form-page" >
		<form  style='width: 300px; margin:10% auto;' action="login1.php" method="post">

                        
                     
	

      
		<div class="form-group">
		<label for="email">E-mail</label>
		  <input class="form-control" type="email" name="email" value="" required>
		</div>

		<div class="form-group">
		<label for="userpassword">PASSWORD</label>
		  <input class="form-control" type="password" name="password" value="" >
		</div>

		<div class="form-group">
		  <input type="submit" name="login" class="btn btn-danger btn-dark text-center"  style="color:black;" value="login">
		</div>

		</form>


		
</div>


<?php include("footer.php"); ?> 