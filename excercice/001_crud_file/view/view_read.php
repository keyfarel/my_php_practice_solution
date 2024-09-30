<?php include '../template/header.php'; ?>

<h2 class="text-center mb-4">Baca File</h2>
<form action="../controller/read_file_controller.php" method="post" class="border p-4 rounded shadow-sm">
    <div class="mb-3">
        <label for="filename" class="form-label">Nama File</label>
        <input type="text" class="form-control" id="filename" name="filename" required>
    </div>
    <button type="submit" class="btn btn-primary">Baca File</button>
</form>

<?php include '../template/footer.php'; ?>
