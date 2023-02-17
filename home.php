<?php
  include "koneksi.php";

    	session_start();

    	if (!isset($_SESSION['username']) ||(trim ($_SESSION['username']) == '')) {
            header('index.php');
    		exit();
    	}
    	include('koneksi.php');
    	$query=mysqli_query($con,"select * from materi_security where username='".$_SESSION['username']."'");
    	$row=mysqli_fetch_assoc($query);

        setcookie("nama", $row['nama'], time()+1800);
    ?>
    
    <head>
        <title>Home</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
            <div class="header">
                <div class="title">
                    Menu Admin
                </div>
            </div>

            <div class="menu">
                <ul>
                    <a href="home.php"><li>Home</li></a>
                    <a href="readJenisBuku.php"><li>JenisBuku</li></a> 
                    <a href="readBuku.php"><li>Buku</li></a>
                    <a href="readVendor.php"><li>Vendor</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                </ul>
            </div>

            <div class="content">
                <h1>Hi, Selamat Datang <?php echo $row['nama']; ?> </h1>
                
            </div>            
</body>