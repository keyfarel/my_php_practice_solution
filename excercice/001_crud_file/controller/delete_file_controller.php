<?php
require_once '../model/delete_file.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = '../saved_file/' . $_POST['filename'] . '.txt';

    if (deleteFile($filename)) {
        echo "<div class='alert alert-success'>File '$filename' berhasil dihapus.</div>";
    } else {
        echo "<div class='alert alert-danger'>File '$filename' tidak ditemukan.</div>";
    }

    header("refresh:3;url=../index.php");
    exit();
}
