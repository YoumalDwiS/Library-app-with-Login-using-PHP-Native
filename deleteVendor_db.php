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
        $id_vendor = $_GET['id_vendor'];

        include "koneksi.php";

        $delete = mysqli_query($con, "delete from vendor where id_vendor=$id_vendor")
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