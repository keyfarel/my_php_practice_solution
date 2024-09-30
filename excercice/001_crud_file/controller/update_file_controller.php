<?php
require_once '../model/update_file.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = '../saved_file/' . $_POST['filename'] . '.txt';
    $newData = $_POST['newdata'];

    if (updateFile($filename, $newData)) {
        echo "<div class='alert alert-success'>File '$filename' berhasil diperbarui.</div>";
    } else {
        echo "<div class='alert alert-danger'>Gagal memperbarui file '$filename'.</div>";
    }

    header("refresh:3;url=../index.php");
    exit();
}
