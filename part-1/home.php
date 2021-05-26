
<!DOCTYPE html>
     <html>
            <head>
              <title>Registration system PHP </title>
              <link rel="stylesheet" type="text/css" href="style.css">
    </head>
        <body>
        <div class="rows">
          <section class="rows-1st">
		    <div class="titles">
            <h2>Register</h2>
            </div>
            <form method="post" action="safe.php">
            <div class="input-group">
  	        <label>Full Name</label>
  	        <input type="text" name="fullname"  required placeholder="Write something.."<?php echo $fullname; ?>>
  	        </div>
			  <div class="input-group">
  	        <label>Username</label>
  	        <input type="text" name="newname" required <?php echo $newname; ?>>
  	        </div>
         	<div class="input-group">
  	        <label>Password</label>
  	        <input type="password" name="password_1" required>
  	        </div>
  	        <div class="input-group">
  	        <label>Confirm password</label>
  	        <input type="password" name="password_2" required>
  	        </div>
			<div class="input-group">
  	        <label>Email</label>
  	        <input type="email" name="email" <?php echo $email1; ?>required>
		   	</div>
			<div class="input-group">
			<label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="--/------"  <?php echo $phone; ?>>
			</div>
			<div class="input-group">
			<label for="birthday">Date of Birth:</label>
            <input type="date" id="birthday" name="birthday"<?php echo $birth; ?>>
            </div> 
			<div class="input-group">
			<label for="social">Social Security Number:</label>
            <input type="social" id="social" name="social" placeholder="....." required <?php echo $social; ?>>
			</div>
  	        <div class="input-group">
  	        <button type="reg_user" class="btn" name="reg_user">Register</button>
          	</div>
			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
           </form>
         </section>
		    <section class="rows-2nd">
			<div class="titles">
  	        <h2>Login</h2>
            </div> 
            <form method="post" action="safe.php">
         	<div class="input-group">
  		    <label>Username</label>
  	     	<input type="text" name="username" required value="<?php echo $username; ?>" > 
        	</div>
  	        <div class="input-group">
  		    <label>Password</label>
  		    <input type="password" name="password"required value="<?php echo $password; ?>"> 
  	        </div>
  	        <div class="input-group">
  		    <button type="submit" class="btn" name="submit">Login</button>
  	        </div>
			<p>Already have an account? <a href="#">Sign in</a>.</p>
			</form>
         </section>
       </div>
    </body>
  </html>
