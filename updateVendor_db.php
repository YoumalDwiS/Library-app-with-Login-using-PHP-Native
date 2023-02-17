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
    if(isset($_GET['id_vendor']))
    {
        $nama_vendor = $_POST['nama_vendor'];
        $id_vendor = $_GET['id_vendor'];
        $alamat_vendor = $_POST['alamat_vendor'];
        $telp_vendor = $_POST['telp_vendor'];
        $email_vendor = $_POST['email_vendor'];

        include "koneksi.php";

        $update = mysqli_query($con, "update vendor set nama_vendor='$nama_vendor', alamat_vendor='$alamat_vendor', telp_vendor='$telp_vendor', email_vendor='$email_vendor' where id_vendor='$id_vendor'")
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