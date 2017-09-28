<?php 
	
	$title = "Register/Login";
	include('inc/_header.php');
	
?>

<div class="form-group col-md-6">
	<h2>Login to Vote</h2>
	<hr>
	<div class="col-md-4" id="loginform">
		<form action="" method="Post">
		  	<div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" placeholder="Enter username">
	  		</div>
			<div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" placeholder="Enter Password">
	  		</div>
	  		<div class="form-group">
	  			<input type="checkbox" name="rememberme">Remember Me <p />
	  		</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
</div>
<div class="col-md-6">
	<h2>Register</h2>
	<hr>
	<form>
		<div class="form-group">
			<label for="names">Names</label>
		    <input type="text" class="form-control" id="names" placeholder="Enter full name">
	  	</div>
		<div class="form-group">
    		<label for="email">Email address</label>
    		<input type="email" class="form-control" id="email" placeholder="Email">
  		</div>
  		<div class="form-group">
    		<label for="contact">Contact Number</label>
    		<input type="phone" class="form-control" id="contact" placeholder="Phone number">
  		</div>
  		<div class="form-group">
    		<label for="contactaddress">Contact Address</label>
    		<input type="phone" class="form-control" id="contactaddress" placeholder="Phone number">
  		</div>
  		<div class="form-group">
  			<label for="gender">Gender</label>
  			<select class="form-control" id="gender">
				<option class="active">Select Gender</option>
				<option>Male</option>
				<option>Female</option>
			</select>
		</div>
		<div class="form-group">
  			<label for="state">State of Origin</label>
  			<select class="form-control" id="state">
				<option class="active">Select Country</option>
				<option>Abia</option>
				<option>Adamawa</option>
				<option>Akwa Ibom</option>
				<option>Anambra</option>
				<option>Delta</option>
				<option>Edo</option>
				<option>Enugu</option>
				<option>Bayelsa</option>
			</select>
		</div>
		
  		<div class="form-group">
    		<label for="bio">Bio</label>
    		<textarea type="text" class="form-control" id="bio" placeholder="Tell us about yourself" rows="5"></textarea>
  		</div>
  		<div class="form-group">
    		<label for="photograph">Upload Photo</label>
    		<input type="file" id="phptograph">
    		<p class="help-block">The size of your upload should be 10kb min & 10MB</p>
  		</div>
  
  		<button type="submit" class="btn btn-primary btn-block">Submit</button>
	</form>
</div>
<div class="footer">
<?php include 'inc/_footer.php'; ?>
</div>