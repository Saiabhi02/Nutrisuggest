<?php
	session_start();
	require 'config.php';
?>
<!DOCTYPE html>
<html>
<title>Home Page</title>
<head>
<link rel="stylesheet" type="text/css" href="v4.css">
<link rel="stylesheet" type="text/css" href="v6.css">
<link rel="stylesheet" type="text/css" href="v9.css">
<style>
body {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
.hello {
    border: 2px solid #3498db;
    background-color: #222f3e;
    height: 40px;
    width: 400px;
    color: #3498db;
	font-size:25px;
    box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
	cursor:pointer;
	border-radius:20px;
}
.hello:hover
{
	background-image:linear-gradient(to right, #00a8ff ,#ecf0f1);
	color:black;
}
.openbtn2 {
  font-size: 30px;
  font-weight:bold;
  background-color: #1289A7;
  color: white;
  padding: 10px 140px;
  border: none;

}

</style>
</head>
<body bgcolor="#ecf0f1" style="background-image:url('imgs/check.JPG');">

	<div class="sidebar" id="sidenavbar">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
	<center>
			<img src="imgs/admin.jpg" class="IWMS"/><br><br>
			<font color="#e67e22" size="6">Welcome Admin
		<?php echo $_SESSION['loginid'] ?>
		</font><br>
	</center>
	<hr style="height:2px;border-width:0;background-color:red">

	<hr style="height:1px;border-width:0;color:gray;background-color:gray">
	<a href="viewuserdata.php">User's Data</a>
	<hr style="height:1px;border-width:0;color:gray;background-color:gray">
	
	<a href="alogout.php">Logout</a>
	<hr style="height:1px;border-width:0;color:gray;background-color:gray">
	</div>


	<div id="main">
	<button class="openbtn" onclick="openNav()">☰ </button> <font color="#1e3799"><center><span class="openbtn2">NutriSuggest</span></center></font>
	<h1 align="center"></h1>
	<br><br><br><br><br><br>
	<center>
<a href="viewuserdata.php"><input type="button" class="hello" value="Click Here to view User's Data"/></a><br><br>
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

</body>
</html>
