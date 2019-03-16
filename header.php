<?php include "+koneksi.php"; ?>
<html>
    <head>
        <title>Perpustakaan</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                Header
            </div>
            <div class="menu">
                <ul>
                    <?php
                    if(isset($_SESSION['id_user'])) { ?>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="buku.php">Buku</a>
                    </li>
                    <li>
                        <a href="">Member</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <?php
                    }
                    if(!isset($_SESSION['id_user'])) { ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php
                    } ?>
                </ul>
            </div>