<?php
global $connection;
include "../template/header.php";
include "../connection/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Edit User</h3>
                        </div>
                        <div class="card-body">
                            <form action="../service/update_service.php" method="POST" class="needs-validation"
                                  novalidate>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                           value="<?php echo htmlspecialchars($row['username']); ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter your username.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                           value="<?php echo htmlspecialchars($row['password']); ?>" required>
                                    <div class="invalid-feedback">
                                        Please enter your password.
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" name="submit">Update User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo "<p class='text-center'>User not found.</p>";
    }
} else {
    header("Location: ../view/read_view.php");
    exit();
}

include "../template/footer.php";
?>
