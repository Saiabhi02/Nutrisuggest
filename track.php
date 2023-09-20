<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<title>Nutrition</title>
<style>
body {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: white;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: green;
  color: white;
}
.check {

   background-image:linear-gradient(to right, #9980FA ,#D980FA);
}
.check:hover
{
	background-image:linear-gradient(to right, #00a8ff ,#ecf0f1);
	color:black;
}

</style>
<head>
<link rel="stylesheet" type="text/css" href="css/v6.css">
<link rel="stylesheet" type="text/css" href="css/v9.css">
</head>
<body style="background-image:url('imgs/check.JPG');">
<div class="sidebar" id="sidenavbar">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
	<center>
			<img src="imgs/homepage.JPG" class="IWMS"/><br><br>
			<font color="#e67e22" size="6">Welcome
		<?php echo $_SESSION['loginid'] ?>
		</font><br>
	</center>
	<hr style="height:2px;border-width:0;background-color:red">

	<hr style="height:1px;border-width:0;color:gray;background-color:gray">
	<a href="homepage2.php">Home</a>
	<hr style="height:1px;border-width:0;color:gray;background-color:gray">
	<a href="halls.php">Book</a>
	<hr style="height:1px;border-width:0;color:gray;background-color:gray">
	<a href="alogout.php">Logout</a>
	<hr style="height:1px;border-width:0;color:gray;background-color:gray">
	</div>
	<div id="main">
	<button class="openbtn" onclick="openNav()">☰ </button>
<center><font style="font-family:Trebuchet MS;font-size:30px;font-weight:bold;">Click the respective button to check your Nutrition Suggestion</font><br><br>
	<a href="kids.html"><input type="button" class="hello" id="back_btn" value="Nutrition for kids"/></a><br><br>
	<a href="pregnant.html"><input type="button" class="hello" id="back_btn" value="Nutrition for Pregnant women"/></a><br><br>
	<a href="aged.html"><input type="button" class="hello" id="back_btn" value="Nutrition for Aged people"/></a><br><br>
<br><a href="homepage2.php"><input type="button" id="back_btn" value="Return to Home Page"/></a>
	</center>
</center>
</div>
<script>
function openNav() {
  document.getElementById("sidenavbar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("sidenavbar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<a href="user2.php" target="_blank"><button class="bottom">Live Chat with Admin</button></a>
</body>
</html>
