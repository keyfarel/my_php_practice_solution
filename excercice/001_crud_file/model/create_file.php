<?php

function createFile($filename, $data) {
    $file = fopen($filename, 'w');
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        return true;
    } else {
        return false;
    }
}
