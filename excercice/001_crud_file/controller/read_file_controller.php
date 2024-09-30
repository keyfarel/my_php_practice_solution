<?php
require_once '../model/read_file.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = '../saved_file/' . $_POST['filename'] . '.txt';
    $content = readFileContent($filename);

    if ($content) {
        echo "<div class='alert alert-info'>Isi file '$filename':<br><pre>$content</pre></div>";
    } else {
        echo "<div class='alert alert-danger'>File '$filename' tidak ditemukan.</div>";
    }
}
