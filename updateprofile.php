<?php 
	
	$title = "Update Profile";
	include('inc/_header.php');
	
?>

<div class=" col-md-offset-3 col-md-6">
	<h2>Update Profile</h2>
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
				<option class="active">Select State</option>
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
    		<textarea type="text" class="form-control" id="bio" placeholder="Tell us about yourself" rows="10"></textarea>
  		</div>
  		<div class="form-group">
    		<label for="photograph">Upload Photo</label>
    		<input type="file" id="phptograph">
    		<p class="help-block">The size of your upload should be 10kb min & 10MB</p>
  		</div>
  
  		<button type="submit" class="btn btn-primary btn-block">Update</button>
	</form>
</div>
<div class="col-md-3">
</div>

<div class="col-md-12 text-center footer" id="footer">
<?php include 'inc/_footer.php'; ?>
</div>