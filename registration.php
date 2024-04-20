<?php include("header.php"); ?>

<div class="login-form-page" >
		<form  style='width: 300px; margin:10% auto;' action="register.php" method="post">
        <h1>Please Register Yourself 😊</h1>
		<div class="form-group">
		<label for="email">E-mail</label>
		  <input class="form-control" type="email" name="email" value="" required>
		</div>

		<div class="form-group">
		<label for="userpassword">PASSWORD</label>
		  <input class="form-control" type="password" name="password" value="" >
		</div>

		<div class="form-group">
		  <input type="submit" name="register" class="btn btn-danger btn-dark text-center"  style="color:black;" value="register">
		</div>

		</form>


		 
</div>


<?php include("footer.php"); ?> 