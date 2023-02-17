<head>
        <title>Tambah Data Jenis Buku</title>
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
                <form action="insertJenisBuku_db.php" method="post">
                        <h2>Tambah Data Jenis Buku </h2>
                                <table>
                                
                                <tr>
                                        <td>Nama Jenis Buku</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama_jenis_buku" required=""></td>
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