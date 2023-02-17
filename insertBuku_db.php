<?php

        function sukses()
        {
                echo "<script>alert('Data berhasil disimpan.');
                window.location.href = 'readBuku.php';</script>";
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
        $nama_buku = $_POST['nama_buku'];
        $id_jenis_buku = $_POST['id_jenis_buku'];
        $id_vendor = $_POST['id_vendor'];
        $jml_stok = $_POST['jml_stok'];
        $s_username=$_SESSION['username'];

        $insert = mysqli_query($con, "insert into buku values (DEFAULT,'$nama_buku','$id_jenis_buku','$id_vendor','$jml_stok')")
            or die (mysqli_error());
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