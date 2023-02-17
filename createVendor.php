<head>
        <title>Tambah Data Jenis Buku</title>
        <style type="text/css">
        @import "style.css";</style>
        <script type="application/javascript">

        function isNumberkey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if( charCode > 31 && (charCode < 48 || charcode > 57))
                return false;

                return true;
        }
</script>
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
                <form action="insertVendor_db.php" method="post">
                        <h2>Tambah Data Vendor </h2>
                        <table>
                                
                                <tr>
                                        <td>Nama Vendor</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama_vendor" required=""></td>
                                </tr>
                                <tr>
                                        <td>Alamat Vendor</td>
                                        <td>:</td>
                                        <td><input type="text" name="alamat_vendor" required=""></td>
                                </tr>
                                <tr>
                                        <td>Telpon Vendor</td>
                                        <td>:</td>
                                        <td><input type="text" name="telp_vendor" required="" onkeypress="return isNumberkey(event)"></td>
                                </tr>
                                <tr>
                                        <td>Email Vendor</td>
                                        <td>:</td>
                                        <td><input type="text" name="email_vendor" required=""></td>
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