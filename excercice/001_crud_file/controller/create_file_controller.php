<?php
require_once '../model/create_file.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = '../saved_file/' . $_POST['filename'] . '.txt';
    $content = $_POST['content'];

    if (createFile($filename, $content)) {
        echo "<div class='alert alert-success'>File '$filename' berhasil dibuat.</div>";
    } else {
        echo "<div class='alert alert-danger'>Gagal membuat file '$filename'.</div>";
    }

    header("refresh:3;url=../index.php"); // Redirect setelah 3 detik
    exit();
}
