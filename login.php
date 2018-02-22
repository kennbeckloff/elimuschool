<!DOCTYPE html>
<html>
<head>
	<title>Elimu Login</title>
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<br>
	<br>
	<div class="container-fluid">
<form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Student Name:</label>
      <div class="col-sm-10">
        <input type="txt" class="form-control" id="email" placeholder="Enter Full Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ADM No:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter ADM No" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn-success">Submit</button>
       <?php 
    $pass=$_GET['pwd'];
    if ($pass==true) {
    	# code...
    	echo "";
    }
        ?>
      </div>
    </div>
  </form>
  </div>
</body>
</html>