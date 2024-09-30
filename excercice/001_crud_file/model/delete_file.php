<?php

function deleteFile($filename) {
    if (file_exists($filename)) {
        unlink($filename);
        return true;
    } else {
        return false;
    }
}
