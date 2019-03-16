<?php include "header.php"; ?>

<?php
if(!isset($_SESSION['id_user'])) { ?>
    <script>
    window.location='login.php';    
    </script>
<?php
} ?>

<div id="body">
    Halaman utama
</div>

<?php include "footer.php"; ?>