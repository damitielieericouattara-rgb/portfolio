<?php 
session_start();
if (!isset($_SESSION['idRole'])) {
	header('Location:../index.php');
}
session_destroy();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
			<h2 style="margin-left:300px; color: red;">ATTENTION VIOLATION DE DROIT</h2>
		<div style="width: 600px;height: 100px; margin-left:300px;position: absolute;"><img src="../image/Lock.jpg" alt="" height="400"> </div> 
</body>
</html>