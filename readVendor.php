<?php
    include "koneksi.php";
    session_start();
?>

<head>
    <title>Lihat Data Mahasiswa</title>
    <style type="text/css">
        @import "style.css";
        p{text-indent : 50px };
    </style>
</head>
<body>
    <div class="header">
        <div class="title">
            Menu Vendor
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
            <h2>Lihat Data Vendor</h2><br/>
            <a href="createVendor.php">+ Tambah</a>
            <table class="styled-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Vendor</th>
                    <th>Alamat Vendor</th>
                    <th>Telepon Vendor</th>
                    <th>Email Vendor</th>
                    <th>Aksi</th>
                </tr>
                </thead>
            <tbody>  
            <?php
                $baris=1;
                $view = mysqli_query($con, "select * from vendor");
                while($row = mysqli_fetch_array($view))
                {
                ?>
                    <tr>
                        <td>
                            <?php echo $baris ?>
                        </td>
                        <td>
                            <?php echo $row['nama_vendor'] ?>
                        </td>
                        <td>
                            <?php echo $row['alamat_vendor'] ?>
                        </td>
                        <td>
                            <?php echo $row['telp_vendor'] ?>
                        </td>
                        <td>
                            <?php echo $row['email_vendor'] ?>
                        </td>
                        <td>
                            <a href="updateVendor.php?id_vendor=<?php echo $row['id_vendor'] ?>">Ubah</a>
                            <a href="deleteVendor_db.php?id_vendor=<?php echo $row['id_vendor'] ?>" onclick="return confirm('Do you want to delete this record?');">Hapus</a>
                        </td>
                    </tr>
                <?php
                    $baris++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>