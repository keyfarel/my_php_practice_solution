<?php
session_start();
$_SESSION['facorite_color'] = "blue";
echo "Warna favorit dari sesi: " . $_SESSION['facorite_color'];
?>