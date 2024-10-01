<?php

require_once '../model/upload.php'; // include the procedural upload model

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $files = $_FILES['uploaded_file']; // Mengambil multiple files

    // Menghitung jumlah file yang di-upload
    $totalFiles = count($files['name']);
    $successCount = 0;
    $failCount = 0;

    for ($i = 0; $i < $totalFiles; $i++) {
        $file = [
            'name' => $files['name'][$i],
            'type' => $files['type'][$i],
            'tmp_name' => $files['tmp_name'][$i],
            'error' => $files['error'][$i],
            'size' => $files['size'][$i]
        ];

        // Pastikan file tidak error saat upload
        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo "Error pada file {$file['name']} <br>";
            $failCount++;
            continue;
        }

        try {
            // Cek apakah file berhasil diupload
            if (upload_file($file)) {
                $successCount++;
            } else {
                $failCount++;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "<br>"; // Menampilkan pesan error
            $failCount++;
        }
    }

    echo "Berhasil mengupload $successCount file.<br>";
    echo "Gagal mengupload $failCount file.<br>";

    // Debug: print the entire $_FILES array for further investigation
    error_log(print_r($_FILES, true));
} else {
    echo "Invalid request.";
}
