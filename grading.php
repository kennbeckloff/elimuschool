<!DOCTYPE html>
<html>
<head>
	<title>Grading</title>
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<style type="text/css">
	body{background-image: url(pictures/book.jpeg);
			background-repeat: no-repeat;
			background-size: 100%}</style>

</head>
<body>

		

	
</head>
<body>
	<div id="maincontent">
		<div class="jumbotron">
				<h2 style="text-align: center;">ELIMU SCHOOL GRADING SYSTEM</h2>
				<hr>
			</div>
			<form class="inline-form" method = "GET" role="form">
				<div class="form-inline">
					<label for="math">MATH</label>
					<input type="number" name="maths">
				</div>
					<div class="form-group">
					<label for="english">ENGLISM</label>
					<input type="number" name="english">
				</div>
					<div class="form-group">
					<label for="kiswahili">KISWAHILI</label>
					<input type="number" name="kiswahili">
				</div>	<div class="form-group">
					<label for="phyc">PHYSICS</label>
					<input type="number" name="phy">
				</div>	<div class="form-group">
					<label for="chemistry">CHEMISTRY</label>
					<input type="number" name="chemistry">
				</div>
					<div class="form-group">
					<label for="comps">COMPUTER</label>
					<input type="number" name="comp">
					<br>
					<br>
					<button  class="btn btn-success">submit</button>
					<button class="btn btn-danger">reset</button>
				</div>

				<?php
					$m = $_GET["maths"];
					$e = $_GET["english"];
					$k = $_GET["kiswahili"];
					$p = $_GET["phy"];
					$c = $_GET["chemistry"];
					$a = $_GET["computer"];
					$grade =($a+$c+$p+$k+$e+$m)/6;
					echo "average grade:".$grade."grade:";
	if ($grade>=90) {
  	# code...
  	echo "A";
  }
  elseif ($grade>=70) {
  	# code...
  	echo "B";
  }
  elseif ($grade>=60) {
   	# code...
   echo "C";
   } 
   elseif ($grade>=50) {
   	# code...
   	echo"D";
   }
  else {
  	# code...
  	echo "E";
  } 
				 ?>
			</form>
		</div>
	</div>

</body>
</html>