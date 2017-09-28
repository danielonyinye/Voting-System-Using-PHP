
<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>

<body>
	<form class="container">
    <?php include('navbar.php') ?>
  
    <div class="col-md-4">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" width="50%">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-default">Login</button>
  </div>
  <div class="col-md-8">
    <p>This is where any other information can enter if need be</p>
  </div>
</form>
	
</body>
</html>