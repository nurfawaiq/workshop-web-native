<?php include "header.php"; ?>

<?php
if(!isset($_SESSION['id_user'])) { ?>
    <script>
    window.location='login.php';    
    </script>
<?php
} ?>

<div id="body">
    <form action="" method="post">
        Judul<br>
        <input type="text" name="judul" required autofocus>
        <br><br>
        Penulis<br>
        <input type="text" name="penulis" required>
        <br><br>
        Tahun Terbit<br>
        <input type="number" name="tahun" required>
        <br><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
    
    <?php
    if(isset($_POST['tambah'])) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun_terbit = $_POST['tahun'];
        $sql = "INSERT INTO buku(judul, penulis, tahun_terbit) 
        VALUES('$judul', '$penulis', '$tahun_terbit')";
        $query = mysqli_query($con, $sql) or die(mysqli_error($con));
        if($query) { ?>
            <script>
                alert('Berhasil tambah data');
                window.location='buku.php';    
            </script>
        <?php
        }
    }
    ?>
</div>

<?php include "footer.php"; ?>