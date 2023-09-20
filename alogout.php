<?php
	session_start();
	require 'config.php';
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
	session_destroy();
	header('location:adminlogin.php');
?>
</body>
</html>
