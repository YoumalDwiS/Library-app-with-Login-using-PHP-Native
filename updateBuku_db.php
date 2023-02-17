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
    if(isset($_GET['id_buku']))
    {
        $nama_buku = $_POST['nama_buku'];
        $id_buku = $_GET['id_buku'];
        $id_jenis_buku = $_POST['id_jenis_buku'];
        $id_vendor = $_POST['id_vendor'];
        $jml_stok = $_POST['jml_stok'];

        include "koneksi.php";

        $update = mysqli_query($con, "update buku set nama_buku='$nama_buku', id_jenis_buku='$id_jenis_buku', id_vendor='$id_vendor', jml_stok='$jml_stok' where id_buku='$id_buku'")
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