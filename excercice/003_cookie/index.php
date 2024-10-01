<?php include "template/header.php"; ?>

<div class="container mt-5">
    <h2 class="mb-4">Upload Multiple Files</h2>

    <?php
    if (isset($_COOKIE['last_upload'])) {
        echo "<p>Terakhir kali Anda mengupload " . $_COOKIE['last_upload'] . " file.</p>";
    }
    ?>

    <form action="controller/upload_controller.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="fileInput" class="form-label">Choose files to upload</label>
            <input class="form-control" type="file" id="fileInput" name="uploaded_file[]" multiple required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

<?php include "template/footer.php"; ?>
