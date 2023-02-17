<?php

        function sukses()
        {
                echo "<script>alert('Data berhasil disimpan.');
                window.location.href = 'readJenisBuku.php';</script>";
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
        $id_jenis = $_POST['id_jenis_buku'];
        $nama_jenis = $_POST['nama_jenis_buku'];
        $s_username=$_SESSION['username'];
        

        $insert = mysqli_query($con, "insert into jenisbuku values (DEFAULT,'$nama_jenis', '$s_username')");
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