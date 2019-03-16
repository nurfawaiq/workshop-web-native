<?php include "header.php"; ?>

<?php
if(isset($_SESSION['id_user'])) { ?>
    <script>
    window.location='index.php';    
    </script>
<?php
} ?>

<style>
.login-page {
    width: 300px; margin: 0 auto; margin-top: 40px;
}
.login-title {
    text-align: center; padding: 10px; background-color: #f60;
}
.login-body {
    padding: 10px 5px 5px 65px; background-color: #f90;
}
</style>
<div id="body">
    <div class="login-page">
        <div class="login-title">Halaman Login</div>
        <div class="login-body">
            <form action="" method="post">
                Username<br>
                <input type="text" name="username" required autofocus>
                <br><br>
                Password<br>
                <input type="password" name="password" required>
                <br><br>
                <button type="submit" name="login">Login</button>
            </form>
            <?php
            if(isset($_POST['login'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $query_one = mysqli_query($con, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));
                // echo mysqli_num_rows($query_one);
                if(mysqli_num_rows($query_one) > 0) {
                    $row_one = mysqli_fetch_array($query_one);
                    $_SESSION['id_user'] = $row_one['id_user'];
                    ?>
                    <script>
                        alert('Login berhasil'); window.location='index.php';    
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert('Login gagal');
                    </script>
                    <?php
                } 
            }
            ?>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>