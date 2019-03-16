<?php include "header.php"; ?>

<?php
if(!isset($_SESSION['id_user'])) { ?>
    <script>
    window.location='login.php';    
    </script>
<?php
} ?>

<div id="body">
    <?php
    $id = $_GET['id'];
    $query_one = mysqli_query($con, "SELECT * FROM buku WHERE id_buku = '$id'") or die(mysqli_error($con));
    $row_one = mysqli_fetch_array($query_one);
    ?>
    <form action="" method="post">
        Judul<br>
        <input type="text" name="judul" value="<?=$row_one['judul']?>" required>
        <br><br>
        Penulis<br>
        <input type="text" name="penulis" value="<?=$row_one['penulis']?>" required>
        <br><br>
        Tahun Terbit<br>
        <input type="number" name="tahun" value="<?=$row_one['tahun_terbit']?>" required>
        <br><br>
        <button type="submit" name="edit">Edit</button>
    </form>
    
    <?php
    if(isset($_POST['edit'])) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun_terbit = $_POST['tahun'];
        $sql = "UPDATE buku SET judul = '$judul', penulis = '$penulis', tahun_terbit = '$tahun_terbit' WHERE id_buku = '$id'";
        $query = mysqli_query($con, $sql) or die(mysqli_error($con));
        if($query) { ?>
            <script>
                alert('Berhasil edit data');
                window.location='buku.php';    
            </script>
        <?php
        }
    }
    ?>
</div>

<?php include "footer.php"; ?>