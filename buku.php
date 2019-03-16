<?php include "header.php"; ?>

<?php
if(!isset($_SESSION['id_user'])) { ?>
    <script>
    window.location='login.php';    
    </script>
<?php
} ?>

<div id="body">
    <div>Data Buku |  <a href="buku_tambah.php">Tambah</a></div>
    <br>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = mysqli_query($con, "SELECT * FROM buku") or die(mysqli_error($con));
                while($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$row['judul']?></td>
                    <td><?php echo $row['penulis']?></td>
                    <td><?=$row['tahun_terbit']?></td>
                    <td>
                        <a href="buku_edit.php?id=<?=$row['id_buku']?>">Edit</a>
                        |
                        <a href="buku_hapus.php?id=<?=$row['id_buku']?>" 
                        onclick="return confirm('Yakin hapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "footer.php"; ?>