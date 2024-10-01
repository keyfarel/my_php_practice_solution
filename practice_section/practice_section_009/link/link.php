<?php include "../template/header.php"; ?>

<?php
if (isset($_GET["name"])) {
    echo "<br>nama yang diterima melalui Get: " . $_GET["name"];
}

include "../cookie/cookie.php";
include "../session/session.php";
?>

<?php include "../template/footer.php"; ?>
