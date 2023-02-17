<head>
    <title>Ubah Data Jenis Buku</title>
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
        <h2>Ubah Data Jenis Buku</h2>
        <?php
            if(isset($_GET['id_jenis_buku']))
            {
                $id_jenis = $_GET['id_jenis_buku'];

                include "koneksi.php";

                $select = mysqli_query($con, "select * from jenisbuku where id_jenis_buku='$id_jenis'") or die(mysqli_error());
                $sel = mysqli_fetch_array($select);
            }
        ?>

        <form method="post" action="updateJenisBuku_db.php?id_jenis_buku=<?php echo $id_jenis ?>">
            <table border="0">
                <tr>
                    <td class="text-right">Nama Jenis Buku</td>
                    <td><input type="text" name="nama_jenis_buku" value="<?php echo $sel['nama_jenis_buku'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit" value="simpan">Ubah</button></td>
                </tr>
            </table>
        </form>
    </div>

</body>