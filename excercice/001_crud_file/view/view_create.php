<?php include '../template/header.php'; ?>

<h2 class="text-center mb-4">Buat File Baru</h2>
<form action="../controller/create_file_controller.php" method="post" class="border p-4 rounded shadow-sm">
    <div class="mb-3">
        <label for="filename" class="form-label">Nama File</label>
        <input type="text" class="form-control" id="filename" name="filename" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Isi File</label>
        <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Buat File</button>
</form>

<?php include '../template/footer.php'; ?>
