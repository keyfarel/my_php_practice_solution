<?php

function readFileContent($filename) {
    if (file_exists($filename)) {
        return file_get_contents($filename);
    } else {
        return false;
    }
}
