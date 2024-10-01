<?php

$uploadDir = '../uploaded_file/';
$allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
$allowedMimeTypes = ['image/jpeg', 'image/png', 'application/pdf'];
$maxFileSize = 10485760; // 10MB

// Fungsi untuk memastikan folder upload ada
function ensure_upload_dir($dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Fungsi untuk validasi ekstensi file
function validate_file($file, $allowedExtensions, $allowedMimeTypes) {
    $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $fileMimeType = mime_content_type($file['tmp_name']);

    // Debugging: tampilkan MIME type
    echo "Detected MIME type: $fileMimeType<br>";

    // Cek apakah ekstensi dan MIME tipe file sesuai dengan yang diperbolehkan
    if (!in_array($fileExtension, $allowedExtensions)) {
        throw new Exception("Format file tidak diperbolehkan. Hanya JPG, PNG, dan PDF.");
    }

    if (!in_array($fileMimeType, $allowedMimeTypes)) {
        throw new Exception("Tipe file tidak valid. Pastikan file Anda berupa gambar atau PDF.");
    }
}

// Fungsi untuk validasi ukuran file
function validate_file_size($file, $maxFileSize) {
    if ($file['size'] > $maxFileSize) {
        throw new Exception("Ukuran file terlalu besar. Batas maksimum adalah 10MB.");
    }
}

// Fungsi untuk mengunggah file
/**
 * @throws Exception
 */
function upload_file($file) {
    global $uploadDir, $allowedExtensions, $allowedMimeTypes, $maxFileSize;

    ensure_upload_dir($uploadDir);

    // Validasi file format dan ukuran
    validate_file($file, $allowedExtensions, $allowedMimeTypes);
    validate_file_size($file, $maxFileSize);

    $uploadFile = $uploadDir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
        return true;
    } else {
        throw new Exception("File gagal diupload.");
    }
}
