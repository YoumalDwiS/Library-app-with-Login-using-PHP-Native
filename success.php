<?php
    	session_start();
     
    	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
    		header('index.php');
    		exit();
    	}
    	include('koneksi.php');
    	$query=mysqli_query($con,"select * from materi_security where username='".$_SESSION['id']."'");
    	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
    <html>
    <head>
    <title>Setting Up Cookie on User Login</title>
    </head>
    <body>
    	<h2>Login Success</h2>
    	<?php echo $row['nama']; ?>
    	<br>
    	<a href="logout.php">Logout</a>
    </body>
</html>