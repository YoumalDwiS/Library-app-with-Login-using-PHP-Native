<?php
    include "koneksi.php";
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
            Menu Mahasiswa
        </div>
    </div>

    <div class="menu">
        <ul>
        <a href="logout.php"><li>Logout</li></a>
        </ul>
    </div>

    <div class="content">
        
        <h2>Lihat Data Buku</h2><br/>
        
        <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Buku</th>
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
                b.jml_stok from Buku b inner join jenisbuku j on b.id_jenis_buku=j.id_jenis_buku inner join vendor v on b.id_vendor=v.id_vendor");
                while($row = mysqli_fetch_array($view))
                {
                ?>
                    <tr>
                        <td>
                            <?php echo $baris ?>
                        </td>
                        <td>
                            <?php echo $row['id_buku'] ?>
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