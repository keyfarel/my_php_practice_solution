<?php

function updateFile($filename, $newData) {
    if (file_exists($filename)) {
        $file = fopen($filename, 'w');
        if ($file) {
            fwrite($file, $newData);
            fclose($file);
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
