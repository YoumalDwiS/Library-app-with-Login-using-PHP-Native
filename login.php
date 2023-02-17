    <?php
    	if(isset($_POST['login'])){
     
    		session_start();
    		include('koneksi.php');
     
    		$username=$_POST['username'];
			$password=$_POST['password'];
			$s_username=$_SESSION['username'];
            
    		$query=mysqli_query($con,"select * from materi_security ");
     
    		if (mysqli_num_rows($query) == 0){
    			$_SESSION['message']="Login Failed. User not Found! $password";
    			header('location:index.php');
    		}
    		else{
				$role = "";
    			while($row = mysqli_fetch_array($query)) {
					//autentikasi username dan pass
					if($row ['username'] == $username && $row ['password'] == $password) {
						$role = $row['role'];
						$_SESSION['username']=$row['username'];
					}
				}
     
    			if (isset($_POST['remember'])){
    				//set up cookie
    				setcookie("user", $row['nama'], time()+1800); 
    			}
     
    			
				//header('location:home.php');
				if ($role == "Admin") {
					echo "<script>alert('selamat datang di halaman admin');</script>";
					header('location:home.php');
				} else if ($role == "Mahasiswa") {
					echo "<script>alert('selamat datang di halaman Mahasiswa');</script>";
					header('location:menumhs.php');
				}
    		}
    	}
    	else{
    		header('location:index.php');
    		$_SESSION['message']="Please Login!";
    	}
    ?>