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
                        Menu Jenis Buku
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
        
        <h2>Lihat Data Jenis Buku</h2><br/>
        <a href="createJenisBuku.php">+ Tambah</a>
        <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jenis Buku</th>
                <th>Aksi</th>
            </tr>
            </thead>
        <tbody>  
            <?php
            
                $baris=1;
                $view = mysqli_query($con, "select * from jenisbuku");
                while($row = mysqli_fetch_array($view))
                {
                ?>
                    <tr>
                        <td>
                            <?php echo $baris ?>
                        </td>
                        
                        <td>
                            <?php echo $row['nama_jenis_buku'] ?>
                        </td>
                        <td>
                            <a href="updateJenisBuku.php?id_jenis_buku=<?php echo $row['id_jenis_buku'] ?>">Ubah</a>
                            <a href="deleteJenisBuku_db.php?id_jenis_buku=<?php echo $row['id_jenis_buku'] ?>" onclick="return confirm('Do you want to delete this record?');">Hapus</a>
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