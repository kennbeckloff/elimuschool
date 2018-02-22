<!DOCTYPE html>
<html>
<head>
	<title>Elimu Registration</title>
	<meta name="veiwport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<html>
<body >
<form action="/examples/jsp/proces.jsp" method=post>
<center>
<table cellpadding=2 cellspacing=1 border="1" bgcolor="lightblue">
<th bgcolor="lightgrey" colspan=2>
<font size=4>Elimu School Registration Form</font>
<br>
<font size=2 color="red"><sup>*</sup> Must Enter Fields</font>
</th>
<tr bgcolor="lightgrey">
<td valign=top> 
<b>First Name<sup>*</sup></b> 
<br>
<input type="text" name="firstName" value="" size=20 maxlength=20></td>
<td valign=top>
<b>Last Name<sup>*</sup></b>
<br>
<input type="text" name="lastName" value="" size=15 maxlength=20></td>
</tr>
<tr bgcolor="lightgrey">
<td valign=top>
<b>E-Mail<sup>*</sup></b> 
<br>
<input type="text" name="email" value="" size=25 maxlength=125>
<br></td>
<td valign=top>
<b>	Parents's Name<sup>*</sup></b> 
<br>
<input type="text" name="text" value="" size=10 maxlength=8></td>
</tr>
<tr bgcolor="lightgrey">
<td valign=top colspan=2>
<b>User Name<sup>*</sup></b>
<br>
<input type="text" name="userName" size=20 value="" maxlength=10>
</td>
</tr>
<tr bgcolor="lightgrey">
<td valign=top>
<b>Password<sup>*</sup></b> 
<br>
<input type="password" name="password1" size=10 value="" maxlength=10></td>
<td valign=top>
<b>ConfirmPassword<sup>*</sup></b>
<br>
<input type="password" name="password2" size=10 value="" maxlength=10></td>
<br>
</tr>
<tr bgcolor="lightgrey">
<td valign=top colspan=2>
<b>Which form are you intrested in joining?</b>
<br>
<input type="checkbox"  value="">form 1 
<input type="checkbox"  value="">Form 2
<input type="checkbox"  value="">Form 3
<input type="checkbox"  value="">Form 4
</td>
</tr>
<tr bgcolor="lightgrey">
<td valign=top colspan=2>
<b>Would you like to receive e-mail notification to verify registration?</b>
<br>
<input type="radio" name="notify" value="Yes" checked>Yes 

<input type="radio" name="notify" value="No" > No 
<br><br></td>
</tr>
</table>
<button class="btn-danger" type="reset" style="align-items: center;">RESET</button>
<button class="btn-success" type="submit">SUBMIT</button>
<?php 
  $data=$_GET['firstName'];
    if ($data==true) {
    	# code...
    	echo "";
    }
 ?>
</center>
</form>
</body>
</html>
</body>
</html>