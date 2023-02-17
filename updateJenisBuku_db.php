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
    if(isset($_GET['id_jenis_buku']))
    {
        $nama_jenis = $_POST['nama_jenis_buku'];
        $id_jenis = $_GET['id_jenis_buku'];

        include "koneksi.php";

        $update = mysqli_query($con, "update jenisbuku set nama_jenis_buku='$nama_jenis' where id_jenis_buku='$id_jenis'")
            or die (mysqli_error());
        if ($update)
        {
            sukses();
        }            
        else
        {
            gagal();
        }            
    }
    
?>