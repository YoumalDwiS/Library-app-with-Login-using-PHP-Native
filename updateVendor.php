<head>
    <title>Ubah Data Vendor</title>
    <style type="text/css">
        @import "style.css";
        p{text-indent : 50px };
    </style>
</head>
<body>
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
        <h2>Ubah Data Vendor</h2>
        <?php
            if(isset($_GET['id_vendor']))
            {
                $id_vendor = $_GET['id_vendor'];

                include "koneksi.php";

                $select = mysqli_query($con, "select * from vendor where id_vendor='$id_vendor'") or die(mysqli_error());
                $sel = mysqli_fetch_array($select);
            }
        ?>

        <form method="post" action="updateVendor_db.php?id_vendor=<?php echo $id_vendor ?>">
            <table border="0">
                <tr>
                    <td class="text-right">Nama Vendor</td>
                    <td><input type="text" name="nama_vendor" value="<?php echo $sel['nama_vendor'] ?>"></td>
                </tr>
                <tr>
                    <td class="text-right">Alamat Vendor</td>
                    <td><input type="text" name="alamat_vendor" value="<?php echo $sel['alamat_vendor'] ?>"></td>
                </tr>
                <tr>
                    <td class="text-right">Telepon Vendor</td>
                    <td><input type="text" name="telp_vendor" value="<?php echo $sel['telp_vendor'] ?>"></td>
                </tr>
                <tr>
                    <td class="text-right">Email Vendor</td>
                    <td><input type="text" name="email_vendor" value="<?php echo $sel['email_vendor'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit" value="simpan">Ubah</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>