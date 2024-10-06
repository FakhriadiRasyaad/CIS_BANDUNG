<?php
include("inc_koneksi.php");
session_start();
if(!isset($_SESSION['admin_username'])){
    headher("location = login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
    background-color: #003285;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px 20px;
    font-family: 'Arial', sans-serif;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-start;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    padding: 10px 15px;
    border-radius: 4px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

nav ul li a:hover {
    background-color: #1c53ad;
    color: #f1f1f1;
}

nav ul li a.active {
    background-color: #575757;
    color: #fff;
}
nav ul li.logout {
    margin-left: auto;
}

</style>
</head>
<body>
    <div id="app">
        <nav>
            <ul>
                 <?php if (in_array("aadmin", $_SESSION['admin_akses'])){ ?>
                    <li><a href="admin.php">Halaman Admin</a></li>
                <?php } ?>
                <?php if (in_array("admin", $_SESSION['admin_akses'])){ ?>
                    <li><a href="co_admin.php">Halaman Co-Admin</a></li>
                <?php } ?>
    
                    <li><a href="staff.php">Home</a></li>
                
                <li class="logout"><a href="logout.php">Keluar</a></li>
            </ul>
        </nav>
