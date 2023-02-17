<head>
    <title>Ubah Data Buku</title>
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
        <br/>
        <h2>Ubah Data Buku</h2>
        <?php
            if(isset($_GET['id_buku']))
            {
                $id_buku = $_GET['id_buku'];

                include "koneksi.php";

                $select = mysqli_query($con, "select * from Buku where id_buku='$id_buku'") or die(mysqli_error());
                $sel = mysqli_fetch_array($select);
            }
        ?>

        <form method="post" action="updateBuku_db.php?id_buku=<?php echo $id_buku ?>">
            <table border="0">
                <tr>
                    <td class="text-right">Nama Buku</td>
                    <td><input type="text" name="nama_buku" value="<?php echo $sel['nama_buku'] ?>"></td>
                </tr>
                <tr>
                <td class="text-right">Nama Jenis Buku</td>
                <td>
                    <select name="id_jenis_buku">
                    <?php 
                        include "koneksi.php";

                        $selectjenis = mysqli_query($con, "select * from JenisBuku") or die(mysqli_error());

                        while($row = mysqli_fetch_array($selectjenis))
                        {
                            
                    ?>
                    <?php 
                        if($sel['id_jenis_buku'] == $row['id_jenis_buku'])
                        {
                            ?>
                                <option selected value="<?php echo $row['id_jenis_buku'] ?>"><?php echo $row['nama_jenis_buku'] ?></option>
                            <?php

                        }
                        else
                        {
                            ?>
                            <option value="<?php echo $row['id_jenis_buku'] ?>"><?php echo $row['nama_jenis_buku'] ?></option>

                    <?php
                        }
                    }
                    ?>
                    
                    </select>
                </td>
                    
                <tr>
                <td class="text-right">Nama Vendor</td>  
                <td>
                    <select name="id_vendor">
                    <?php 
                        include "koneksi.php";

                        $selectvendor = mysqli_query($con, "select * from vendor") or die(mysqli_error());

                        while($row = mysqli_fetch_array($selectvendor))
                        {
                            
                    ?>
                    <?php 
                        if($sel['id_vendor'] == $row['id_vendor'])
                        {
                            ?>
                                <option selected value="<?php echo $row['id_vendor'] ?>"><?php echo $row['nama_vendor'] ?></option>
                            <?php

                        }
                        else
                        {
                            ?>
                            <option value="<?php echo $row['id_vendor'] ?>"><?php echo $row['nama_vendor'] ?></option>

                    <?php
                        }
                    }
                    ?>
                    
                    </select>
                </td>
                </tr>

                <tr>
                    <td class="text-right">Jumlah Stok</td>
                    <td><input type="text" name="jml_stok" value="<?php echo $sel['jml_stok'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit" value="simpan">Ubah</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>