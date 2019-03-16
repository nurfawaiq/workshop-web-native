<?php
include "+koneksi.php";

if(!isset($_SESSION['id_user'])) { ?>
    <script>
    window.location='login.php';    
    </script>
<?php
}

$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM buku WHERE id_buku = '$id'") or die(mysqli_error($con));
if($query) { ?>
    <script>
        alert('Berhasil hapus data');
        window.location='buku.php';    
    </script>
<?php
}
?>