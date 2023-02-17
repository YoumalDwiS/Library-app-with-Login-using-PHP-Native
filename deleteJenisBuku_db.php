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
        $id_jenis = $_GET['id_jenis_buku'];

        include "koneksi.php";

        $delete = mysqli_query($con, "delete from jenisbuku where id_jenis_buku='$id_jenis'")
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