<?php 
session_start();

if (isset($_SESSION['Username']) && isset($_SESSION['Password'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Bonjour,&nbsp;<?php echo $_SESSION['Username']; ?></h1>
     <a href="logout.php">Deconnexion</a>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>