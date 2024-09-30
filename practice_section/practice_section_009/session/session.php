<?php
session_start();
$_SESSION['facorite_color'] = "blue";
echo "<br>Warna favorit dari sesi: " . $_SESSION['facorite_color'];
?>