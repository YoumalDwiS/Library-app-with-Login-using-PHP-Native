<head>
        <title>Tambah Data Buku</title>
        <style type="text/css">
        @import "style.css";</style>
</head>
<body >
        <div class="header">
                <div class="title">
                        HOME
                </div>
        </div>

        <div class="menu">
                <ul>
                <a href="home.php"><li>Home</li></a>
                <a href="readJenisBuku.php"><li>JenisBuku</li></a> 
                <a href="readBuku.php"><li>Buku</li></a>
                <a href="readVendor.php"><li>Vendor</li></a>
                </ul>
        </div>

        <div class="content">
                <form action="insertBuku_db.php" method="post">
                        <h2>Tambah Data Buku </h2>
                        <table>

                                <tr>
                                        <td>Nama Buku</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama_buku" required=""></td>
                                </tr>
                                <tr>
                                        <td>Nama Jenis Buku</td>
                                        <td>:</td>
                                        <td>
                                        <select name="id_jenis_buku">
                                                <?php 
                                                        include "koneksi.php";

                                                        $selectjenis = mysqli_query($con, "select * from JenisBuku") or die(mysqli_error());

                                                        while($row = mysqli_fetch_array($selectjenis))
                                                        {
                                                                ?>
                                                                <option value="<?php echo $row['id_jenis_buku'] ?>"><?php echo $row['nama_jenis_buku'] ?></option>
                                                        <?php
                                                        }
                                                ?>
                                        </td>
                                </tr>

                                <tr>
                                        <td>Nama Vendor</td>
                                        <td>:</td>
                                        <td>
                                        <select name="id_vendor">
                                                <?php 
                                                        include "koneksi.php";

                                                        $selectvendor = mysqli_query($con, "select * from vendor") or die(mysqli_error());

                                                        while($row = mysqli_fetch_array($selectvendor))
                                                        {
                                                                ?>
                                                                <option value="<?php echo $row['id_vendor'] ?>"><?php echo $row['nama_vendor'] ?></option>
                                                        <?php
                                                        }
                                                ?>
                                        </td>
                                </tr>
                                <tr>
                                        <td>Jumlah Stok</td>
                                        <td>:</td>
                                        <td><input type="text" name="jml_stok" required=""></td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td></td>
                                        <td><button type="submit" name="submit" value="simpan">Simpan</button></td>
                                </tr>
                        <table>
                </form>
        </div>
</body>

