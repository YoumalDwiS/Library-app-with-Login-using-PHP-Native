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
        $id_buku = $_GET['id_buku'];

        include "koneksi.php";

        $delete = mysqli_query($con, "delete from buku where id_buku='$id_buku'")
            or die (mysqli_error());
        if ($delete)
        {
            sukses();
        }            
        else
        {
            gagal();
        }            
    }
?>