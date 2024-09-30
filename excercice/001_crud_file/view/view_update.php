<?php include '../template/header.php'; ?>

<h2 class="text-center mb-4">Perbarui File</h2>
<form action="../controller/update_file_controller.php" method="post" class="border p-4 rounded shadow-sm">
    <div class="mb-3">
        <label for="filename" class="form-label">Nama File</label>
        <input type="text" class="form-control" id="filename" name="filename" required>
    </div>
    <div class="mb-3">
        <label for="newdata" class="form-label">Isi Baru</label>
        <textarea class="form-control" id="newdata" name="newdata" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-warning">Perbarui File</button>
</form>

<?php include '../template/footer.php'; ?>
