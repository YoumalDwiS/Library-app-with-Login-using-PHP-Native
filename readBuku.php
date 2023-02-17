<?php
    include "koneksi.php";
    session_start();
?>

<head>
    <title>Lihat Data Buku</title>
    <style type="text/css">
        @import "style.css";
        p{text-indent : 50px };
    </style>
</head>
<body>
    <div class="header">
        <div class="title">
            Menu Buku
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
        
        <h2>Lihat Data Buku</h2><br/>
        <a href="createBuku.php">+ Tambah</a>
        <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>ID Jenis Buku</th>
                <th>ID Vendor</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>  
            <?php
                $baris=1;
                $view = mysqli_query($con, "select b.id_buku, b.nama_buku, j.nama_jenis_buku, v.nama_vendor, 
                b.jml_stok from Buku b inner join jenisbuku j on b.id_jenis_buku=j.id_jenis_buku inner join vendor v on b.id_vendor=v.id_vendor ");
                while($row = mysqli_fetch_array($view))
                {
                ?>
                    <tr>
                        <td>
                            <?php echo $baris ?>
                        </td>
                        
                        <td>
                            <?php echo $row['nama_buku'] ?>
                        </td>
                        <td>
                            <?php echo $row['nama_jenis_buku'] ?>
                        </td>
                        <td>
                            <?php echo $row['nama_vendor'] ?>
                        </td>
                        <td>
                            <?php echo $row['jml_stok'] ?>
                        </td>
                        <td>
                            <a href="updateBuku.php?id_buku=<?php echo $row['id_buku'] ?>">Ubah</a>
                            <a href="deleteBuku_db.php?id_buku=<?php echo $row['id_buku'] ?>" onclick="return confirm('Do you want to delete this record?');">Hapus</a>
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