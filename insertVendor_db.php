<?php

        function sukses()
        {
                echo "<script>alert('Data berhasil disimpan.');
                window.location.href = 'readVendor.php';</script>";
        }

        function gagal()
        {
                echo "<script>alert('Data gagal disimpan.');
                window.history.go(-1);</script>";
        }
        
    if(isset($_POST['submit']))
    {
        include "koneksi.php";
        session_start();
        $nama_vendor = $_POST['nama_vendor'];
        $alamat_vendor = $_POST['alamat_vendor'];
        $telp_vendor = $_POST['telp_vendor'];
        $email_vendor = $_POST['email_vendor'];
        $s_username=$_SESSION['username'];

        if(!filter_var($email_vendor, FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('Invalid Format Email.');
            window.history.go(-1);</script>";
        }
        else{
            $insert = mysqli_query($con, "insert into vendor values (DEFAULT,'$nama_vendor','$alamat_vendor','$telp_vendor','$email_vendor', '$s_username')")
            or die (mysqli_error());    
        }
        
        if ($insert)
        {
            sukses();
        }            
        else
        {
            gagal();
        }            
    }
    
?>