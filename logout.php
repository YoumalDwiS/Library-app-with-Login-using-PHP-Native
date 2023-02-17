    <?php
    	session_start();
    	session_destroy();
     
    	if (isset($_COOKIE["nama"]) AND isset($_COOKIE["pass"])){
    		setcookie("nama", '', time() - (3600));
    	}
     
    	header('location:index.php');
     
    ?>